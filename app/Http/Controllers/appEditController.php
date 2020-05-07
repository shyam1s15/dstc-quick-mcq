<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
class appEditController extends Controller
{
    //
    public function testAppEdit(Request $request){
        $app_id = $request->input("app_id");
        $app = $app_id == null ? "" : appFormDataModel::find( $app_id );
        return response( view('edit.app',["app"=>$app] ) );
    }
}
