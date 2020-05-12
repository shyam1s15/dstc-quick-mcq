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

    public function editAndStoreLevel(Request $req){
        $Level = nextLevelModel::find( $req->input("level.level_id") );

        $Level->branch_subject = $req->input('level_info.branch_name') === "null" ? $Level->branch_subject : $req->input('level.branch_name');
        $Level->passing = $req->input('level.passing_marks') == "null" ? $Level->passing : $req->input('level.passing_marks');
        $Level->passing_msg = $req->input('level.passing_message') == "null" ? $Level->passing_msg : $req->input('level.passing_message');
        $Level->Elite = $req->input('level.elite_marks') == "null" ? $Level->Elite : $req->input('level.elite_marks');
        $Level->Elite_msg = $req->input('level.elite_message') == "null" ? $Level->Elite_msg : $req->input('level.elite_message');
        
        $Level->save();
        return response()->json(["success_msg"=>$Level->branch_subject]);
        // return response()->json(["success_msg"=>$req->input('level.branch_name')]);
        
    }
}
