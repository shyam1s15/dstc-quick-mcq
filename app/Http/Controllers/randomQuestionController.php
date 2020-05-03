<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
use App\facultyModel;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\questionModel;

class randomQuestionController extends Controller
{
    //
    public function randomQuestions(Request $req, $app_id)
    {
        // $notInclude = array();
        // $notInclude = $req->input("application_id");
        // $App = appFormDataModel::find( $notInclude );
        $App = appFormDataModel::find($app_id);
        // $questions = $App->questions;
        // dd(facultyModel::all());
        $c = collect();
        $c->add($App->questions);
        dd($c[0]);
        dd($App->questions);
        // $randomQuestion = array();
        // return \response(\view("load.faculty")->with([ "professors"=>$facultyModel::all() ]) );
        return \response(\view("load.mcqs")->with(["questions" => $App->questions]));
    }

    public function testRandomQuestions(Request $req)
    {
        $app_id = $req->input("application_id");
        $app = appFormDataModel::find($app_id);
        // $app->randomQuestions
        // return  \view("load.mcqs") -> with([ "question" => $app->questions]) ;
        return \view("load.mcqs")->with(["questions" => $app->questions]);
        // return \response()->json(["success_msg"=>"yeah"]);
    }

    public function sendRandomQuestions(Request $req)
    {

        
        $app_id = $req->input("Logic.app_id");
        $hadQuestions = $req->input("Logic.questionSeries");

        $app = appFormDataModel::find($app_id);
        $questionCollection = collect();
        $questionCollection->add($app->questions);
        $send = array();
        
        // $quesTemp = array();
        // foreach ($app->questions as $question) {
        //     $quesTemp[] = $question->id;
        // }

        // foreach ($hadQuestions as $hadQues) {
        //     $key = array_search($hadQues, $quesTemp);
        //     $temp = array();
        //     if (false !== $key) {
        //         unset($quesTemp[$key]);
        //     }
        // }
        // for ($i= 0; $i < 5 ; $i++ ) { 
        //     $randomIndex = array_rand($quesTemp);

        //     $questionCollection->push( questionModel::find( $quesTemp[$randomIndex] ) );
        //     $send[] = $quesTemp[$randomIndex];
        //     unset($quesTemp[$randomIndex]);

        // }


        
        return  response( \view("load.mcqs")->with(["questions" => $questionCollection[0]]) )->json(["questionSeries" => array_merge($send,$hadQuestions) ]);
    }
}
