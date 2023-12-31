<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $casts = [
        'date' => 'date'
    ];
    protected $guarded=[];
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function speciality(){
        return $this->belongsTo(Speciality::class,'speciality_id');
    }
}
