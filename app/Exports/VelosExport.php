<?php

namespace App\Exports;

use App\Models\Velo;
use Maatwebsite\Excel\Concerns\FromCollection;

class VelosExport implements FromCollection
{
    public function collection()
    {
        return Velo::all();
    }
}