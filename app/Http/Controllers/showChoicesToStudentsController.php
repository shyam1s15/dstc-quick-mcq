<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appFormDataModel;
class showChoicesToStudentsController extends Controller
{
    //
    public function showChoices(){
        $Apps = appFormDataModel::all();
        return view("students.allForms")->with(["Apps"=>$Apps]);
    }
}
