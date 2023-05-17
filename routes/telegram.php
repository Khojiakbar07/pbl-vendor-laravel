<?php
use Illuminate\Support\Facades\Route;
use App\Service\Telegram\Notify\Notify;

// Telegram API Routes
Route::prefix('telegram')->group(function () {

    Route::any('/notify', [Notify::class, 'index']);
    Route::get('/notify/test', [Notify::class, 'test']);

});
