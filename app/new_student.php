<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\mcqResultsModel;
class new_student extends Model
{
    //
    protected $table = 'new_students';
    protected $fillable = ['full_name', 'email','city','contact_number','qualification','seat_number','best_subject','marks']; //<---

    
    public function results()
    {
        return $this->hasMany('App\mcqResultsModel', 's_id', 'id');
    }
    
}
