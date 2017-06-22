<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model 
{

    protected $table = 'beritas';
    protected $fillable = ['judul', 'isi', 'title', 'judul_gambar', 'size', 'type'];
    public $timestamps = true;

}