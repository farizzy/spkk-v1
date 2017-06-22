<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penemuan extends Model 
{

    protected $table = 'penemuan';
	protected $primaryKey = 'id_penemuan';
	protected $fillable = ['id_lap_kehilangan', 'no_polisi_temuan', 'tanggal_temuan', 'jenis_temuan', 'merk_temuan', 'warna_temuan', 'no_mesin_temuan', 'deskripsi_temuan', 'status', 'nama_pengambil', 'tgl_diambil'];

    public $timestamps = true;

    public function lap_kehilangan()
    {
        return $this->hasOne('Lap_kehilangan', 'id_lap_kehilangan');
    }

}