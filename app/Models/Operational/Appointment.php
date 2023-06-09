<?php

namespace App\Models\Operational;

use App\Models\User;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Consultation;
use App\Models\Operational\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use SoftDeletes;

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

    //many to one
    public function consultation()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->belongsTo(Consultation::class, 'consultation_id', 'id');
    }

    //many to one
    public function user()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->belongsTo(User::class, 'consultation_id', 'id');
    }

    // one to one
    public function transaction()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasOne(Transaction::class, 'appointment_id');
    }
}
