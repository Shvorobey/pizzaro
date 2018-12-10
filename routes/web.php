<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})-> name ('home');

Route::get('/food', function () {
    return view('pages.shop-grid-3-column');
})->name ('food');

Route::get('/mail-subscribed', function (\Illuminate\Http\Request $request) {
    $mail=new \App\Mail\UserSubscribed($request->input('email'));
    \App\Jobs\SendEmail::dispatch($mail)->onQueue('emails');


    //$mail->subject=' Pizzaro стало немного ближе. Добро пожаловать. ';
    //$mail->from=' Команда Pizzaro';
    // \Illuminate\Support\Facades\Mail ::to('a.shvorobey@gmail.com')->send(new \App\Mail\UserSubscribed($mail));
    return view('pages.mail-subscribed');
})->name ('mail-subscribed');

