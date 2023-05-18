<?php

namespace App\Service\Telegram\Notify;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\Service\Telegram\Bot;
use App\Http\Controllers\Service\Telegram\BotCommands;
use App\Http\Controllers\Service\Telegram\BotFunctions;
use App\Http\Controllers\Service\Telegram\Notify\NotifyRender as Render;

use App\Models\Order;
use App\Models\Seller;
use App\Models\OrderDetail;
//use App\Models\TelegramRender;
use App\Models\TelegramStaff;

use App\Models\Product;
//use App\Http\Controllers\Parser\ProductsController;
use App\Http\Controllers\Crawler\CrawlerController;

use Illuminate\Support\Str;

class Notify extends Controller{

    private $bot_config = 'notify';
    public $render;
    public $bot;

    public $allowed_bot = [
        '127622235',    // Kamoliddin
        '312038752',    // Sardor
        '1365271626',   // Operator @WWWOPENSHOPUZ
        '5467077686',   // Maftuna @m_khodjiyeva
        '1187875653',   // Gulchexra ofis
    ];
    public $allowed_errors = [
        '127622235',    // Kamoliddin
    ];
    public $allowed_orders = [
        //'127622235',    // Kamoliddin
        '312038752',    // Sardor
        '1365271626',   // Operator @WWWOPENSHOPUZ
        '1187875653',   // Gulchexra ofis
        '544423944',    // Baxtiyor
    ];
    public $allowed_offers = [
        '127622235',    // Kamoliddin
        '312038752',    // Sardor
    ];
    public $allowed_invitations = [
        '127622235',    // Kamoliddin
        '312038752',    // Sardor
    ];
    public $allowed_parser = [
        '127622235',    // Kamoliddin
        '312038752',    // Sardor
    ];

    public function __construct(){
        $this->bot = new Bot('notify');
        $this->render = new Render;
    }

    public function index(Request $request){
        if($request->isMethod('post')){
            $update = json_decode($request->getContent());

            if(isset($update)){
                // MESSAGE INFO
                $message = $update->message ?? NULL;
                $text = $message->text ?? NULL;
                $chat_id = $message->chat->id ?? NULL;
                //$sticker = $message->sticker ?? NULL;
                $message_id = $message->message_id ?? NULL;
                $reply = $message->reply_to_message ?? NULL;
                $from_reply = $message->reply_to_message->from->username ?? NULL;

                // USER INFO
                $user_id = $message->from->id ?? NULL;
                $user_name = $message->from->name ?? NULL;
                $user_username = $message->from->username ?? NULL;

                // Telegram BOT Answers
                if($text != NULL){
                    //$this->bot->sendMessage('127622235', 'freezee');
                    if(in_array($chat_id, $this->allowed_bot)){
                        //$this->bot->sendMessage($chat_id, $update->message->chat->id);
                        if($text == '/blacklist'){
                            return $this->bot->sendMessage($user_id, $this->render->blackList());
                        }elseif($text == '/trendyol'){
                            return $this->bot->sendMessage($user_id, $this->render->trendyol());
                        }elseif($text == '/daily_products'){
                            return $this->bot->sendMessage($user_id, $this->render->dailyProducts());
                        }elseif($text == '/whitelist'){
                            return $this->bot->sendMessage($user_id, $this->render->whiteList('24h'));
                            //$this->bot->sendMessage($user_id, $this->render->whiteList('24h'));
                        }elseif(str_contains($text, '/whitelist_')){
                            $text_duration = explode("_", $text)[1];
                            sendTelegram('me', 'Response: '.$text_duration);
                            return $this->bot->sendMessage($user_id, $this->render->whiteList($text_duration));
                            /*if(isset($test[1]) && $test[1] > 1024){
                                if(strrchr($test[1], '1024')){
                                    return $this->checkSellerReferal($chat_id, $user_id, $test[1]);
                                }
                            }*/
                        }elseif(str_contains($text, '/start')){
                            $test = explode(" ", $text);
                            if(isset($test[1]) && $test[1] > 1024){
                                if(strrchr($test[1], '1024')){
                                    return $this->checkSellerReferal($chat_id, $user_id, $test[1]);
                                }
                            }
                        }elseif(str_contains($text, '/decode')){
                            $test = explode(" ", $text);
                            if(isset($test[1])){
                                return $this->bot->sendMessage($user_id, decrypt($test[1]));
                            }
                        }elseif(str_contains($text, '/encode')){
                            $test = explode(" ", $text);
                            if(isset($test[1])){
                                return $this->bot->sendMessage($user_id, encrypt($test[1]));
                            }
                        }elseif(in_array($chat_id, $this->allowed_parser) && str_contains($text, 'https://')){

                            if(str_contains($text, 'https://www.trendyol.com/')){
                                //$crawler = new CrawlerController($text, 'trendyol.com');
                                $crawler = new CrawlerController('trendyol.com');
                                $result = $crawler->updateProduct([$text]);
                                //$result = $crawler->test();
                                $this->bot->sendFullMessage($chat_id, $message_id, "Успешно\n\n".$result, true);
                                return 1;
                            }elseif(str_contains($text, '123https://www.trendyol.com/')){

                            }elseif(str_contains($text, '133https://www.trendyol.com/')){
                                //$addProduct = createProduct($text, 'trendyol.com');
                                //if($addProduct == 1){
                                if(1){
                                    //return $this->bot->sendFullMessage($chat_id, $message_id, "You are won");
                                    //$test1 =
                                    $crawlerProduct = new ProductsController;
                                    $result = $crawlerProduct->createProduct($text, 'trendyol.com');
                                    if($result){
                                        $product = Product::where('crawler_url', $text)->first();
                                        $url = "https://openshop.uz/shop/product/".$product->slug;
                                        $this->bot->sendFullMessage($chat_id, $message_id, "Успешно\n\n".$url, true);
                                        return 1;
                                    }
                                    $this->bot->sendFullMessage($chat_id, $message_id, "Ошибка", true);
                                    return 1;
                                    //sendTelegram('me', json_encode($test1));

                                    $crawler = new CrawlerController;
                                }
                            }
                        }

                    }

                    if($text == '/id'){
                        $this->bot->sendMessage($user_id, $update->message->chat->id);
                    }elseif($text == '/connect'){
                        $this->bot->sendMessage('127622235', $this->render->connectMe($update->message->from));
                        $this->bot->sendMessage($user_id, $this->render->connectMe($update->message->from));
                    }else{
                        $this->bot->sendMessage($user_id, $text);
                    }
                }

            }
        }
    }

    public function sendMessage($chat_id, $message){
        return $this->bot->sendMessage($chat_id, $message);
    }

    public function checkSellerReferal($chat_id, $user_id, $code){
            $decode = substr($code, 14, -6);
            $seller_id = substr($decode, 8);
            $seller = Seller::where('user_id', $seller_id)->first();
                if($seller->notifications == NULL){
                    $norify = json_encode(['telegram_id' => $user_id]);
                }else{
                    $notify = json_decode($seller->notifications);
                    $notify->telegram_id = $user_id;
                    $norify = json_encode($notify);
                }
            $seller->notifications = $norify;

            if($seller->save()){
                return $this->bot->sendMessage($chat_id, $this->render->successAddedSeller($user_id, $seller_id));
            }else{
                return $this->bot->sendMessage($chat_id, 'Error');
            }
    }

    public function sendOrderAlert($id){
        // GET ACTIVE STAFFS LIST
        $this->bot->sendMessage(config('telegram.alert.order'), $this->render->notifyOrderToAdmin($id));
        if(0){
            $staffs = TelegramStaff::where('active', 1)->get();
            foreach($staffs as $staff){
                // CHECK STAFF PREMISSIONS
                $status = in_array('order', explode(',', $staff->premission));
                if($status){
                    // SEND ORDER NOTIFICATION
                    $this->bot->sendMessage((int)$staff->chat_id, $this->render->notifyOrderToAdmin($id));
                }
            }
        }else{
            foreach($this->allowed_orders as $chat_id){
                    // SEND ORDER NOTIFICATION
                    $this->bot->sendMessage((int)$chat_id, $this->render->notifyOrderToAdmin($id));
            }
        }
    }

    public function sendOrderAlertTest($id){
        $this->bot->sendMessage('127622235', $this->render->notifyOrderToAdmin($id));
    }

    public function sendOrderAlertForSellers($id, $seller_id, $telegram_id){
        //$this->bot->sendMessage('127622235', $telegram_id);
        $this->bot->sendMessage($telegram_id, $this->render->notifyOrderToSellers($id, $seller_id));
    }

    public function sendInvitationAlert($id){
        //$users = array('709403391', '312038752', '576772981'); // OPENSHOP, Sardoraka, Uzgur
        //$users = array('127622235'); // UzSoftic
        //$reply_markup = json_encode(['inline_keyboard' => [[['text' => 'Показать больше...', 'url' => route('sales.show', encrypt($id))]]]]);
        $users = $this->allowed_invitations;
        foreach($users as $user){
            $this->bot->sendMessage($user, $this->render->notifyInvitationToAdmin($id));
        }
            //$this->bot->sendMessage
    }

    public function sendErrorAlert($exp){
        //if($exp['method'] == 'GET')
            // ME, Artem, Uzgur
            //$users = array('127622235', '165136121', '576772981');
            //$this->bot->sendMessage('127622235', $this->render->notifyErrorPageRender($exp));
            /*if($exp['agent'] == 'undefind agent'){
                $this->bot->sendMessage('165136121', $this->render->notifyErrorPageRender($exp));
            }else*/
            $users = $this->allowed_errors;
            if($exp['user_id'] == 9){
                $this->bot->sendMessage('127622235', $this->render->notifyErrorPageRender($exp));
            }else{
                foreach($users as $user)
                    $this->bot->sendMessage($user, $this->render->notifyErrorPageRender($exp));
            }
    }

    public function sendOfferAlert($request){
        //$users = array('127622235', '165136121', '312038752'); //UzSoftic, Artem, Sardoraka

        $users = $this->allowed_offers;
        foreach($users as $user)
            $this->bot->sendMessage($user, $this->render->notifyOffer($request));
    }

    public function test(){
        dump('1');
        return $this->sendOrderAlertTest('14523');
    }

}
