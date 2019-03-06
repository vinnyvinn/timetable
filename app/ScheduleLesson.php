<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleLesson extends Model
{
    protected $guarded = [];

    function teacher(){
     return $this->belongsTo('App\Teacher');
    }
    function school(){
        return $this->belongsTo('App\School');
    }
    function myclass(){
        return $this->belongsTo('App\Myclass');
    }
function subject(){
        return $this->belongsTo('App\Subject');
}

}
