<?php

namespace App\Models;

use App\Models\ManagementAccess\DetailUser;
use App\Models\ManagementAccess\RoleUser;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use App\Models\Operational\Appointment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    //use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'email_verified_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // one to many
    public function appointment()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany(Appointment::class, 'user_id');
    }

    // one to one
    public function detail_user()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasOne(DetailUser::class, 'user_id');
    }

    // one to many
    public function role_user()
    {
        // 2 parameter (path model, foreign key)
        return $this->hasMany(RoleUser::class, 'user_id');
    }
}
