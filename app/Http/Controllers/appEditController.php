<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
use App\nextLevelModel;
use App\questionModel;
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
        if( $req->input('app_id')!= null ){
            $app = appFormDataModel::find( $req->input('app_id') );
            $Level = new nextLevelModel();
            $app->levels()->save($Level);
        }else{
            $Level = nextLevelModel::find( $req->input("level.level_id") );
        }
        $Level->branch_subject = $req->input('level_info.branch_name') === "null" ? $Level->branch_subject : $req->input('level.branch_name');
        $Level->passing = $req->input('level.passing_marks') == "null" ? $Level->passing : $req->input('level.passing_marks');
        $Level->passing_msg = $req->input('level.passing_message') == "null" ? $Level->passing_msg : $req->input('level.passing_message');
        $Level->Elite = $req->input('level.elite_marks') == "null" ? $Level->Elite : $req->input('level.elite_marks');
        $Level->Elite_msg = $req->input('level.elite_message') == "null" ? $Level->Elite_msg : $req->input('level.elite_message');
        
        $Level->save();
        return response()->json(["success_msg"=>$Level->id]);
        // return response()->json(["success_msg"=>$req->input('level.branch_name')]);
        
    }


    public function generateLinearQuestionSeries(Request $req){
        $level_id = $req->input("level_id");
        $hadQuestions = $req->input("questionSeries") == null ? array() : $req->input("questionSeries");
        $randomIndex = 0;

        $level = nextLevelModel::find($level_id);
        $send = array();
        $gotQuestions = array();
        

        foreach ($level->questions as $question) {
            array_push($gotQuestions, $question->id);
        }

        $difference = array_diff($gotQuestions, $hadQuestions);

        if (count($difference) > 0) {
            for ($i = 0; $i < 5 && $i < count($difference); $i++) {
                $randomIndex = $i;

                array_push($send,  $difference[$randomIndex]);
                // unset( $difference[$randomIndex] );
            }
        }

        // return  response(  )->json([ "questionSeries" => $sendWithDetails]);
        // return  response(  )->json([ "questionSeries" => $hadQuestions,$app_id]);
        // return  response()->json(["questionSeries" => $level->questions]);
        return  response()->json(["questionSeries" => $send]);

    
    }
    public function compileAndShowQuestions(Request $req)
    {

        $questions = $req->input("questionSeries");
       
        $questionCollection = collect();
        // $questionCollection->add($app->questions);

        if ($questions == null) {
            $questions = array();
        }
        foreach ($questions as $question) {
            $mcq = questionModel::find($question);
            $questionCollection->add($mcq);
        }

        return  response(view("edit.questions", ["questions" => $questionCollection]) ); //->json(["questionSeries" => array_merge($send,$hadQuestions) ]);
        // return  response(  )->json( ["questions" => $questions ]);//->json(["questionSeries" => array_merge($send,$hadQuestions) ]);

    }

    public function compileNewQuestionPage(){
        return response()->view("edit.make.newQuestion");
    }

    public function storeNewQuestionByLevel(Request $req){
        $Question = new questionModel();
        $level = nextLevelModel::find( $req->input("level_id") );
        // return response($level);
        $Question->question = $req->input('que.question');
        $Question->option1 = $req->input('que.option1');
        $Question->option2 = $req->input('que.option2');
        $Question->option3 = $req->input('que.option3');
        $Question->option4 = $req->input('que.option4');
        $Question->ans = $req->input('que.correctAns');
        
        // $Form = appFormDataModel::find($req->input('que.app_id'));
        // $Form->questions()->save($Question);
        
        $Question->app_id = $req->input("app_id");
        $Question->save();
        
        $level->questions()->save($Question);  
        return response(  )->json(["success_msg"=>$Question]);


        
        // $req->inpu->store('images');

        // return response()->json(['success_msg'=>$req->input('que.app_id')]);
        return response()->json(["success_msg"=> $Question->id ]);

    }
}
