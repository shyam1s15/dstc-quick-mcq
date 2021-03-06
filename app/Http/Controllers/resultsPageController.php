<?php

namespace App\Http\Controllers;

use App\appFormDataModel;
use Illuminate\Http\Request;
use App\nextLevelModel;
use App\new_student;

class resultsPageController extends Controller
{
    //the below is the documentation of showResults,
    // here the $request->input('Marks') contains,
    // the first value contains the id of level,
    // the next value it contains is the original marks obtained in that level

    // the below is guide that how we display it in blade files,
    // the marks are stored in an array and level to in another
    // when we loop over one it will both have a index
    // thus we can display it very easily

    // for temporary purpose, we will add higgest marks and level name to new_student.

    public function showResults(Request $req){
        $higgest_marks = 0;
        $higgest_level = null;
        $combo = $req->input("Marks");
        $sendMarks = array();
        $sendLevels = array();
        // the below id we used to allocate the students to the correct id
        $app_id = $req->input('app_id');
        $qualification_recommendation = '';

        if( $req->cookie('s_qualification') ){
            $qualification_recommendation = strcmp(trim($req->cookie('s_qualification')),"12th Science A group")==0 ? "Bachelor" : "Diploma";
        }else{
            $qualification_recommendation = "It's in testing mode, please sign up first";
        }

        foreach( $combo as $index => $marks ){
            if( $marks != null){
                $sendMarks[] = $combo[ $index ];
                $sendLevels[] = $index;

                if( $marks >= $higgest_marks ){
                    $higgest_level = $index;
                    $higgest_marks = $marks;
                }

            }
        }
        $max_subjects = array();

        foreach( $combo as $index => $marks ){
            if( $marks == $higgest_marks ){
                $max_subjects[] = $index;
            }
        }

        // return response()->json(["temp_stu"=>$req->cookie('s_id')]);
        // we will add the marks in new_student if system has cookie
        if( $req->cookie('s_id') ){
            $temp_student = new_student::find( $req->cookie('s_id') );
            $temp_student->app_id = $app_id;
            if( $max_subjects != null ){
                $temp_student->best_subject = "";
                foreach( $max_subjects as $subID ){
                    $subject = nextLevelModel::find( $subID );
                    $temp_student->best_subject .= $subject->branch_subject;
                    $temp_student->best_subject .= " : ";
                }
            }
            // $subject = nextLevelModel::find( $higgest_level );
            // return response()->json(["temp_stu"=>$subject]);
            // $temp_student->best_subject = $subject->branch_subject;
            $temp_student->marks = $higgest_marks;
            $temp_student->save();
        }

        $levels = collect();
        foreach( $sendLevels as $level_id){
            $levels->add(  nextLevelModel::find( $level_id ) );
        }
        $higgest_level = $higgest_marks == 0 ? null : $higgest_level;
        $higgest_level = $higgest_level != null ? nextLevelModel::find($higgest_level) : null;

        $higgest_levels = $max_subjects;
        $max_subjects = collect();

        if( $higgest_marks != 0 ){
            foreach( $higgest_levels as $max_sub ){
                $max_subjects->add( nextLevelModel::find( $max_sub ) );
            }
        }else{
            $max_subjects = null;
        }

        return response()->view('test.results',["levels"=>$levels,"marks"=>$sendMarks,"higgest_subjects"=> $max_subjects,"higgest_marks"=>$higgest_marks,"qualification_recommendation"=>$qualification_recommendation ]);
        // return response()->json(["marks"=>$sendMarks]);
    }
    public function showTestResults(Request $req){

        return view("test.results");
    }
    public function fakeResults( Request $req){
        $app = appFormDataModel::find(8);
        $max_subjects = $app->levels;

        $levels = $max_subjects;
        $marks = array();
        foreach( $max_subjects as $subject ){
            $marks[] = $subject->Elite;
        }
        $higgest_marks = 10;

        return response()->view('test.resultPreview',["levels"=>$levels,"marks"=>$marks,"higgest_subjects"=> $max_subjects,"higgest_marks"=>$higgest_marks]);
    }
}
