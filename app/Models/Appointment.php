<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function doctors(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function patient(){
        return $this->belongsTo(User::class,'user_id');
    }
}
