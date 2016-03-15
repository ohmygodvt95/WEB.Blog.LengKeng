<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*=========================================
=            Introduction Page            =
=========================================*/
Route::get('/', 'Intro\IntroController@getIndex');
/*=====  End of Introduction Page  ======*/

/*==================================
=            Tools Page            =
==================================*/
Route::controller('tools', 'Tools\ToolsController');
/*=====  End of Tools Page  ======*/




