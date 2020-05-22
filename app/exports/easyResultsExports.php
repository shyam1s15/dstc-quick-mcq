<?php

namespace App\exports;

use App\new_student;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\appFormDataModel;
class easyResultsExports implements FromCollection
{
    //
    public function __construct( $app_id)
    {
        $this->app_id = $app_id;
    }
    public function collection()
    {
        return appFormDataModel::find($this->app_id)->tempStudentResults;
    }
}
