<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul', 'slug_judul', 'gambar', 'isi', 'id_user', 'status'
    ];
}
