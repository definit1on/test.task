<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Show All Employees
    public function index() {
        return view('employees.index', [
            'employees' => Employee::latest()->paginate(10),
        ]);
    }

    // Show Create Form
    public function create() {
        return view('employees.create');
    }

    // Store Form Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'phone' => 'nullable',
            'company_id' => 'required'
        ]);

        Employee::create($formFields);

        return redirect('/employees');
    }

    // Show Edit Form
    public function edit(Employee $employee) {
        return view('employees.edit', ['employee' => $employee]);
    }

    // Update Data
    public function update(Request $request, Employee $employee) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'phone' => 'nullable',
        ]);

        $employee->update($formFields);

        return back();
    }

    // Delete Item
    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect('/employees');
    }
}
