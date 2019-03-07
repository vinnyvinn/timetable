<?php
/**
 * Created by PhpStorm.
 * User: vinnyvinny
 * Date: 3/6/19
 * Time: 6:33 PM
 */

namespace App\Repo;


use App\ScheduleLesson;

class ReportsRepo
{
static function init(){
    return new self();
}

    public function getReports($t_id,$s_id)
    {
        $lessons = ScheduleLesson::where('school_id',$t_id)->where('teacher_id',$s_id)->get();

        return $lessons->map(function ($lesson) {
            return [
                  'Date' => $lesson->date,
                'Time' => $lesson->time,
                  'Teacher' => $lesson->teacher->first_name .' '.$lesson->last_name,
                  'School' => $lesson->school->name,
                'Class' => $lesson->myclass->name,
                'Subject' => $lesson->subject->name,
                ];
        });
}

    public function allReports()
    {
        $lessons = ScheduleLesson::get();

        return $lessons->map(function ($lesson) {
            return [
                'Date' => $lesson->date,
                'Time' => $lesson->time,
                'Teacher' => $lesson->teacher->first_name .' '.$lesson->last_name,
                'School' => $lesson->school->name,
                'Class' => $lesson->myclass->name,
                'Subject' => $lesson->subject->name,
            ];
        });
}
}
