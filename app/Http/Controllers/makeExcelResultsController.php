<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
use Maatwebsite\Excel\Facades\Excel;
use App\exports\easyResultsExports;

class makeExcelResultsController extends Controller
{
    //

    public function create_results(Request $request)
    {
        $app_id = $request->input('app_id');
        $app = appFormDataModel::find($app_id);
        // return $app->tempStudentResults;
        // // return Excel::create();
        // // $excel = new Excel();


        if( $app->tempStudentResults->count() <= 0 ){
            // return "<h1>sorry no results</h1>";
            return back()->with(['no_results'=>"sorry no results"]);
        }
        return Excel::download(new easyResultsExports($app_id), $app->app_head . '_jugad.xlsx');
    }
}
