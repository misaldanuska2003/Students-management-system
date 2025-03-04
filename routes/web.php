<?php

use App\Http\Controllers\ProfileController;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Teacher;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\View;

use function Pest\Laravel\get;

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

Route::get('/addStudent', function () {
    return view('studentsRegister');
});

Route::post('/createStudent',function(){
    Request()->validate([
        'image'=>['Required'],
        'name'=>['Required'],
        'email'=>['Required'],
        'password'=>['Required'],
        'contact'=>['Required'],
        'age'=>['Required'],
    ]);
    $imagesPath=request('image')->store('images','public');

Students::create(
    [
        'image'=>$imagesPath,
        'name'=>request('name'),
        'email'=>request('email'),
        'password'=>request('password'),
        'contact'=>request('contact'),
        'age'=>request('age')
        
    ]
);

return redirect('/studentsTable');

});
Route::get('/studentsTable', function () {

    $students=Students::all();

    return view('studentsVeiw',['students'=>$students]);
});

Route::delete('/deleteStudents/{id}',function($id){
    $deleteStudents=Students::find($id);
    $deleteStudents->delete();
    return redirect('/studentsTable');
});

Route::get('/editPage/{id}',function($id){
    $students=Students::find($id);
    return view('studentsUpdatePage',['student'=>$students]);
});
Route::put('/upStudents/{id}',function($id){
    Request()->validate([
        
        'name'=>['Required'],
        'email'=>['Required'],
        'contact'=>['Required'],
        'age'=>['Required'],
    ]);

    
    $student = Students::findOrFail($id);

  
    
    $student->name = request('name');
    $student->email = request('email');
    $student->contact = request('contact');
    $student->age = request('age');
    $student->save();

    return redirect('/studentsTable');

   

        
});


require __DIR__.'/auth.php';

