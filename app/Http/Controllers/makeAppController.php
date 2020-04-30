<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makeAppController extends Controller
{
    public function store(Request $req){
        // $jsonReqData = \json_decode($req->getContent(),true);
        $trash = $req->input('app.app_head');
        \DB::table('trash')->insert(
            ['what'=>$trash]
        );
        return \response()->json(["success_msg" => "done" ] );
    }
}
