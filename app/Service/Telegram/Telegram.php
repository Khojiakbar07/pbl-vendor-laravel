<?php

namespace App\Service\Telegram;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Telegram extends Controller
{

    public function bot($method, $datas=[]){
        $call_api = env('TELEGRAM_CALL_API', 'https://api.telegram.org/bot');
        $token = env('TELEGRAM_NOTIFY_TOKEN');

        $url = $call_api.$token."/".$method;
        $client = new Client();
        try {
            $request = $client->requestAsync('POST', $url, ['form_params' => $datas]);
            $response = $request->wait();
            $statusCode = $response->getStatusCode();
        } catch (RequestException $e) {
            $statusCode = 0;
        }

        if ($statusCode == 200){
            $query = $response->getBody()->getContents();
            $result = json_decode($query);
        }else{
            $result = 'Error sending request, error_code: '.$statusCode;
        }

        return $result;
    }

    public function sendMessage($chat_id, $text, $parse_mod = 'html', $reply_markup = NULL): void
    {
        $this->bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'html',
            //'reply_markup' => $reply_markup
        ]);
    }

    public function debugSender($message, $chat_id){
        return $this->sendMessage($chat_id, $message);
    }


}
