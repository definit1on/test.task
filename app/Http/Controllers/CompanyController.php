<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    // Show All Companies
    public function index() {
        return view('companies.index', [
            'companies' => Company::latest()->paginate(10),
        ]);
    }

    // Show Create Form
    public function create() {
        return view('companies.create');
    }

    // Store Form Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'email',
            'website' => 'nullable',
            'logo' => 'nullable|dimensions:min_width=100,min_height=100'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Company::create($formFields);

        return redirect('/companies');
    }

    // Show Edit Form
    public function edit(Company $company) {
        return view('companies.edit', ['company' => $company]);
    }

    // Update Data
    public function update(Request $request, Company $company) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'email',
            'website' => 'nullable',
            'logo' => 'nullable|dimensions:min_width=100,min_height=100'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $company->update($formFields);

        return back();
    }

    // Delete Item
    public function destroy(Company $company) {
        $company->delete();
        return redirect('/companies');
    }
}
