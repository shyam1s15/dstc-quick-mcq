<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new_student extends Model
{
    //
    protected $table = 'new_students';
    protected $fillable = ['full_name', 'email','city','contact_number','qualification','seat_number','best_subject','marks']; //<---


}
