<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

// require __DIR__.'/auth.php';

/*
 * Front Routes
 */

Route::name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('about', 'front.about')->name('about');
    Route::view('contact', 'front.contact')->name('contact');
    Route::view('projects', 'front.projects')->name('projects');
    Route::view('team', 'front.team')->name('team');
    Route::view('service', 'front.service')->name('service');
    Route::view('testimonial', 'front.testimonial')->name('testimonial');
});

/*
 * Admin Routes
 */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('IsAdmin')->group(function () {
        Route::view('', 'admin.index')->name('index');

        Route::view('settings', 'admin.settings.index')->name('settings');
        Route::view('skills', 'admin.skills.index')->name('skills');
        Route::view('subscribers', 'admin.subscribers.index')->name('subscribers');
        Route::view('counters', 'admin.counters.index')->name('counters');
        Route::view('services', 'admin.services.index')->name('services');
        Route::view('messages', 'admin.messages.index')->name('messages');
        Route::view('categories', 'admin.categories.index')->name('categories');
    });
    Route::view('login', 'admin.auth.login')->middleware('guest:admin')->name('login');
});