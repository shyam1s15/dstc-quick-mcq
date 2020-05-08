<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
use App\nextLevelModel;
class appEditController extends Controller
{
    //
    public function testAppEdit(Request $request){
        $app_id = $request->input("app_id");
        $app = $app_id == null ? "" : appFormDataModel::find( $app_id );
        return response( view('edit.app',["app"=>$app] ) );
    }
    public function makeAppEdit(Request $req){
        // $jsonReqData = \json_decode($req->getContent(),true);
        // $req->input('app.app_head');
        $Form = appFormDataModel::find( $req->input("app.app_id") );
        $Form->app_head = $req->input('app.app_head');
        $Form->title1 = $req->input('app.title1');
        $Form->title2 = $req->input('app.title2');
        $Form->created_at =   $req->input('app.start_date');// . " 00:00:00";
        $Form->finish_at =  $req->input('app.finis_date');// . " 00:00:00";
        // $Form->created_by = $req->input('app.created_by');
        $Form->save();

        // please do not change the return statement application heavily realise on it.
        // return \response()->json(["success_msg" => $Form->id ] );
        return \response()->json(["success_msg" => $Form->id ] );
    }
    public function showLevelsForEdit(Request $request){
        $app = appFormDataModel::find( $request->input("app_id") ); 
        return \response( \view("edit.show.level",[ "levels"=> $app->levels ] ) );
        // return \response(  )->json([ "levels"=> $app ] );      
    }

    public function compileLevelToEditPage(Request $request){
        $level = nextLevelModel::find( $request->input("level_id") ); 
        return \response( \view("edit.level",[ "level"=> $level ] ) );
    }
}
