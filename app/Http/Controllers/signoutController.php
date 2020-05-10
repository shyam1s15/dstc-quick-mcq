<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signoutController extends Controller
{
    public function signOut(){
        return redirect('welcome')->withCookies(
            [cookie('s_name','0',0),
            cookie('e_email','0',0)
            ]
        );
    }
}
