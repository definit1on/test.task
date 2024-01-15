<?php

use App\Http\Controllers\ProfileController;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

// Show Index Page
Route::get('/', function() {
    return view('index');
});

// Show List Of Companies
Route::get('/companies', [CompanyController::class, 'index']);

// Show Create Form (Company)
Route::get('/companies/create', [CompanyController::class, 'create']);

// Store Form Data (Company)
Route::post('/companies/store', [CompanyController::class, 'store']);

// Show Edit Form (Company)
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit']);

// Submit Update Form
Route::put('/companies/{company}', [CompanyController::class, 'update']);

// Delete Item In Companies
Route::delete('/companies/{company}', [CompanyController::class, 'destroy']);

// Show List Of Employees
Route::get('/employees', [EmployeeController::class, 'index']);

// Show Create Form (Employee)
Route::get('/employees/create', [EmployeeController::class, 'create']);

// Store Form Data (Employee)
Route::post('/employees/store', [EmployeeController::class, 'store']);

// Show Edit Form (Employee)
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit']);

// Submit Update Form
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);

// Delete Item In Employees
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);
