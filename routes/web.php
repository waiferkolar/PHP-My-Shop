<?php


Route::get("/","PageController@index");
Route::get("/home","PageController@home");
Route::get("/register","Auth\RegisterController@showRegistrationForm");
Route::post("/register","Auth\RegisterController@register");
Route::get("/login","Auth\LoginController@showLoginForm");
Route::post("/login","Auth\LoginController@login");
Route::get("/logout","Auth\LoginController@logout");

/**
 * Route For Category
 */

Route::get("/cat","CategoryController@index");
Route::get("/cat/create","CategoryController@create");
Route::post("/cat/create","CategoryController@store");
Route::get("/cat/edit/{id}","CategoryController@edit");
Route::post("/cat/edit/{id}","CategoryController@update");
