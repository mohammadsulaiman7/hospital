<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){
        return view('dashboard.admins.create');
    }
    public function store(Request $request){
        
    }
}