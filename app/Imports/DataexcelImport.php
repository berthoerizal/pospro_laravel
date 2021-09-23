<?php

namespace App\Imports;

use App\Dataexcel;
use Maatwebsite\Excel\Concerns\ToModel;

class DataexcelImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Dataexcel([
            'username' => $row[0],
            'nama' => $row[1],
            'nomor_tps' => $row[2]
        ]);
    }
}
