<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lap_kehilangan extends Model 
{

    protected $table = 'lap_kehilangan';
    protected $primaryKey = 'id_lap_kehilangan';
    protected $fillable = ['id_daerah', 'no_surat_hilang', 'keterangan', 'id_pendaftaran', 'no_polisi', 'jenis_kendaraan', 'merk_kendaraan', 'warna_kendaraan', 'tanggal_hilang', 'no_mesin', 'status'];

    public $timestamps = true;

    public function lap_kehilangan_user()
    {
        return $this->belongsTo('User', 'id_pendaftaran');
    }

    public function lap_kehilangan_daerah()
    {
        return $this->hasOne('Daerah_rawan', 'id_daerah');
    }

    public function lap_kehilangan_saran()
    {
        return $this->hasMany('Saran_komentar');
    }

}