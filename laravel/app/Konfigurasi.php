<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    protected $fillable = ['author', 'nama_web', 'lokasi'];
}
