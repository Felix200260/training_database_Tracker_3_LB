<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Добавляем новый маршрут для страницы hello
Route::get('/hello', function () {
    // Создаем массив данных
    $data = [
        'title' => 'Hello World',
        'message' => 'Welcome to Laravel!'
    ];
    
    // Передаем массив данных в представление
    return view('hello', $data);
});
