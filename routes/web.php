<?php
use App\Http\Controllers\HpmeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HpmeController::class ,'home']);
Route::get('/layout2', function () {
    return view('layout2');
});
