<?php

use App\Http\Controllers\ProfileController;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;

// Show Index Page
Route::get('/', function() {
    return view('index');
});

// Show List Of Companies
Route::get('/companies', [CompanyController::class, 'index'])->middleware('auth');

// Show Create Form (Company)
Route::get('/companies/create', [CompanyController::class, 'create'])->middleware('auth');

// Store Form Data (Company)
Route::post('/companies/store', [CompanyController::class, 'store'])->middleware('auth');

// Show Edit Form (Company)
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->middleware('auth');

// Submit Update Form
Route::put('/companies/{company}', [CompanyController::class, 'update'])->middleware('auth');

// Delete Item In Companies
Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->middleware('auth');

// Show List Of Employees
Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth');

// Show Create Form (Employee)
Route::get('/employees/create', [EmployeeController::class, 'create'])->middleware('auth');

// Store Form Data (Employee)
Route::post('/employees/store', [EmployeeController::class, 'store'])->middleware('auth');

// Show Edit Form (Employee)
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->middleware('auth');

// Submit Update Form
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->middleware('auth');

// Delete Item In Employees
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->middleware('auth');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log User In
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
