<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfGeneratorController;

Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Получение всех пользователей
Route::get('/contacts', [UserController::class, 'contacts']); // Отображение контактов
Route::get('/create', [UserController::class, 'create'])->name('create'); // Создание usera
Route::get('/users/{id}', [UserController::class, 'get']); // Получение одного пользователя
Route::get('/resume/{id}', [PdfGeneratorController::class, 'index'])->name('resume'); // Получение PDF
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit'); //Редактирование usera

Route::post('/user_form', [UserController::class, 'store'])->name('user_form'); // введенные данные
Route::post('/store-users', [UserController::class, 'store']); // Запись нового пользователя

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('destroy'); // Удаление USera
