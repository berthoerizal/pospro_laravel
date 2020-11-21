<?php

namespace App\Exports;

use App\Dataexcel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataexcelExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Dataexcel::all();
    }
}
