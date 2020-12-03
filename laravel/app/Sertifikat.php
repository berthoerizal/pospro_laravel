<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $fillable = ['kegiatan', 'instansi', 'nomor', 'peserta', 'keterangan', 'tempat', 'tanggal', 'panitia1', 'jabatan1', 'ttd1', 'panitia2', 'jabatan2', 'ttd2', 'gambar'];
}
