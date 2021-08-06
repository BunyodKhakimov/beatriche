<?php

use App\Http\Controllers\Frontend\ModelController;
use App\Http\Controllers\FrontPagesController;
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
Route::group(['middleware'=>['web', 'locale']], function(){
    Route::get('/', [FrontPagesController::class, 'index'])->name('home');
    Route::get('/about', [FrontPagesController::class, 'about'])->name('about');
    Route::get('/models', [ModelController::class, 'index'])->name('models');
    Route::get('/model-details/{user}', [ModelController::class, 'show'])->name('model-details');
    Route::get('/blog', [FrontPagesController::class, 'blog'])->name('blog');
    Route::get('/blog-details', [FrontPagesController::class, 'blogDetails'])->name('blog-details');
    Route::get('/service', [FrontPagesController::class, 'service'])->name('service');
    Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');

    Route::post('/order', [FrontPagesController::class, 'orderStore'])->name('public.order.store');
    Route::post('/review', [FrontPagesController::class, 'reviewStore'])->name('public.review.store');

    Route::get('/{lang}', [FrontPagesController::class, 'switchLanguage'])->name('switch-lang');

});
