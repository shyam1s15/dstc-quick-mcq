<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\new_student;
class checkUserController extends Controller
{
    //
    public function makeUser(Request $request){
        $full_name = $request->input('full_name') == null ? '': strtolower( $request->input('full_name') );
        $seat_number = $request->input('seat_number') == null ? '' : $request->input('seat_number');
        $contact = $request->input('contact') == null ? '' : $request->input('contact');
        $city = $request->input('city') == null ? '': $request->input('city');
        $email = $request->input('email') == null ? '' : strtolower( $request->input('email') );
        $qualification = $request->input("qualification") == null ? '' : $request->input('qualification');   
        

        $student = new_student::where("full_name",$full_name)
        ->where('email',$email)
        ->first();

        if($student == null ){
            $student = new new_student();
            $student->full_name = $full_name;
            $student->seat_number = $seat_number;
            $student->contact_number = $contact;
            $student->city = $city;
            $student->email = $email;
            $student->qualification = $qualification;
            $student->save();
        }
        return redirect( '/student/showChoices' )->withCookies( [
            cookie('s_name',$full_name,60),
            cookie('s_email',$email,60),
        ] );
    }
}
