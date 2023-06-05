<?php

namespace App\Models\Operational;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transaction';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'subtotal',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //one to one
    public function appointment()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->belongsTo(Appointment::class, 'appointment_id', 'id');
    }
}
