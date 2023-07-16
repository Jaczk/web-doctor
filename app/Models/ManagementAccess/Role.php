<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use App\Models\ManagementAccess\RoleUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ManagementAccess\PermissionRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use SoftDeletes;

    public $table = 'role';

    //this column need to be date type
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function roleuser()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->hasMany(RoleUser::class, 'role_id', 'id');
    }

    public function permissionRole()
    {
        // 3 parameter (path model, foreign key, local key atau primary key dari table hasOne or hasMany)
        return $this->hasMany(PermissionRole::class, 'role_id', 'id');
    }
}
