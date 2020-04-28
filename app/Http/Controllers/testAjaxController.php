<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testAjaxController extends Controller
{
    //
    public function unique(Request $req){
        return response(view("test.opData"));
    }
}
