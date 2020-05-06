<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nextLevelModel;
class resultsPageController extends Controller
{
    //
    public function showResults(Request $req){
        $combo = $req->input("Marks");
        $sendMarks = array();
        $sendLevels = array();
        foreach( $combo as $index => $marks ){
            if( $marks != null){
                $sendMarks[] = $combo[ $index ];
                $sendLevels[] = $index;
            }
        }
        $levels = collect();
        foreach( $sendLevels as $level_id){
            $levels->add(  nextLevelModel::find( $level_id ) );
        }
        return response()->view('test.results',["levels"=>$levels,"marks"=>$sendMarks]);
        // return response()->json(["marks"=>$sendMarks]);
    }
    public function showTestResults(Request $req){

        return view("test.results");
    }
}
