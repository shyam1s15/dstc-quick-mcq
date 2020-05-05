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
        dd($App->questions->count());
        // dd($App->questions);
        // $randomQuestion = array();
        // return \response(\view("load.faculty")->with([ "professors"=>$facultyModel::all() ]) );
        return \response(\view("test.app.mcqs")->with(["questions" => $App->questions]));
    }

    public function testRandomQuestions(Request $req)
    {
        $app_id = $req->input("Logic.app_id");
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
        $randomIndex = 0;

        if ($hadQuestions == null) {
            $hadQuestions = array();
        }

        $app = appFormDataModel::find($app_id);
        $questionCollection = collect();
        // $questionCollection->add($app->questions);
        $send = array();

        $quesTemp = array();

        foreach ($app->questions as $question) {
            array_push($quesTemp, $question->id);
        }

        if ($hadQuestions !== null) {
            foreach ($hadQuestions as $hadQues) {
                $key = \array_search($hadQues, $quesTemp);

                if (false !== $key) {
                    unset($quesTemp[$key]);
                }
            }
        }


        for ($i = 0; $i < 5 && $i < count($quesTemp); $i++) {
            $randomIndex = array_rand($quesTemp);

            $questionCollection->push(questionModel::find($quesTemp[$randomIndex]));
            array_push($send,  $quesTemp[$randomIndex]);
            unset($quesTemp[$randomIndex]);
        }

        // return  response( \view("load.mcqs")->with(["questions" => $questionCollection ]) );//->json(["questionSeries" => array_merge($send,$hadQuestions) ]);
        // return  response(  )->view("load.mcqs", ["questions" => $questionCollection ]);//->json(["questionSeries" => array_merge($send,$hadQuestions) ]);
        return  response()->view("test.app.mcqs", ["questions" => $questionCollection]); //->json(["questionSeries" => array_merge($send,$hadQuestions) ]);

        // $randomIndex = array_rand($quesTemp);

        // $val = $app->questions->count();

        // return  response(  )->json([ "questionSeries" => $randomIndex, "size "=>sizeof($quesTemp)  ,"send" => $send, "merged" => array_merge($send,$hadQuestions)]);
    }

    public function sendRandomSeries(Request $req)
    {
        $app_id = $req->input("app_id");
        $hadQuestions = $req->input("questionSeries") == null ? array() : $req->input("questionSeries");
        $randomIndex = 0;

        $app = appFormDataModel::find($app_id);
        $send = array();
        $sendWithDetails = array();
        $gotQuestions = array();
        $index = 0;

        foreach ($app->questions as $question) {
            array_push($gotQuestions, $question->id);
        }

        $difference = array_diff($gotQuestions, $hadQuestions);

        if (count($difference) > 0) {
            for ($i = 0; $i < 5 && $i < count($difference); $i++) {
                $randomIndex = array_rand($difference);

                array_push($send,  $difference[$randomIndex]);
                unset($difference[$randomIndex]);
            }
        }

        foreach ($send as $question) {
            if (questionModel::find($question)->level()->exists()) {
                $que = questionModel::find($question);
                $level_id = $que->level->id;

                $correctAns = $que->ans !== null ? $que->ans : "";

                array_push($sendWithDetails, array($que->id, $level_id, $correctAns));
            }
        }

        // return  response(  )->json([ "questionSeries" => $sendWithDetails]);
        // return  response(  )->json([ "questionSeries" => $hadQuestions,$app_id]);
        return  response()->json(["questionSeries" => $sendWithDetails]);
    }

    public function compileAndShowQuestions(Request $req)
    {

        $questions = $req->input("Logic");
        $randomIndex = 0;
        $questionCollection = collect();
        // $questionCollection->add($app->questions);

        if ($questions == null) {
            $questions = array();
        }
        foreach ($questions as $question) {
            $mcq = questionModel::find($question[0]);
            $questionCollection->add($mcq);
        }

        return  response(view("test.app.mcqs", ["questions" => $questionCollection]) ); //->json(["questionSeries" => array_merge($send,$hadQuestions) ]);
        // return  response(  )->json( ["questions" => $questions ]);//->json(["questionSeries" => array_merge($send,$hadQuestions) ]);

    }
}
