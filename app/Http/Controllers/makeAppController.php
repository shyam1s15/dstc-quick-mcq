<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\appFormDataModel as DstcForm;
class makeAppController extends Controller
{
    public function store(Request $req){
        // $jsonReqData = \json_decode($req->getContent(),true);
        // $req->input('app.app_head');
        $Form = new DstcForm();
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
}
