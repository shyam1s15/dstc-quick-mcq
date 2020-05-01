<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;

class facultyViewAppController extends Controller
{
    //
    public function showApps(){
        $Apps = appFormDataModel::all();
        return response(view('faculty.allApps')->with( [ "Apps"=>$Apps ] ));
    }

    public function createApp(){
        return \response(\view('faculty.createApplication')); 
    }

    public function finishApp(Request $req){
        $App = appFormDataModel::find($req->input("app_id"));
        // $levels = $App->levels;
        
        // foreach($levels as $level){
        //     // \print_r($level);
        //     dd($level->branch_subject);
        // }
        return \response(\view("faculty.finishPage")->with([ "levels"=>$App->levels ]));       
    }
}
