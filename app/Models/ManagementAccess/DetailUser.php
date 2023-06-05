<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\MasterData\TypeUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use SoftDeletes;

    //declare table
    public $table = 'detail_user';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //many to one
    public function type_user()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->belongsTo(TypeUser::class, 'type_user_id', 'id');
    }
}
