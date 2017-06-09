<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah_rawan extends Model 
{

    protected $table = 'daerah_rawan';
    protected $primaryKey = 'id_daerah';
    protected $fillable = ['nama', 'deskripsi'];

    public $timestamps = false;

    public function daerah_rawan()
    {
        return $this->hasMany('Lap_kehilangan');
    }

}