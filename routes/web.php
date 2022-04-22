<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MobileController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//One To One Relationship
Route::get('/add-customer', [App\Http\Controllers\CustomerController::class, 'addCustomer']);
Route::get('/show-mobile/{id}', [App\Http\Controllers\CustomerController::class, 'showMobile']);

//One To One Inverse Relationship
Route::get('show-customer/{id}', [MobileController::class, 'showCustomer']);

//one To Many Relationship
Route::get('add-author', [AuthorController::class, 'addAuthor']);
Route::get('add-post/{id}', [PostController::class, 'addPost']);
Route::get('show-post/{id}', [PostController::class, 'showPost']);
Route::get('show-author/{id}', [AuthorController::class, 'showAuthor']);

//Has Many Through 

Route::get('add-project', [ProjectController::class, 'addProject']);
Route::get('add-language/{id}', [LanguageController::class, 'addLanguage']);
Route::get('add-deployment/{id}', [DeploymentController::class, 'addDeployment']);
Route::get('show-deployment/{id}', [ProjectController::class, 'showDeployment']);



///Mode methods that can be easy for eloquent

//has vs whereHas

Route::get('/video', [VideoController::class, 'index']);







