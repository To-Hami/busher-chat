<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\http\Request;
use Illuminate\http\Response;



// index =================================================

Route::get('/', function () {
    return view('index');
});

// send-message ==========================================

Route::post('/send' , function (Request $request){

event(new Message($request->input('username') ,$request->input('message')));

return ["success" => true];

});
