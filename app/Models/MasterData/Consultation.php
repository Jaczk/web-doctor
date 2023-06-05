<?php

namespace App\Models\MasterData;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consultation extends Model
{
    use SoftDeletes;

    public $table = 'consultation';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function appointment()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany(Appointment::class, 'consultation_id');
    }
}
