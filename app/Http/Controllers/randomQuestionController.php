<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
use App\facultyModel;
class randomQuestionController extends Controller
{
    //
    public function randomQuestions(Request $req,$app_id){
        // $notInclude = array();
        // $notInclude = $req->input("application_id");
        // $App = appFormDataModel::find( $notInclude );
        $App = appFormDataModel::find( $app_id );
        // $questions = $App->questions;
        // dd(facultyModel::all());
        // dd($App->questions);
        // $randomQuestion = array();
        // return \response(\view("load.faculty")->with([ "professors"=>$facultyModel::all() ]) );
        return \response( \view("load.mcqs") -> with([ "question" =>$App->questions]) );
    }

    public function testRandomQuestions(Request $req){
        $app_id = $req->input("application_id");
        $app = appFormDataModel::find($app_id);
        // $app->randomQuestions
        // return  \view("load.mcqs") -> with([ "question" => $app->questions]) ;
        return \view("load.mcqs")->with(["questions"=>$app->questions]);
        // return \response()->json(["success_msg"=>"yeah"]);
    }
}
