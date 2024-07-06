<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HubController;

Route::get('/' ,[HubController::class ,'home'])->name('home');
Route::get('/About-US' ,[HubController::class ,'about'])->name('about');
Route::get('/HR-rining' ,[HubController::class ,'formation'])->name('formation');
Route::get('/hr-e-learning' ,[HubController::class ,'learning'])->name('learning');
Route::get('/recruitment' ,[HubController::class ,'recruitment'])->name('recruitment');
Route::get('/hr-events' ,[HubController::class ,'team'])->name('team');
Route::get('/sortalent' ,[HubController::class ,'sortalent'])->name('sortalent');
Route::get('/contact' ,[HubController::class ,'contact'])->name('contact');


Route::post('/contact' ,[HubController::class ,'store'])->name('store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
