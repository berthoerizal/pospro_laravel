<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamus extends Model
{
    protected $fillable = ['kata', 'arti', 'contoh'];
}
