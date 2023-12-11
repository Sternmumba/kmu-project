<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;


class inventorie extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'mattress_code', 'curtains','room_keys','bed_code','room_lock','stove','fridge','waste_bin'];
    
    public function student()
    //relation with student
    {
        return $this->belongsTo(Student::class);
    }

}
