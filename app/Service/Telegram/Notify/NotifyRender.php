<?php

namespace App\Service\Telegram\Notify;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
//use App\Models\Action;

//use App\Http\Controllers\Service\Telegram\BotCommands;
//use App\Http\Controllers\Service\Telegram\BotFunctions;

//use App\Models\Product;
//use App\Models\Order;
//use App\Models\OrderDetail;

//use App\Models\User;
//use App\Models\Shop;
//use App\Models\Invitation;
//use App\Models\UserBlacklist;

class NotifyRender extends Controller
{

    public $functions;
    public string $lang = 'ru';

    public function makeImage($image = NULL){
        $make = json_encode(['inline_keyboard' => $image]);
        return array(
            //'one_time_keyboard' => false,
            'reply_markup' => $make
        );
    }

    public function notifyOrderToAdmin($id){
        $order = Order::where('id', $id)->first();
        $information = json_decode($order->shipping_address);

        $details = OrderDetail::where('order_id', $id)->get();
        $credit_message = '';
        if(!empty($details->credit_status)){
            $credit_info = json_decode($details->credit_status);
            $credit_message = '🔴 РАССРОЧКА ['.$credit_info->credit_type.']🔴';
        }
        $proccess = ''; //count($details);
        foreach($details as $key => $detail){
            $product = Product::where('id', $detail->product_id)->first();
            $math_id = $key + 1;
            $math_price = $detail->price * $detail->quantity;
            $proccess .= $math_id.'. '.$product->name.' <b>x'.$detail->quantity.' шт.</b>
'.number_format($detail->price).' <b>x'.$detail->quantity.' = '.number_format($math_price).' сум</b>
';
        }

        if($order->userid){ $client = 'ID пользователя: <b>#'.$order->user_id.'</b>'; }
        else{ $client = 'Гость ID: <b>#'.$order->guest_id.'</b>'; }

        if($order->payment_type == 'cash_on_delivery'){ $order->payment_type = 'Оплата при доставке';
        }else{ $order->payment_type = 'Терминал'; }

        if($order->payment_status == 'paid'){ $order->payment_status = 'оплаченный';
        }else{ $order->payment_status = 'неоплаченный'; }


$text = 'Код заказа <b>#'.$order->id.'</b>'.$credit_message.'

'.$client.'
Имя: <b>'.$information->name.'</b>
Город: <b>'.$information->city.'</b>
Адрес: <b>'.$information->address.'</b>
Номер телефона: '.$information->phone.'

'.$proccess.'
Тип оплаты: <b>'.$order->payment_type.'</b>
Статус оплаты: <b>'.$order->payment_status.'</b>
Общая стоимость: <b>'.number_format($order->grand_total).' сум</b>
Создано в: <b>'.$order->created_at->format('d.m.Y H:i').'</b>';

return $text;

    }

    public function notifyOrderToSellers($id, $seller_id){
        $order = Order::where('id', $id)->first();
        $information = json_decode($order->shipping_address);

        $details = OrderDetail::where('order_id', $id)->where('seller_id', $seller_id)->get();
        $credit_message = '';
        if(!empty($details->credit_status)){
            $credit_info = json_decode($details->credit_status);
            $credit_message = '🔴 РАССРОЧКА ['.$credit_info->credit_type.']🔴';
        }
        $shop_name = Shop::where('user_id', $seller_id)->first()->name;
        $proccess = ''; //count($details);
        foreach($details as $key => $detail){
            $product = Product::where('id', $detail->product_id)->first();
            $math_id = $key + 1;
            $math_price = $detail->price * $detail->quantity;
            $proccess .= $math_id.'. '.$product->name.' <b>x'.$detail->quantity.' шт.</b>
'.number_format($detail->price).' <b>x'.$detail->quantity.' = '.number_format($math_price).' сум</b>
';
        }

        if($order->userid){ $client = 'ID пользователя: <b>#'.$order->user_id.'</b>'; }
        else{ $client = 'Гость ID: <b>#'.$order->guest_id.'</b>'; }

        if($order->payment_type == 'cash_on_delivery'){ $order->payment_type = 'Оплата при доставке';
        }else{ $order->payment_type = 'Терминал'; }

        if($order->payment_status == 'paid'){ $order->payment_status = 'оплаченный';
        }else{ $order->payment_status = 'неоплаченный'; }


$text = '
Код заказа <b>#'.$order->id.'</b>'.$credit_message.'

Продавец: <b>'.$shop_name.'</b>

Имя: <b>'.$information->name.'</b>
Город: <b>'.$information->city.'</b>
Адрес: <b>'.$information->address.'</b>
Номер телефона: '.$information->phone.'

'.$proccess.'
Тип оплаты: <b>'.$order->payment_type.'</b>
Статус оплаты: <b>'.$order->payment_status.'</b>
Общая стоимость: <b>'.number_format($order->grand_total).' сум</b>
Создано в: <b>'.$order->created_at->format('d.m.Y H:i').'</b>';

return $text;

    }

    public function successAddedSeller($user_id, $seller_id){
        $shop = Shop::where('user_id', $seller_id)->first();

$text = '🎉*Поздравляем!*

Ваш Telegram ID: '.$user_id.'
Ваш магазин: '.$shop->name.'

На ваш профиль будут приходить заказы от OPENSHOP.UZ.

Если у вас возникнут проблемы или недочеты, вы можете связаться с support@openshop.uz.';

return $text;

    }

    public function notifyInvitationToAdmin($id){
        $invitation = Invitation::findOrFail($id);

$text = '*🏢Мы хотим работать с вами!*

ID заявка: *#'.$invitation->id.'*

Имя заявителя: *'.$invitation->name.'*
Название компании: *'.$invitation->company.'*
Адрес компании: *'.$invitation->address.'*

Эл. почта: *'.$invitation->email.'*
Контактный номер: '.$invitation->phone.'

Информация о партнере: *'.$invitation->information.'*

Документы: [Показать]('.route('invitation.show', encrypt($invitation->id)).')

Создано в: *'.$invitation->created_at->format('d.m.Y H:i').'*
#partner #invitation';

return $text;

    }

    public function notifyErrorPageRender($exp){

if(in_array($exp['type'], ['404', '500', '501'])){

    if($exp['user_id'] != NULL){
        $user = User::where('id', $exp['user_id'])->first();
        if($user->user_type == 'admin')
            $user_meta = '👨‍💻Admin: '.$user->name.' ('.$user->user_type.') #: '. $exp['user_id'];
        elseif($user->user_type == 'staff')
            $user_meta = '👮🏻‍♂️Admin: '.$user->name.' ('.$user->user_type.') #: '. $exp['user_id'];
        elseif($user->user_type == 'seller')
            $user_meta = '👨‍🌾Seller: '.$user->name.' ('.$user->user_type.') #: '. $exp['user_id'];
        else
            $user_meta = '🧟‍♂️User: '.$user->name.' ('.$user->user_type.') #: '. $exp['user_id'];
    }else{
        if(stripos($exp['agent'], "Telegram"))
            $user_meta = '🔵Telegram Bot';
        elseif(stripos($exp['agent'], "bot"))
            $user_meta = '🤖Crawer Bot';
        else
            $user_meta = '🧖‍♂️Guest';
    }
}

if($exp['type'] == '404'){

$text = '⚠️ '.$exp['type'].' ERROR

URL: '.$exp['fullUrl'].'

'.$exp['getMessage'].'

'.$exp['getFile'].'

'.$exp['agent'].'

'.$user_meta.'

IP: '.$exp['ip'];

}elseif($exp['type'] == '500'){

$text = '⛔️ '.$exp['type'].' ERROR (by '.$exp['by'].')

'.$exp['getFile'].' <b>'.$exp['getLine'].'-line</b>

URL: '.$exp['fullUrl'].'

'.$exp['getMessage'].'

'.$exp['agent'].'

'.$user_meta.'

IP: <code>'.$exp['ip'].'</code> | '.now()->format('d.m.Y H:i').'';

}elseif($exp['type'] == '400'){

$text = '⚠️ 400 '.$exp['getMessage'].'

URL: '.$exp['fullUrl'].'

'.$exp['agent'].'

IP: '.$exp['ip'];

}elseif($exp['type'] == '401'){

$text = '⚠️ 401 '.$exp['getMessage'].'

URL: '.$exp['fullUrl'].'

'.$exp['agent'].'

IP: '.$exp['ip'].' | Time: '.now();

}

    return $text;

    }

    public function notifyOffer($data){

$text = '🔥🔴*Предложение*🔴🔥

👤Имя: '.$data['name'].'

📞Контакт: '.$data['contact'].'

📩Сообщение: '.$data['message'].'

🕔Время: '.$data['time'].'

🌐IP: '.$data['ip'].'

🔥#openshop #offer🔥';


    return $text;

    }

    public function setUserChatID($id, $profile){
        $user = User::findOrFail($id);

        if(isset($profile->username))
            $username = $profile->username != NULL ? 'Username: @'.$profile->username : NULL;

        //$test = 1 != 0 ? 'first' : 'second';

$text = 'User ID: <b>#'.$user->id.'</b>
Name: '.$user->name.'
Email: '.$user->email.'

Telegram ID: '.$profile->id.'
Name: '.$profile->name.'
'.$userinfo.'
';

return $text;

    }

    public function connectMe($user){
        $text = 'ID: `'.$user->id.'`

Name: '.$user->first_name.'
Username: @'.$user->username.'

#connect';
        return $text;
    }

    public function blackList(){
        $lists = UserBlacklist::all();
        $proccess = '';
        $i = 0;
        foreach($lists as $list){
            $i++;
            $proccess .= $list->ip.'
            '.$list->agent.'
';
        }

        $text = 'Hello World

'.$proccess.'

'.now().'

#blacklist';
        return $text;
    }

    public function whiteList($duration = '24h'){
        $link = 'https://openshop.uz/addwhitelist';
        $token = encrypt(today()->timestamp.'_'.$duration);

        $text = '<b>Add to Whitelist</b>

Generated: <b>'.now().'</b>

Expire: <b>'.$duration.'</b>

Access to: <b>Admin Panel</b>

Link: <a href="'.$link.'?token='.$token.'">CLICK HERE</a>

#whitelist';
        return $text;
    }

    public function trendyol($duration = 'dialy'){
        $list = '';
        foreach(Product::where('deleted', 0)->where('from_country', 'TR')->whereDate('created_at', '=', now()->toDateString())->select('user_id')->get()->groupBy('user_id')->map->count()->sort()->reverse() as $user_id => $added_count){
            $list .= User::where('id', $user_id)->first()->name." - <b>".$added_count."</b>\n";
        }

        $text = '<b>Dialy</b> '.today()->format('d.m.Y').'

'.$list.'
#trendyol';
        return $text;
    }

    public function product($duration = 'dialy'){
        $list = '';
        foreach(Product::where('deleted', 0)->whereDate('created_at', '=', now()->toDateString())->select('user_id')->get()->groupBy('user_id')->map->count()->sort()->reverse() as $user_id => $added_count){
            $list .= User::where('id', $user_id)->first()->name." - <b>".$added_count."</b>\n";
        }

        $text = '<b>Dialy</b> '.today()->format('d.m.Y').'

'.$list.'
#trendyol';
        return $text;
    }

    public function dailyProducts(){
        $created = Product::where('deleted', 0)->whereDate('created_at', today())->select('user_id')->get()->groupBy('user_id')->map->count()->sort()->reverse();
        $edited = Action::where('action_type', 'product')->where('action', 'edit')->where('user_id', '!=', 0)->whereDate('created_at', today())->get()->groupBy('user_id')->map->count()->sort()->reverse();
        $moderated = Action::where('action_type', 'product_moderation')->where('user_id', '!=', 0)->whereDate('created_at', today())->get()->groupBy('user_id')->map->count()->sort()->reverse();

        $text = "<b>Добавленные товары за сегодня</b>\n\n";
        $created_counter = 0;

        if(isset($created)){
            foreach($created as $user_id => $added_count){
                $text .= User::where('id', $user_id)->first()->name." - ".$added_count."\n";
                $created_counter = $created_counter+(int)$added_count;
            }
        }else{
            $text .= "❌Сегодня товар не добавлен\n";
        }

        $text .= "\n<b>Измененные товары за сегодня</b>\n\n";
        $edited_counter = 0;

        if(isset($edited)){
            foreach($edited as $user_id => $edited_count){
                $text .= User::where('id', $user_id)->first()->name." - ".$edited_count."\n";
                $edited_counter = $edited_counter+$edited_count;
            }
        }else{
            $text .= "❌Сегодня товар не изменил";
        }

        $text .= "\n<b>Проверенные товары за сегодня</b>\n\n";
        $moderated_counter = 0;
        if(isset($moderated)){
            foreach($moderated as $user_id => $moderated_count){
                $text .= User::where('id', $user_id)->first()->name." - ".$moderated_count."\n";
                $moderated_counter = $moderated_counter+$moderated_count;
            }
        }else{
            $text .= "❌Сегодня товар не изменил";
        }

        $text .= "\n\nОбщее добавленные: ".$created_counter."";
        $text .= "\nОбщее изменённые: ".$edited_counter."";
        $text .= "\nОбщее проверенные: ".$moderated_counter."\n";
        $text .= "\n#user #dialy";

        $text .= "\n<b>".now()->format('d.m.Y H:i')."</b>";

        return $text;
    }


}
