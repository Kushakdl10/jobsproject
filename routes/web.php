<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('product',[\App\Http\Controllers\ProductController::class,'create'])->name(name:'product');
Route::post('product-store',[\App\Http\Controllers\ProductController::class,'store'])->name(name:'product.store');
Route::get('product-index',[\App\Http\Controllers\ProductController::class,'index'])->name(name:'product.index');


Route::get('/Applications',[\App\Http\Controllers\ApplicationController::class,'create'])->name(name:'Applications');
Route::post('/Applications-store',[\App\Http\Controllers\ApplicationController::class,'store'])->name(name:'applications.store');
Route::get('/Applications-index',[\App\Http\Controllers\ApplicationController::class,'index'])->name(name:'Applications.index');

Route::get('/Recommendation',[\App\Http\Controllers\Recommendationcontroller::class,'create'])->name(name:'Recommendation');
Route::post('/Recommendation-store',[\App\Http\Controllers\Recommendationcontroller::class,'store'])->name(name:'Recommendation.store');
Route::get('/Recommendation-index',[\App\Http\Controllers\Recommendationcontroller::class,'index'])->name(name:'Recommendation.index');

Route::get('/Skills',[\App\Http\Controllers\SkillsController::class,'create'])->name('Skills');
Route::post('/Skills-store',[\App\Http\Controllers\SkillsController::class,'store'])->name('Skills.store');
Route::get('/Skills-index',[\App\Http\Controllers\SkillsController::class,'index'])->name('Skills.index');

Route::get('/jobSkills',[\App\Http\Controllers\jobskillscontroller::class,'create'])->name(name:'JobSkills');
Route::post('/JobSkills-store',[\App\Http\Controllers\jobskillscontroller::class,'store'])->name(name:'jobSkills.store');
Route::get('/JobSkills-index',[\App\Http\Controllers\jobskillscontroller::class,'index'])->name(name:'JobSkills.index');

Route::get('/UserSkills',[\App\Http\Controllers\UserSkillscontroller::class,'create'])->name(name:'UserSkills');
Route::post('/UserSkills-store',[\App\Http\Controllers\UserSkillscontroller::class,'store'])->name(name:'userSkills.store');
Route::get('/UserSkills-index',[\App\Http\Controllers\UserSkillscontroller::class,'index'])->name(name:'userSkills.index');


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
