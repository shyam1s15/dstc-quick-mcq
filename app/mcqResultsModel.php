<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\result_levels;
class mcqResultsModel extends Model
{
    //
    protected $table = 'mcq_results_models';

    public function leveledMarks()
    {
        return $this->hasMany('App\result_levels', 'result_id', 'id');
    }
}
