<?php

namespace App\Http\Controllers;

use App\Repo\ReportsRepo;
use App\ScheduleLesson;
use App\School;
use App\Teacher;
use Illuminate\Http\Request;
use Excel;


class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create')->with('teachers',Teacher::all())->with('schools',School::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     if($_POST['submit'] == 'generate-all'){
         return $this->reportDetails();
     }

          $school_id = $request->get('school_id');
          $teacher_id = $request->get('teacher_id');

        $lessons = ScheduleLesson::where('school_id',$school_id)->where('teacher_id',$teacher_id)->get();

        return view('reports.index')->with('lessons',$lessons)->with('teacher_id',$teacher_id)->with('school_id',$school_id);
    }

    public function reportDetails()
    {
        $reports = ReportsRepo::init()->allReports();

        return Excel::create('timetable', function ($excel) use ($reports) {

            $excel->sheet('mySheet', function ($sheet) use ($reports) {

                $sheet->fromArray($reports);

            });

        })->download('xls');
}
    public function toExcel($t_id,$s_id)
    {
       $reports = ReportsRepo::init()->getReports($t_id,$s_id);


        return Excel::create('timetable', function ($excel) use ($reports) {

            $excel->sheet('mySheet', function ($sheet) use ($reports) {

                $sheet->fromArray($reports);

            });

        })->download('xls');
}
//    public function export()
//    {
//        $lessons = ScheduleLesson::where('school_id',$request->get('school_id'))->where('teacher_id',$request->get('teacher_id'))->get();
//        $pdf = PDF::loadView('reports.leads.generate-pdf', compact('leads'));
//        return $pdf->download('leads.pdf');
//    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
