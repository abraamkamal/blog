<?php



Route::get('/','PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');





/*
{-- posts --}

GET /posts

GET /posts/create

POST /post

GET /post/{$id}/edit

GET /post/{$id}

PATCH /post/{$id}

DELETE /post/{$id}
*/



