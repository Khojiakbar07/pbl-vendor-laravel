<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('main');
    }

    public function debug(){
        return sendTelegram('group', 'Hello World');
    }
}
