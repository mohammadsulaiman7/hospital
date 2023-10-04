<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('dashboard.doctors.index', compact('doctors'));
        // $specialities = Speciality::all();
        // return view('dashboard.doctors.create', compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialities = Speciality::all();
        return view('dashboard.doctors.create', compact('specialities'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all() + ['user_id' => '1']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/doctors', $imageName);
            $doctor->image = $imageName;
        }
        if ($doctor->save()) {
            return redirect()->route('home')->with('success', 'Adding doctor successfuly');
        } else
            return back()->with('error', 'error in adding doctor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        // return view('dashboard.doctors.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $specialities = Speciality::all();
        return view('dashboard.doctors.edit', compact('doctor','specialities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
