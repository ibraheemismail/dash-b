<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MailController@home');
Route::post('/send/email','MailController@sendemail');
