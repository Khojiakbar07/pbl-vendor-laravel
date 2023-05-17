<?php

return [
    'call_api' => env('TELEGRAM_CALL_API', 'https://api.telegram.org/bot'),
    'debug_chat' => '',

    'bot' => [
        'notify' => [
            'callback'  => env('TELEGRAM_NOTIFY_CALLBACK'),
            'token'     => env('TELEGRAM_NOTIFY_TOKEN'),
            'username'  => env('TELEGRAM_NOTIFY_USERNAME'),
            'admin'     => env('TELEGRAM_NOTIFY_ADMIN')
        ],
    ],


];
