<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigPayment extends Model
{
    use SoftDeletes;

    public $table = 'config_payment';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
