<?php

namespace App\Models\MasterData;

use App\Models\Operational\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialist extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'specialist';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function doctor()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany(Doctor::class, 'specialist_id');
    }
}
