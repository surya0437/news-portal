<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('Admin.Advertisement.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'title' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0|max:99999999.99',
            'link' => 'nullable|url|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $advertisement = new Advertisement();

        $advertisement->name = $request->name;
        $advertisement->phone = $request->phone;
        $advertisement->email = $request->email;
        $advertisement->title = $request->title;
        $advertisement->budget = $request->budget;
        $advertisement->link = $request->link;
        $advertisement->start_date = $request->start_date;
        $advertisement->end_date = $request->end_date;
        $advertisement->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = 'ad' . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('AdvertisementImage/', $fileName);
            $advertisement->image = 'AdvertisementImage/' . $fileName;
        }

        $advertisement->save();

        toast('Record created successfully', 'success');
        return redirect()->route('advertisement.create');
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
        $advertisement = Advertisement::findOrFail($id);
        return view('Admin.Advertisement.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'title' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0|max:99999999.99',
            'link' => 'nullable|url|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $advertisement = Advertisement::findOrFail($id);

        $advertisement->name = $request->name;
        $advertisement->phone = $request->phone;
        $advertisement->email = $request->email;
        $advertisement->title = $request->title;
        $advertisement->budget = $request->budget;
        $advertisement->link = $request->link;
        $advertisement->start_date = $request->start_date;
        $advertisement->end_date = $request->end_date;
        $advertisement->description = $request->description;
        $advertisement->status = $request->status;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = 'ad' . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('AdvertisementImage/', $fileName);
            $advertisement->image = 'AdvertisementImage/' . $fileName;
        }

        $advertisement->update();

        toast('Record updated successfully', 'success');
        return redirect()->route('advertisement.edit', $advertisement->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertisement = Advertisement::findOrFail($id);

        if (file_exists(public_path($advertisement->image))) {
            unlink(public_path($advertisement->image));
        }

        $advertisement->delete();

        toast('Record deleted successfully', 'success');
        return redirect()->route('company.index');
    }
}
