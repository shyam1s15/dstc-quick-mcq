<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionModel;
use App\appFormDataModel;
class saveQuestionController extends Controller
{
    //
    public function store(Request $req){
        $Question = new questionModel();
        $Question->question = $req->input('que.question');
        $Question->option1 = $req->input('que.option1');
        $Question->option2 = $req->input('que.option2');
        $Question->option3 = $req->input('que.option3');
        $Question->option4 = $req->input('que.option4');
        $Question->ans = $req->input('que.correctAns');
        
        // $Form = appFormDataModel::find($req->input('que.app_id'));
        // $Form->questions()->save($Question);
        
        $Question->app_id = $req->input('que.app_id');
        
        // $req->inpu->store('images');
        $Question->save();  

        // return response()->json(['success_msg'=>$req->input('que.app_id')]);
        return response()->json(["success_msg"=> $Question->id ]);

    }
    public function storeImage(){
        return response()->json(["success_msg"=>"yeah"]);
    }
}
