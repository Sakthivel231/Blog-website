<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/about', function () {
//    return "welcome to laravel";
//});

                       // -create controller-

//Route::get('/', [postController::class, 'index']);
//
//Route::get('/post/details', [postController::class, 'details']);

                         // -dynamic route parameter-

//Route::get('/post/{id}', [postController::class, 'details']);
                          // -for use only numbers-
//Route::get('/post/{id}', [postController::class, 'details'])->where('id', '[0-9]+');

                          // -Redirect-

//Route::get('/oldUrl', [postController::class, 'oldUrl']);
//Route::get('/newUrl', [postController::class, 'newUrl']);

                         // -Named Route-

//Route::get('/oldUrl', [postController::class, 'oldUrl']);
//Route::get('/new-Url', [postController::class, 'newUrl'])->name('newUrl');

                         //-Practice for home page-

Route::get('/', [postController::class, 'index'])->name('post.index');
Route::get('/detail', [postController::class, 'detail']);

                            // -Dynamic url-
//Route::get('/post/{id}', [postController::class, 'details'])->where('id', '[0-9]+')->name('post.detail');

                             // showing post detail data

// Route::get('/post/{id}', [postController::class, 'details'])->where('id', '[0-9]+')->name('post.detail');


//  Route::get('/post/{id}', [postController::class, 'details'])->where('id', '[0-9]+')->name('post.detail');

                                // --generating slug for post--
Route::get('/post/{slug}', [postController::class, 'details'])->where('id', '[0-9]+')->name('post.detail');

Route::get('/contact', [HomeController::class, 'contactForm'])->name('contact.show');

Route::post('/contact', [HomeController::class, 'SubmitContact'])->name('contact.store');



