<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Eloquent;

/**
 * Class User
 * @package App\Models
 * @mixin Eloquent
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $school
 * @property string $class_name
 * @property integer $id_role
 * @property integer $is_active
 * @property integer $is_banned
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'school',
        'class_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'school_verified_at' => 'datetime',
    ];

    protected $with = [
        'roles',
        'schools'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function schools()
    {
        return $this->belongsToMany(School::class)->where('school_user.active', 1);
    }

    public function isAdmin(): bool
    {
        return $this->roles()->where('name', 'admin')->exists();
    }

    public function isPrincipal(): bool
    {
        return $this->roles()->where('name', 'principal')->exists();
    }

    public function isGrant(): bool
    {
        return $this->roles()->whereIn('name', ['admin', 'principal'])->exists();
    }

    public function isStudent(): bool
    {
        return $this->roles()->whereIn('name', ['editor', 'publisher', 'visitor'])->exists();
    }
}
