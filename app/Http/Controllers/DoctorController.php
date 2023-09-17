<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-doctor');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $doctor =Doctor::create($request->all());
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $imageName=time() . '.' .$image->extension();
            // dd($imageName);
            $image->storeAs('public/doctors',$imageName);
            $doctor->image=$imageName;
        }
        if ($doctor->save()) {
            return redirect()->route('home')->with('success','Adding doctor successfuly');
        }
        else 
        return back()->with('error','error in adding doctor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
