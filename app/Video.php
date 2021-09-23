<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['nama_video', 'slug_video', 'link_video', 'id_user', 'keterangan'];
}
