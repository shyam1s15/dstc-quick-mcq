<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
use Maatwebsite\Excel\Excel;
use App\exports\easyResultsExports;

class makeExcelResultsController extends Controller
{
    //
    public function create_results(Request $request){
        $app_id = $request->input('app_id');
        $app = appFormDataModel::find($app_id);
        // return $app->tempStudentResults;
        // return Excel::create();
        // $excel = new Excel();
        return Excel::download(new easyResultsExports, 'invoices.xlsx');

    }
}
