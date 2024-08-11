<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/product',[\App\Http\Controllers\ProductController::class,'create'])->name(name:'product');
route::get('/product-store',[\App\Http\Controllers\ProductController::class,'store'])->name(name:'product.store');
route::get('/Applications',[\App\Http\Controllers\ApplicationController::class,'create'])->name(name:'Applications');
route::get('/Applications-store',[\App\Http\Controllers\ApplicationController::class,'store'])->name(name:'Applications.store');
route::get('/Recommendation',[\App\Http\Controllers\RecommendationController::class,'create'])->name(name:'Recommendation');
route::get('/Recommendation-store',[\App\Http\Controllers\RecommendationController::class,'store'])->name(name:'Recommendation.store');
route::get('/skills',[\App\Http\Controllers\skillsController::class,'create'])->name(name:'skills');
route::get('/skills-store',[\App\Http\Controllers\skillsController::class,'store'])->name(name:'skills.store');
route::get('/jobskills',[\App\Http\Controllers\jobskillsController::class,'create'])->name(name:'jobskills');
route::get('/jobskills-store',[\App\Http\Controllers\jobskillsController::class,'store'])->name(name:'jobskills.store');
route::get('/userskills',[\App\Http\Controllers\userskillsController::class,'create'])->name(name:'userskills');
route::get('/userskills-store',[\App\Http\Controllers\userskillsController::class,'store'])->name(name:'userskills.store');
