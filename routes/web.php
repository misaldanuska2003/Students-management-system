<?php

use App\Http\Controllers\ProfileController;
use App\Models\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/teachers', function () {
    return view('teachersPage');
});
Route::get('/addTeachers', function () {
    return view('teachersRegisterPage');
});


Route::post('/registerTeacher', function () {
    request()->validate([
        'name'=> ['required'],
        'email'=> ['required'],
        'contact'=> ['required'],
        'password'=> ['required'],
        ]);

        Teachers::create([  
            'name'=> request('name'),
            'email'=> request('email'),
            'contact'=> request('contact'),
            'password'=> request('password'),
            ]);

            return redirect('/teachers');


   
});



require __DIR__.'/auth.php';
