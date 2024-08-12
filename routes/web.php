<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product',[\App\Http\Controllers\ProductController::class,'create'])->name(name:'product');
Route::post('/product-store',[\App\Http\Controllers\ProductController::class,'store'])->name(name:'product.store');
Route::get('/product-index',[\App\Http\Controllers\productController::class,'index'])->name(name:'product.index');


Route::get('/Applications',[\App\Http\Controllers\ApplicationController::class,'create'])->name(name:'Applications');
Route::post('/Applications-store',[\App\Http\Controllers\ApplicationController::class,'store'])->name(name:'Applications.store');
Route::get('/Applications-index',[\App\Http\Controllers\ApplicationController::class,'index'])->name(name:'Applications.index');

Route::get('/Recommendation',[\App\Http\Controllers\RecommendationController::class,'create'])->name(name:'Recommendation');
Route::post('/Recommendation-store',[\App\Http\Controllers\RecommendationController::class,'store'])->name(name:'Recommendation.store');
Route::get('/Recommendation-index',[\App\Http\Controllers\Recommendationcontroller::class,'index'])->name(name:'Recommendation.index');

Route::get('/skills',[\App\Http\Controllers\skillsController::class,'create'])->name(name:'skills');
Route::post('/skills-store',[\App\Http\Controllers\skillsController::class,'store'])->name(name:'skills.store');
Route::get('/skills-index',[\App\Http\Controllers\skillsController::class,'index'])->name(name:'skills.index');

Route::get('/jobskills',[\App\Http\Controllers\jobskillsController::class,'create'])->name(name:'jobskills');
Route::post('/jobskills-store',[\App\Http\Controllers\jobskillsController::class,'store'])->name(name:'jobskills.store');
Route::get('/jobskills-index',[\App\Http\Controllers\jobskillscontroller::class,'index'])->name(name:'jobskills.index');

Route::get('/userskills',[\App\Http\Controllers\userskillsController::class,'create'])->name(name:'userskills');
Route::post('/userskills-store',[\App\Http\Controllers\userskillsController::class,'store'])->name(name:'userskills.store');
Route::get('/userskills-index',[\App\Http\Controllers\userskillscontroller::class,'index'])->name(name:'userskills.index');
