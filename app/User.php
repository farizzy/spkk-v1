<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password', 'nama_lengkap', 'jk', 'alamat',
    ];

    public function user()
    {
        return $this->hasMany('Lap_kehilangan');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_admin()
    {
        if($this->admin)
        {
            return true;
        }
        return false;
    }
}
