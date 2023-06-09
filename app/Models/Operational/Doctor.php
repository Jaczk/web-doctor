<?php

namespace App\Models\Operational;

use App\Models\MasterData\Specialist;
use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use SoftDeletes;

    public $table = 'doctor';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'specialist_id',
        'fee',
        'name',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //many to one
    public function specialist()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->belongsTo(Specialist::class, 'specialist_id', 'id');
    }

    // one to many
    public function appointment()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}
