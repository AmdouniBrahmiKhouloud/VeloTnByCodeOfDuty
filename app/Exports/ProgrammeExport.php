<?php

namespace App\Exports;

use App\Models\Programme;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProgrammeExport implements FromCollection
{
    public function collection()
    {
        return Programme::all();
    }
}