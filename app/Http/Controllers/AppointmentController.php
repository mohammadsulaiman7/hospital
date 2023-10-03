<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use App\Notifications\Appointment as NotificationsAppointment;
use App\Notifications\NewAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->usertype == '1') {
            $appointments = Appointment::paginate(10);
            return view('dashboard.appointments.show', compact('appointments'));
        } else {
            $userId = Auth::user()->id;
            $appointments = Appointment::where('user_id', $userId)->get();
            return view('user.view-appointments', compact('appointments'));
        }
    }
    public function create()
    {
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctors = Doctor::where('speciality_id', $request->speciality_id)->get();
        $doctor = $doctors->random();
        $appointment = Appointment::create($request->all() + ['user_id' => Auth::user()->id, 'doctor_id' => $doctor->id]);
        if ($appointment->save) {
            $users = User::all();
            // User::all()->notify(new NotificationsAppointment($appointment));
            Notification::send($users, new NewAppointment($appointment));
            return redirect()->route('home')->with('success', 'Appointment successfuly');
        } else
            return back()->with('error', 'There is something wrong , try again please');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        if ($appointment->delete())
            return back()->with('success', 'Appointment canceled successfuly');
        else
            return back()->with('error', 'Error in canceled appointment');
    }
}
