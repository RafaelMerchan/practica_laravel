<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function (){
    //$users = DB::select('select * from users2');
    
    /* $users = DB::table('users2')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
            
    dd($users); */

    $student = Student::where('email','corrinboy@nohr.gob')->first();
    //dd($students);


    $student->status = 'active';
    $student->save();
    dd($student);

});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', [GreetingController::class, 'index']);
