<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nextLevelController extends Controller
{
    //
    public function index(){
        return response(view("faculty.nextLevel"));
    }
}
