<?php

namespace App\Http\Controllers;

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

        foreach( $higgest_levels as $max_sub ){
            $max_subjects->add( nextLevelModel::find( $max_sub ) );
        }

        return response()->view('test.results',["levels"=>$levels,"marks"=>$sendMarks,"higgest_subjects"=> $max_subjects,"higgest_marks"=>$higgest_marks ]);
        // return response()->json(["marks"=>$sendMarks]);
    }
    public function showTestResults(Request $req){

        return view("test.results");
    }
}
