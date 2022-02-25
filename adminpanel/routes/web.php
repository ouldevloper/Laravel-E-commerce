<?php

use Illuminate\Support\Facades\Route;

//Product Routes
Route::get(  "/product/new",             "App\Http\Controllers\ProductController@insert")->middleware('auth');
Route::post( "/product/insert",          "App\Http\Controllers\ProductController@insert");
Route::get(  "/product/manage",          "App\Http\Controllers\ProductController@manage");
Route::get(  "/product/delete/{id}",     "App\Http\Controllers\ProductController@delete");
Route::get(  "/product/update/{id}",     "App\Http\Controllers\ProductController@update");
Route::post( "/product/update/{id}",     "App\Http\Controllers\ProductController@update");


//Category Routes
Route::get(  "/category/new"         ,   'App\Http\Controllers\CategoryController@insert');
Route::post( "/category/insert"     ,    'App\Http\Controllers\CategoryController@insert');
Route::get(  "/category/manage"      ,   "App\Http\Controllers\CategoryController@manage");
Route::get(  "/category/update/{id}" ,   "App\Http\Controllers\CategoryController@update");
Route::post( "/category/update/{id}" ,   "App\Http\Controllers\CategoryController@update");
Route::get(  "/category/delete/{id}" ,   "App\Http\Controllers\CategoryController@delete");
Route::post( "/category/delete/{id}" ,   "App\Http\Controllers\CategoryController@delete");

//User Routes
Route::get( "/user/new",                  'App\Http\Controllers\UserController@insert');
Route::post("/user/insert",               'App\Http\Controllers\UserController@insert');
Route::get("/user/manage",                "App\Http\Controllers\UserController@manage");
Route::get("/user/update/{id}",           "App\Http\Controllers\UserController@update");
Route::post("/user/update/{id}",          "App\Http\Controllers\UserController@update");
Route::get("/user/delete/{id}",           "App\Http\Controllers\UserController@delete");


//Aboutus Routes
Route::get( "/aboutus",       'App\Http\Controllers\AboutusController@manage');
Route::post("/aboutus",       "App\Http\Controllers\AboutusController@manage");


//SocialMedia Routes
Route::get( "/socialmedia/new",        'App\Http\Controllers\SocialMediaController@insert');
Route::post("/socialmedia/insert",        'App\Http\Controllers\SocialMediaController@insert');
Route::get("/socialmedia/manage",      "App\Http\Controllers\SocialMediaController@manage");
Route::get("/socialmedia/update/{id}", "App\Http\Controllers\SocialMediaController@update");
Route::post("/socialmedia/update/{id}","App\Http\Controllers\SocialMediaController@update");
Route::get("/socialmedia/delete/{id}", "App\Http\Controllers\SocialMediaController@delete");

// //Subscribe Routes
// Route::get("/subscribe/new",        'SubscribeController@insert');
// Route::get("/subscribe/manage",     "SubscribeController@manage");
// Route::get("/subscribe/update/{id}","SubscribeController@update");
// Route::get("/subscribe/delete/{id}","SubscribeController@delete");

// //Contactus Routes
// Route::get("/contactus/new",        'ContactusController@insert');
// Route::get("/contactus/manage",     "ContactusController@manage");
// Route::get("/contactus/update/{id}","ContactusController@update");
// Route::get("/contactus/delete/{id}","ContactusController@delete");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
