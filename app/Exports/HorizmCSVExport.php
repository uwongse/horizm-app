<?php

namespace App\Exports;

use App\Models\Horizm;
use Maatwebsite\Excel\Concerns\FromCollection;

class HorizmCSVExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Horizm::orderBy('userRating', 'desc')->orderBy('postRating', 'desc')->get();
    }
}
