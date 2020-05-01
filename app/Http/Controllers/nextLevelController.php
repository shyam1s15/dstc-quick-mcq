<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nextLevelModel;
use App\questionModel;
class nextLevelController extends Controller
{
    //
    public function index(){
        return response(view("faculty.nextLevel"));
    }
    public function makeLevel(Request $req){
        $Level = new nextLevelModel();
        $Level->branch_subject = $req->input('level_info.branch_name');
        $Level->passing = $req->input('level_info.passing_marks');
        $Level->passing_msg = $req->input('level_info.passing_message');
        $Level->Elite = $req->input('level_info.elite_marks');
        $Level->Elite_msg = $req->input('level_info.elite_message');
        
        $seriesArr = array();
        $seriesArr = $req->input("level_info.question_series");

        $Level->app_id = $req->input('level_info.app_id');
        $Level->save();
        foreach ($seriesArr as $q_id){
            $question = questionModel::find($q_id);
            $Level->questions()->save($question);
        }
        
        return response()->json(["success_msg"=>$Level->id]);
    }
}
