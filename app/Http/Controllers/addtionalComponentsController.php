<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addtionalComponentsController extends Controller
{
    //
    public function singleLinedButtons()
    {
        return response()->view('addtionalComponents.singleLinedBtns', ["leftBtnName" => request()->input('leftBtnName'), "rightBtnName" => request()->input("rightBtnName")]);
    }
    public function singleLinedButtons2()
    {
        return response()->view('addtionalComponents.singleLinedButtons2', ["leftBtnName" => request()->input('leftBtnName'), "rightBtnName" => request()->input("rightBtnName")]);
    }
    public function endLineMessage()
    {
        return response(view('addtionalComponents.pageRefreshMessage')->with(["message" => request()->input("message")]));
    }
}
