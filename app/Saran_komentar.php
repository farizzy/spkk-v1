<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran_komentar extends Model 
{

    protected $table = 'saran_komentar';
    protected $primaryKey = 'id_saran';
    protected $fillable = ['id_lap_kehilangan', 'id_pendaftaran', 'saran_komentar'];

    public $timestamps = true;

    public function saran_komentar_pendaftaran()
    {
        return $this->hasOne('User', 'id_pendaftaran');
    }

}