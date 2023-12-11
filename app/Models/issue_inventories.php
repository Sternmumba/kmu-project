<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue_inventories extends Model
{
    use HasFactory;
    protected $fillable = [

        'assigned_rooms_id',
        'mattress_code',
        'curtains',
        'room_keys',
        'bed_code',
        'room_lock',
        'stove',
        'fridge',
        'waste_bin',

    ];  
}