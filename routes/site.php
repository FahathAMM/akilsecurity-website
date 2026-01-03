<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Home\HomeController;
use App\Http\Controllers\Site\Pages\AboutUsController;
use App\Http\Controllers\Site\Pages\ContactController;
use App\Http\Controllers\Site\Pages\ServiceController;
use App\Http\Controllers\Site\Pages\DownloadController;
use App\Http\Controllers\Site\Pages\ProjectController;
use App\Http\Controllers\Site\Product\ProductController;
use App\Http\Controllers\Site\Solution\SolutionController;

// Route::get('/', function () {
//     return view('site.test');
// });


// Route::resource('/', HomeController::class);
Route::resource('product', ProductController::class);
Route::resource('contact', ContactController::class);
Route::resource('abouts', AboutUsController::class);
Route::resource('services', ServiceController::class);
Route::resource('projects', ProjectController::class);
Route::resource('download', DownloadController::class);
Route::resource('solutions', SolutionController::class);



Route::get('/captcha-image', [ContactController::class, 'image'])->name('captcha.image');



Route::get('download-file/{file}', [DownloadController::class, 'downloadFile']);

Route::get('product-by-category/{category}', [ProductController::class, 'productByCategory']);

Route::get('solution-by-type/{type}', [SolutionController::class, 'solutionByType']);
Route::get('solution-by-type-show/{type}', [SolutionController::class, 'show']);



Route::get('/', [HomeController::class, 'index'])->name('home');
