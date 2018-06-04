<?php



Route::get('/','PostsController@index');

Route::get('/post/{post}','PostsController@show');


