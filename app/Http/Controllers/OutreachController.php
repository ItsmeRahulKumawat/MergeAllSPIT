<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Outreach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OutreachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('outreach');
    }

    public function getDept(){
        $num = $_POST['num'];
        $dept = $_POST['department'];
        $connection = mysqli_connect('localhost', 'root', '', 'laravel');
        $sql = mysqli_query($connection, "SELECT faculty_name,faculty_id FROM faculties Where faculty_department = '$dept'");
        while ($row = $sql->fetch_assoc()) {
            echo "<option value='" . $row['faculty_name'] . "'>" . $row['faculty_name'] . "</option>";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        // validations
        $request->validate([
            'faculty_department_1' => 'required',
            'faculty_name_1' => 'required',
            'activity' => 'required',
            'status' => 'required',
            'place' => 'required',
            'date_activity' => 'required',
            'sponsorList' => 'required',
            'outreach_amount' => 'required',
            'photos' => 'required',
            'report' => 'required',
        ],[
            'faculty_department_1.required' => 'Faculty Department is required',
            'faculty_name_1.required' => 'Faculty Name is required',
            'activity.required' => 'Activity is required',
            'status.required' => 'Status is required',
            'place.required' => 'Place is required',
            'date_activity.required' => 'Date of Activity is required',
            'sponsorList.required' => 'Sponsor is required',
            'outreach_amount.required' => 'Amount is required',
            'photos.required' => 'Photos are required',
            'report.required' => 'Report is required',
        ]);
        $outreach = new Outreach();
        $outreach->outreach_faculty_department = $request->input('faculty_department_1');
        $outreach->outreach_faculty_name =$request->input('faculty_name_1');
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
        $photos_path = 'public/outreach/'.$photos_folder . '/' . $year_folder . '/' . $month_folder . '/' . $day_folder;
        $report_path = 'public/outreach/'.$report_folder . '/' . $year_folder . '/' . $month_folder . '/' . $day_folder;
        $photos = array();
        foreach($request->file('photos') as $image)
        {
            $name = $image->getClientOriginalName();
            $image->storeAs($photos_path, $name);
            // remove public from photos path
            $photos_path = substr($photos_path, 7);
            $photos[] = $photos_path . '/' . $name;
        }
        $photoList= implode(",",$photos);
        $outreach->outreach_photos = $photoList;
        $report_name = $report->getClientOriginalName();
        $report->storeAs($report_path, $report_name);
        // remove public from report path
        $report_path = substr($report_path, 7);
        $outreach->outreach_report = $report_path . '/' . $report_name;
        $temp = null;
        if($request->input('id')!=null){
            $temp = $request->input('id');

            // update outreach where id matches
            $outreach = Outreach::where('id', $temp)->first();
            $outreach->update([
                'outreach_faculty_department' => $request->input('faculty_department_1'),
                'outreach_faculty_name' =>$request->input('faculty_name_1'),
                'outreach_activity' => $request->input('activity'),
                'outreach_status' => $request->input('status'),
                'outreach_place' => $request->input('place'),
                'outreach_date' => $request->input('date_activity'),
                'outreach_sponsors' => $request->input('sponsorList'),
                'outreach_amount' => $request->outreach_amount,
                'outreach_photos' => $photoList,
                'outreach_report' => $report_path . '/' . $report_name,
            ]);
        }else{
            $outreach->save();
        }
        
        $temp = $outreach->id;
        return view('submitted', ['outreach_id' => $temp]);

    }
    public function showEditForm($id){
        $outreach = Outreach::where('id', $id)->first();
        
        return view('outreach_edit')->with(['outreach'=>$outreach]);
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
        $outreach = Outreach::where('id', $id)->first();

        // $outreach->delete();
        // dd($outreach);
        $request->request->add(['id' => $id]);
        // dd($request->all());
        return $this->store($request);


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
        $outreach = Outreach::where('id', $id)->first();
        // console log 
        // delete outreach files from storage folder
        // dd public path
        $photos_array = explode(",", $outreach->outreach_photos);
        
        foreach($photos_array as $photos){
            if( Storage::disk('public')->exists( $photos)){
                Storage::disk('public')->delete($photos);
            }
            
        }
        if( Storage::disk('public')->exists($outreach->outreach_report)){
            Storage::disk('public')->delete($outreach->outreach_report);
        }
        $outreach->delete();
        // delete files from storage

    }
}
