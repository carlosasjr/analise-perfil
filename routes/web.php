<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/{url?}', [CompanyController::class, 'create'])->name('company.create');

Route::post('/empresas', [CompanyController::class, 'store'])->name('company.store');

Route::get('/empresas/{url}/usuario', [UserController::class, 'create'])->name('user.create');

Route::post('/empresas/{url}/usuario', [UserController::class, 'store'])->name('user.store');

Route::get('/empresas/{url}/usuario/{id}/instrucoes', [UserController::class, 'show'])->name('user.show');

Route::get('/empresas/{url}/usuario/{id}/perguntas', [UserController::class, 'questions'])->name('user.questions');

Route::post('/empresas/{url}/usuario/{id}/respostas', [UserController::class, 'answers'])->name('user.answers');

Route::get('/resposta/{id}', [UserController::class, 'score'])->name('user.score');
