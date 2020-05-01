<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\questionModel;
class nextLevelModel extends Model
{
    //
    protected $table = 'next_level_models';
    public $timestamps = false;
    
    

    public function questions()
    {
        return $this->hasMany('App\questionModel', 'level_id', 'id');
    }
}
