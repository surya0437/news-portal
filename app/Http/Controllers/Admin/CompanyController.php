<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::first();
        return view('Admin.Company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:companies,email",
            "phone" => "required|digits:10|unique:companies,phone",
            "address" => "required|string",
            "ceoName" => "required|string|max:255",
            "regNo" => "required|string|max:255",
            "foundedYear" => "required|digits:4|integer|min:1900|max:" . date('Y'),
            "logo" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "panNo" => [
                "required",
                "string",
                "max:255",
                "not_regex:/[a-zA-Z]/",
            ],
        ], [
            "panNo.not_regex" => "The PAN number must not contain any alphabetic characters.",
        ]);


        $company = new Company();

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $company->ceo_name = $request->ceoName;
        $company->reg_no = $request->regNo;
        $company->pan_no = $request->panNo;
        $company->founded_year = $request->foundedYear;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $company->description = $request->description;

        if ($request->hasFile('logo')) {
            $file = $request->logo;
            $fileName = 'logo' . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('logo/', $fileName);
            $company->logo = 'logo/' . $fileName;
        }
        $company->save();
        toast('Record created successfully', 'success');
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('Admin.Company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $company = Company::findOrFail($id);

        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:companies,email," . $company->id,
            "phone" => "required|digits:10|unique:companies,phone," . $company->id,
            "address" => "required|string",
            "ceoName" => "required|string|max:255",
            "regNo" => "required|string|max:255",
            "foundedYear" => "required|digits:4|integer|min:1900|max:" . date('Y'),
            "panNo" => [
                "required",
                "string",
                "max:255",
                "not_regex:/[a-zA-Z]/",
            ],
        ], [
            "panNo.not_regex" => "The PAN number must not contain any alphabetic characters.",
        ]);

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->address = $request->address;
        $company->ceo_name = $request->ceoName;
        $company->reg_no = $request->regNo;
        $company->pan_no = $request->panNo;
        $company->founded_year = $request->foundedYear;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $company->description = $request->description;

        if ($request->hasFile('logo')) {
            $request->validate([
                "logo" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ]);
            $file = $request->logo;
            $fileName = 'logo' . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('logo/', $fileName);
            $company->logo = 'logo/' . $fileName;
        }

        $company->save();
        toast('Record updated successfully', 'success');
        return redirect()->route('company.edit', $company->id);
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);

        if (file_exists(public_path($company->logo))) {
            unlink(public_path($company->logo));
        }

        $company->delete();

        toast('Record deleted successfully', 'success');
        return redirect()->route('company.index');
    }
}
