<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/calender', function () {
    return view('admin.calender');
});


Route::get('/contact', function () {
    return view('admin.contact');
});

Route::get('/payment', function () {
    return view('admin.payment');
});

Route::get('/invonce', function () {
    return view('admin.invonce');
});

Route::get('/texes', function () {
    return view('admin.texes');
});

Route::get('/chat', function () {
    return view('admin.chat');
});


//table code

Route::get('/table' , function(){
    return view('table.basic');
});

//user code

Route::get('/basic-form' , function(){
    return view('employee.basicform');
});

Route::get('/editor' , function(){
    return view('employee.editor');
});

Route::get('/form-upload' , function(){
    return view('employee.form-upload');
});

Route::get('/form-validation' , function(){
    return view('employee.form-validation');
});

Route::get('/image-crop' , function(){
    return view('employee.image-crop');
});

Route::get('/wizard' , function(){
    return view('employee.wizard');
});

Route::get('/authenticate-users' , function(){
    return view('admin.logindetails');
});


//employee code

Route::get('/user' , function(){
    return view('employee.users');
});

// auth login

Route::get('/login' , function(){
    return view('auth.login');
});

Route::get('/register' , function(){
    return view('auth.register');
});

Route::get('/forget-password' , function(){
    return view('auth.forgetpassword');
});
