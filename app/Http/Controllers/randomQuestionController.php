<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
class randomQuestionController extends Controller
{
    //
    public function randomQuestions(Request $req){
        $notInclude = array();
        $notInclude = $req->input("haveQuestions");
        $App = appFormDataModel::find( $req->input("app_id") );
        $questions = $App->questions;

        $randomQuestion = array();
    }
}
