<?php

namespace App\Models\MasterData;

use App\Models\ManagementAccess\DetailUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'type_user';

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
    public function detail_user()
    {
        return $this->hasMany(DetailUser::class, 'type_user_id');
    }
}
