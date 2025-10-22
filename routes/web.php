<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Chat;
use App\Livewire\FileUpload;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::get("chat", Chat::class)->name("chat");
    Route::get('file', FileUpload::class)->name('file');

    Route::get('send-email', [EmailController::class, 'sendEmail']);
    Route::get('contact', [EmailController::class, 'contactForm']);
    Route::post('contact', [EmailController::class, 'sendContactEmail'])->name('contact');
});

require __DIR__.'/auth.php';
