<?php

namespace App\Http\Controllers;

use App\Models\Outreach;
use Illuminate\Http\Request;

class OutreachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $outreach = new Outreach();
        $outreach->outreach_faculty_department = $request->input('faculty_department_1');
        $outreach->outreach_faculty_name = $request->input('faculty_name_1');
        $outreach->outreach_activity = $request->input('activity');
        $outreach->outreach_status = $request->input('status');
        $outreach->outreach_place = $request->input('place');
        $outreach->outreach_date = $request->input('date_activity');
        $outreach->outreach_sponsors = $request->input('sponsorList');
        $outreach->outreach_amount = $request->outreach_amount;
        
        
        // $outreach->outreach_photos = $request->input('photos');
        // $outreach->outreach_report = $request->input('report');
        
        // store path of multiple images 
        $report = $request->file('report');
        $submission_date = $request->input('date_activity');
        $year = date('Y', strtotime($submission_date));
        $month = date('m', strtotime($submission_date));
        $day = date('d', strtotime($submission_date));
        $year_folder = $year;
        // month in words
        $monthNum  = $month;
        $dateObj   = \DateTime::createFromFormat('!m', $monthNum);
        $monthName = $dateObj->format('F');
        $month_folder = $monthName;
        $day_folder = $day;
        $photos_folder = 'photos';
        $report_folder = 'report';
        $photos_path = 'outreach/'.$photos_folder . '/' . $year_folder . '/' . $month_folder . '/' . $day_folder;
        $report_path = 'outreach/'.$report_folder . '/' . $year_folder . '/' . $month_folder . '/' . $day_folder;
        $photos = array();
        foreach($request->file('photos') as $image)
        {
            $name = $image->getClientOriginalName();
            $image->storeAs($photos_path, $name);
            $photos[] = $photos_path . '/' . $name;
        }
        $photoList= implode(",",$photos);
        $outreach->outreach_photos = $photoList;
        $report_name = $report->getClientOriginalName();
        $report->storeAs($report_path, $report_name);
        $outreach->outreach_report = $report_path . '/' . $report_name;
        $outreach->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $outreach = Outreach::where('id', $id)->first();
        return view('proposal_details')->with('outreach', $outreach);
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
