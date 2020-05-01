<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\questionModel;
use App\nextLevelModel;
class appFormDataModel extends Model
{
    //
    protected $table = 'appFormData';
    public $timestamps = false;
    
    protected $attributes = [
        'app_head' => "DSTC Application",
        'title1' => "How well Do you know DSTC",
        'title2' => "Let's take it to next level",
    ];

    
    public function questions()
    {
        return $this->hasMany('App\questionModel', 'app_id', 'id');
    }
    public function levels()
    {
        return $this->hasMany('App\nextLevelModel', 'app_id', 'id');
    }

}
