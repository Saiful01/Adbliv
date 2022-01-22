<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.index');
});

Route::get('/new', function () {
    return view('home.new');
});
Route::post('/contact/save', function (\Illuminate\Http\Request $request) {
    //return $request->all();
    $name= $request['name'];
    $phone= $request['Phone'];
    $email= $request['email'];
    $message= $request['message'];


    $msg = "Name : $name,\n Phone: $phone ,\n Email : $email ,\n Message : $message";


   // $msg = wordwrap($msg, 70);

// send email
    mail("contact@adbliv.com", "ADBLiv Website Message", $msg);

    return back()->with('success', " Your Message Successfully Send");


});
