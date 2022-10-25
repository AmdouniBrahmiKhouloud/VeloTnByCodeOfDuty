<?php

namespace App\Exports;

use App\Models\Model_Velo;
use Maatwebsite\Excel\Concerns\FromCollection;

class ModelsExport implements FromCollection
{
    public function collection()
    {
        return Model_Velo::all();
    }
}