<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function speciality(){
        return $this->belongsTo(Speciality::class,'speciality_id');
    }
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
