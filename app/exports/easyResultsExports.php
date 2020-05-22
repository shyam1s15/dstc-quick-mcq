<?php

namespace App\exports;

use App\new_student;
use Maatwebsite\Excel\Concerns\FromCollection;

class easyResultsExports extends FromCollection
{
    //
    public function collection()
    {
        return new_student::all();
    }
}
