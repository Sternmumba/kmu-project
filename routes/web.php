<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WardenController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\viewApplicantsController;
use App\Http\Controllers\acceptedController;
use App\Http\Controllers\registerController;
use App\Models\Application;
use App\Models\AssignedRoom;

use App\Models\students;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects',[HomeController::class,"index"]);

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});
Route::get('/issue_inventory',[WardenController::class,"issue_inventory"]);
Route::post('/issue_inventory',[WardenController::class,"add_inventory"]);

Route::controller(StudentController::class)->prefix('student_coordinaor')->group(function () {
    Route::get('', 'index')->name('student_coordinator');
    Route::post('store', 'store')->name('student_coordinator.store');
    Route::get('inventories.show/{id}', 'show')->name('student_coordinator.show');
    Route::get('edit/{id}', 'edit')->name('student_coordinator.edit');
    Route::put('edit/{id}', 'update')->name('student_coordinator.update');
    Route::delete('destroy/{id}', 'destroy')->name('student_coordinator.destroy');
});
Route::controller(viewApplicantsController::class)->prefix('view_applicants')->group(function () {
    Route::get('', 'index')->name('view_applicants');
    Route::post('store', 'store')->name('view_applicants.store');
    Route::get('view_applicants.show/{id}', 'show')->name('view_applicants.show');
    Route::get('edit/{id}', 'edit')->name('view_applicants.edit');
    Route::put('edit/{id}', 'update')->name('view_applicants.update');
    Route::delete('destroy/{id}', 'destroy')->name('view_applicants.destroy');

});

Route::controller(InventoryController::class)->prefix('inventories')->group(function () {
    Route::get('', 'index')->name('inventories');
    Route::get('create', 'create')->name('inventories.create');
    Route::post('store', 'store')->name('inventories.store');
    Route::get('show/{id}', 'show')->name('inventories.show');
    Route::get('edit/{id}', 'edit')->name('inventories.edit');
    Route::put('edit/{id}', 'update')->name('inventories.update');
    Route::delete('destroy/{id}', 'destroy')->name('inventories.destroy');


});

Route::controller(acceptedController::class)->prefix('accepted_applicants')->group(function () {
    Route::get('', 'index')->name('accepted_applicants');

    Route::post('store', 'store')->name('view_applicants.store');
    Route::get('view_applicants.show/{id}', 'show')->name('view_applicants.show');
    Route::get('edit/{id}', 'edit')->name('view_applicants.edit');
    Route::put('edit/{id}', 'update')->name('view_applicants.update');
    Route::delete('destroy/{id}', 'destroy')->name('view_applicants.destroy');


    Route::post('store', 'store')->name('accepted_applicants.store');
    Route::get('accepted_applicants.show/{id}', 'show')->name('accepted_applicants.show');
    Route::get('edit/{id}', 'edit')->name('accepted_applicants.edit');
    Route::put('edit/{id}', 'update')->name('accepted_applicants.update');
    Route::delete('destroy/{id}', 'destroy')->name('accepted_applicants.destroy');
    Route::post('store', 'store')->name('register_student.store');
    Route::get('acceptedController.show/{id}', 'show')->name('view_applicants.show');
    Route::get('edit/{id}', 'edit')->name('acceptedController.edit');
    Route::put('edit/{id}', 'update')->name('acceptedController.update');
    Route::delete('destroy/{id}', 'destroy')->name('acceptedController.destroy');


});
Route::controller(registerController::class)->prefix('register_student')->group(function () {
    Route::get('', 'index')->name('register_student');
    Route::get('create', 'create')->name('register_student.create');
    Route::post('store', 'store')->name('register_student.store');
    Route::get('register_student.show/{id}', 'show')->name('register_student.show');
    Route::get('edit/{id}', 'edit')->name('register_student.edit');
    Route::put('edit/{id}', 'update')->name('register_student.update');
    Route::delete('destroy/{id}', 'destroy')->name('register_student.destroy');

  
});
Route::controller(acceptedController::class)->prefix('accepted_applicants')->group(function () {
    Route::get('', 'index')->name('accepted_applicants');
    Route::get('accepted_applicants.show/{id}', 'show')->name('accepted_applicants.show');
    Route::get('edit/{id}', 'edit')->name('accepted_applicants.edit');
    Route::put('edit/{id}', 'update')->name('accepted_applicants.update');
    Route::delete('destroy/{id}', 'destroy')->name('accepted_applicants.destroy');

});

Route::controller(ShowController::class)->prefix('student')->group(function () {
    Route::get('', 'index')->name('student');
});

Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::get('/logout', [WardenController::class, 'logout'])->name('logout');
Route::get('/profile', [WardenController::class,'profile'])->name('profile');
Route::get('/hall_warden', [HomeController::class,'hall_warden'])->name('hall_warden');
Route::get('/issue_inventory', [WardenController::class,'issue_inventory'])->name('issue_inventory');
Route::get('/shift_rooms', [WardenController::class,'shift_rooms'])->name('shift_rooms');
Route::get('/view_available_rooms', [StudentController::class,'view_available_rooms'])->name('view_available_rooms');
Route::get('/view_by_hostel/{hostel_name}', [StudentController::class,'view_by_hostel'])->name('view_by_hostel');

Route::get(' ', [viewApplicantsController::class, 'view_accepted'])->name('accepted_applicants');


   //Query
   Route::post('/queries',[HomeController::class,'queries']);
  
  //Inventory view
  // VIew Room Assigned
  Route::get('student', [ShowController::class, 'index']);
  
  


//student
Route::get('/application', [StudentsController::class, 'application'])->name('application');
Route::get('/viewInventory', [StudentsController::class, 'viewInventory'])->name('viewInventory');
Route::get('/viewAssignedRoom', [StudentsController::class, 'viewAssignedRoom'])->name('viewAssignedRoom');
Route::get('/reportQuery', [StudentsController::class, 'reportQuery'])->name('reportQuery');
Route::get('/studentDashboard', [StudentsController::class, 'studentDashboard'])->name('studentDashboard');
Route::post('/studentDashboard', function(){
    Validator::make(request()->all(), [
        'student_id' => 'required|min:8|max:8',
        'first_name' => 'required|min:3|max:50',
        'surname' => 'required|min:3|max:50',
        'gender' => 'required|min:4|max:6',
        'age' => 'required|min:1|max:2',
        'date_of_birth' => 'required|min:8|max:20',
        'year_of_study' => 'required|min:1|max:1',
        'registration_status' => 'required|min:4|max:15',
        'student_address' => 'required|min:10|max:150',
        'intake' => 'required|min:4|max:10',
        'academic_year' => 'required|min:4|max:20',
        'medical_condition' => 'required|min:2|max:5',
        'marital_status' => 'required|min:4|max:10',
        'student_phone_no' => 'required|min:10|max:20',
        'programme' => 'required|min:3|max:100',
        'student_nrc' => 'required|min:9|max:11',
        'student_email' => 'required|email|min:11|max:150',
        'guardian_name' => 'required|min:3|max:50',
        'guardian_relation' => 'required|min:3|max:50',
        'guardian_nrc' => 'required|min:9|max:11',
        'guardian_address' => 'required|min:9|max:150',
        'guardian_occupation' => 'required|min:3|max:50',
        'guardian_phone_no' => 'required|min:10|max:20',
        'guardian_email' => 'required|email|min:11|max:150'
    ])->validate();
    application::create([
    'student_id' => request('student_id'),
    'first_name' => request('first_name'),
    'middle_name' => request('middle_name'),
    'surname' => request('surname'),
    'gender' => request('gender'),
    'age' => request('age'),
    'date_of_birth' => request('date_of_birth'),
    'year_of_study' => request('year_of_study'),
    'registration_status' => request('registration_status'),
    'student_address' => request('student_address'),
    'intake' => request('intake'),
    'academic_year' => request('academic_year'),
    'medical_condition' => request('medical_condition'),
    'marital_status' => request('marital_status'),
    'student_phone_no' => request('student_phone_no'),
    'programme' => request('programme'),
    'student_nrc' => request('student_nrc'),
    'student_email' => request('student_email'),
    'guardian_name' => request('guardian_name'),
    'guardian_relation' => request('guardian_relation'),
    'guardian_nrc' => request('guardian_nrc'),
    'guardian_address' => request('guardian_address'),
    'guardian_occupation' => request('guardian_occupation'),
    'guardian_phone_no' => request('guardian_phone_no'),
    'guardian_email' => request('guardian_email')
    ]);

    return redirect('/studentDashboard');});


    Route::controller(QueryController::class)->prefix('queries')->group(function () {
        Route::get('', 'index')->name('queries');
       
        Route::get('queries.show/{id}', 'show')->name('queries.show');
        
       
    });
  

     Route::controller(QueryController::class)->prefix('queries')->group(function () {
        Route::get('', 'index')->name('queries');
       
        Route::get('s.show/{id}', 'show')->name('queries.show');
        
       
    });

    Route::controller(HomeController::class)->prefix('student')->group(function () {
        Route::get('', 'index')->name('student');
       
        Route::get('s.viewAssignedRoom/{id}', 'viewAssignedRoom')->name('student.viewAssignedRoom');
        
       
    });
  
  
   


