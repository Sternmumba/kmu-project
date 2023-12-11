<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\HasMany;

class room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'hostel_name',
        'floor',
        'appartment_no',
        'room_side',
        'seater',
        'room_status'
    ];
       //relation with student
       public function assignedStudents()
       {
           return $this->hasMany(Assigned_room::class);
       }
   
}
