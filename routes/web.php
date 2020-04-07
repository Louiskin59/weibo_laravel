<?php

/**
 * 配置三个静态页面路由
 * 主页、帮助页、关于页
 */


Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');
