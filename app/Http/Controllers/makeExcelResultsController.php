<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
class makeExcelResultsController extends Controller
{
    //
    public function create_results(Request $request){
        $app_id = $request->input('app_id');
        $app = appFormDataModel::find($app_id);
        return $app->tempStudentResults;

    }
}
