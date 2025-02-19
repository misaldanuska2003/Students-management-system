<?php

use App\Http\Controllers\ProfileController;
use App\Models\Teachers;
use App\Models\Teacher;
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
Route::get('/viewTeachers', function () {
    return view('teachersViewPage');
});

Route::get('/viewTeacher', function () {
   $teachers = Teachers::all();
    return view('teachersViewPage', ['teachers'=>$teachers]);
});
Route::get('/viewTeachersTable', function () {
    $teachers = Teachers::all();
     return view('teachersTable', ['teachers'=>$teachers]);
 });
Route::delete('/deleteTeachers/{id}', function ($id) {
    
    Teachers::where('id', $id)->delete();
    return redirect('viewTeachersTable');
});
Route::get('/teachersUpdatePage/{id}', function ($id) {
    
    $teachers = Teachers::findOrFail($id);
    return view('teachersUpdate', ['teacher' => $teachers]);
});


Route::post('/registerTeacher', function () {
    request()->validate([
        'image'=> ['required'],
        'name'=> ['required'],
        'email'=> ['required'],
        'contact'=> ['required'],
        'password'=> ['required'],
        ]);

        $imagePath = request('image')->store('images', 'public');

        Teachers::create([ 
            'image'=>$imagePath, 
            'name'=> request('name'),
            'email'=> request('email'),
            'contact'=> request('contact'),
            'password'=> request('password'),
            ]);

            return redirect('/viewTeacher');


   
});

Route::put('/upTeacher/{id}', function ($id) {
//    request()->([
//     ]);

request()->validate([
    'image'=>['required'],
    'name'=> ['required'],
    'email'=> ['required'],
    'contact'=> ['required'],
    'password'=> ['required'],
    ]);

    $teacher = Teachers::findOrFail($id);

    if (request('image')) {
        $imagePath = request('image')->store('images', 'public');
        $teacher->image = $imagePath;
    }

    $teacher->name = request('name');
    $teacher->email = request('email');
    $teacher->contact = request('contact');
    $teacher->password = request('password');
    $teacher->update();

    return redirect('/viewTeachersTable');
});


require __DIR__.'/auth.php';
