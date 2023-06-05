<?php

namespace App\Models\Operational;

use App\Models\Operational\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'appointment';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //many to one
    public function doctor()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}
