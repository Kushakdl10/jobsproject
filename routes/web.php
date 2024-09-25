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
Route::get('/product-view/{id}',[\App\Http\Controllers\Productcontroller::class,'show'])->name(name:'product.show');
Route::put('/product-update/{id}',[\App\Http\Controllers\Productcontroller::class,'update'])->name(name:'product.update');
Route::delete('/product-destroy/{id}',[\App\Http\Controllers\Productcontroller::class,'destroy'])->name(name:'product.destroy');


Route::get('/Applications',[\App\Http\Controllers\ApplicationController::class,'create'])->name(name:'Applications');
Route::post('/Applications-store',[\App\Http\Controllers\ApplicationController::class,'store'])->name(name:'Applications.store');
Route::get('/Applications-index',[\App\Http\Controllers\ApplicationController::class,'index'])->name(name:'Applications.index');
Route::get('/Applications-view/{id}',[\App\Http\Controllers\ApplicationController::class,'show'])->name(name:'Applications.show');
Route::put('/Applications-update/{id}',[\App\Http\Controllers\ApplicationController::class,'update'])->name(name:'Applications.update');
Route::delete('/Applications-destroy/{id}',[\App\Http\Controllers\ApplicationController::class,'destroy'])->name(name:'Applications.destroy');


Route::get('/Recommendation',[\App\Http\Controllers\Recommendationcontroller::class,'create'])->name(name:'Recommendation');
Route::post('/Recommendation-store',[\App\Http\Controllers\Recommendationcontroller::class,'store'])->name(name:'Recommendation.store');
Route::get('/Recommendation-index',[\App\Http\Controllers\Recommendationcontroller::class,'index'])->name(name:'Recommendation.index');

Route::get('/Skills',[\App\Http\Controllers\SkillsController::class,'create'])->name('Skills');
Route::post('/Skills-store',[\App\Http\Controllers\SkillsController::class,'store'])->name('Skills.store');
Route::get('/Skills-index',[\App\Http\Controllers\SkillsController::class,'index'])->name('Skills.index');
Route::get('/Skills-view/{id}',[\App\Http\Controllers\SkillsController::class,'show'])->name(name:'Skills.show');
Route::put('/Skills-update/{id}',[\App\Http\Controllers\SkillsController::class,'update'])->name(name:'Skills.update');
Route::delete('/Skills-destroy/{id}',[\App\Http\Controllers\SkillsController::class,'destroy'])->name(name:'Skills.destroy');


Route::get('/jobSkills',[\App\Http\Controllers\jobskillscontroller::class,'create'])->name(name:'JobSkills');
Route::post('/JobSkills-store',[\App\Http\Controllers\jobskillscontroller::class,'store'])->name(name:'jobSkills.store');
Route::get('/JobSkills-index',[\App\Http\Controllers\jobskillscontroller::class,'index'])->name(name:'JobSkills.index');
Route::get('/jobSkills-view/{id}',[\App\Http\Controllers\jobSkillsController::class,'show'])->name(name:'jobSkills.show');
Route::put('/jobSkills-update/{id}',[\App\Http\Controllers\jobSkillsController::class,'update'])->name(name:'jobSkills.update');
Route::delete('/jobSkills-destroy/{id}',[\App\Http\Controllers\jobSkillsController::class,'destroy'])->name(name:'jobSkills.destroy');


Route::get('/UserSkills',[\App\Http\Controllers\UserSkillscontroller::class,'create'])->name(name:'UserSkills');
Route::post('/UserSkills-store',[\App\Http\Controllers\UserSkillscontroller::class,'store'])->name(name:'userSkills.store');
Route::get('/UserSkills-index',[\App\Http\Controllers\UserSkillscontroller::class,'index'])->name(name:'UserSkills.index');
Route::get('/UserSkills-view/{id}',[\App\Http\Controllers\UserSkillsController::class,'show'])->name(name:'UserSkills.show');
Route::put('/UserSkills-update/{id}',[\App\Http\Controllers\UserSkillsController::class,'update'])->name(name:'UserSkills.update');
Route::delete('/UserSkills-destroy/{id}',[\App\Http\Controllers\UserSkillsController::class,'destroy'])->name(name:'UserSkills.destroy');



Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
