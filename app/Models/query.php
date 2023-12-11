<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class query extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'room_number',
        'room_issue',
        'other_issue',
        
    ];
}
