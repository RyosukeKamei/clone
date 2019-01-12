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
    return view('welcome');
});
Route::put('user/{id}', 'QuestionController@update');
// 問題登録（スクレイピング）
Route::resource('question', 'QuestionController');
// 午前問題閲覧
Route::get('am_question/{examination_id}/{round_id}/{number}', 'QuestionController@am_question');
// 午前問題閲覧
Route::get('pm_question/{examination_id}/{round_id}/{number}', 'QuestionController@pm_question');
// 自分のウェブサイトから午後問題をスクレイピング
Route::get('after_question/{examination_id}/{round_id}', 'QuestionController@after_question');

Route::resource('keyword', 'KeywordController');
Route::get('relation', 'KeywordController@relation');
