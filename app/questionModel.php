<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\nextLevelModel;
class questionModel extends Model
{
    //
    protected $table = 'formQuestions';
    public $timestamps = false;

    
    public function level()
    {
        return $this->belongsTo('App\nextLevelModel', 'level_id','id');
    }
    
}
