<?php

use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UnsubscribeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('{year}/{month}/{day}/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('tags', [TagController::class, 'index'])->name('tags.index');
Route::get('tags/{tag}', [TagController::class, 'show'])->name('tags.show');

Route::view('sign-up', 'sign-up')->name('sign-up');
Route::post('subscribe', SubscribeController::class)->name('subscribe');
Route::get('subscribe/{token}', ConfirmController::class)->name('confirm');
Route::get('unsubscribe/{token}', UnsubscribeController::class)->name('unsubscribe');
Route::view('subscribed', 'subscribed')->name('subscribed');
Route::view('thank-you', 'thank-you')->name('thank-you');
Route::view('bye', 'bye')->name('bye');

Route::view('contact', 'contact')->name('contact');
Route::post('contact', ContactFormController::class)->name('send');
Route::view('sent', 'sent')->name('sent');

Route::view('talks', 'talks')->name('talks');

Route::view('about', 'about')->name('about');

Route::view('work', 'work')->name('work');
