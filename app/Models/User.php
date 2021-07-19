<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Role;
use App\Models\Avatar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function avatar() {
        return $this->belongsTo(Avatar::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function isAdmin() {
        if($this->role->name == "Administrator"){
            return true;
        }
        return false;
    }

}
