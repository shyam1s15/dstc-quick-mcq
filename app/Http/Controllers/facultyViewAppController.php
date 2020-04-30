<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facultyViewAppController extends Controller
{
    //
    public function showApps(){
        return response(view('faculty.allApps'));
    }

    public function createApp(){
        return \response(\view('faculty.createApplication')); 
    }
}
