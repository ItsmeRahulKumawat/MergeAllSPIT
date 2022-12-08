<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\FacultyGroup;
use App\Models\Outreach;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    
    public function generateReport(Request $request){
        // see what is selected
        $selected = $request->reportType;
        // if selected is proposal
        if($selected == 'proposal'){
            // show proposal by start date and end date
            $start_date = $request->start_date;
            $faculty_id = $request->faculty_select;
            $department_id = $request->department_select;
            echo "<script>console.log('faculty id: ".$faculty_id."')</script>";
            echo "<script>console.log('department id: ".$department_id."')</script>";
            echo "<script>console.log('start date: ".$start_date."')</script>";
            if($start_date!=null){
                $end_date = $request->end_date;
                $proposal = Proposal::whereBetween('proposal_submissionDate', [$start_date, $end_date])->get();
                $report = true;
                return view('report', compact('proposal', 'report')); 
            }else if($faculty_id!=null){
                // find faculty id by searching faculty name
                // find faculty name from faculty id
                $faculty = Faculty::where('faculty_id', $faculty_id)->first();
                // find faculty group id by searching faculty name
                // search faculty name with like clause
                $faculty_group = FacultyGroup::where('faculty_group_name', 'like', '%'.$faculty->faculty_name.'%')->get();
                // find proposal by searching faculty group id
                $proposal_array=[];
                for($i=0; $i<count($faculty_group); $i++){
                    $proposal = Proposal::where('proposal_faculty_group_id', $faculty_group[$i]->faculty_group_id)->get();
                    for($j=0; $j<count($proposal); $j++){
                        array_push($proposal_array, $proposal[$j]);
                    }
                }
                $proposal = $proposal_array;
                $report = true;
                return view('report', compact('proposal', 'report'));
            }else if($department_id!='0'){
                $department = Department::where('department_id', $department_id)->first();
                echo "<script>console.log('department name: ".$department->department_name."')</script>";
                $faculty_group = FacultyGroup::where('faculty_group_department', 'like', '%'.$department->department_name.'%')->get();
                $proposal_array=[];
                for($i=0; $i<count($faculty_group); $i++){
                    $proposal = Proposal::where('proposal_faculty_group_id', $faculty_group[$i]->faculty_group_id)->get();
                    for($j=0; $j<count($proposal); $j++){
                        array_push($proposal_array, $proposal[$j]);
                    }
                }
                $proposal = $proposal_array;
                $report = true;
                return view('report', compact('proposal', 'report'));
            }
            // else 
            // show all proposal
            else{
                $proposal = Proposal::all();
                $report = true;
                return view('report', compact('proposal', 'report'));
            }
        }else if($selected == 'outreach'){
            $start_date = $request->start_date;
            $faculty_id = $request->faculty_select;
            $department_id = $request->department_select;
            echo "<script>console.log('faculty id: ".$faculty_id."')</script>";
            echo "<script>console.log('department id: ".$department_id."')</script>";
            echo "<script>console.log('start date: ".$start_date."')</script>";
            if($start_date!=null){
                $end_date = $request->end_date;
                $outreach = Outreach::whereBetween('outreach_date', [$start_date, $end_date])->get();
                $report = true;
                return view('report', compact('outreach', 'report')); 
            }else if($faculty_id!=null){
                $faculty = Faculty::where('faculty_id', $faculty_id)->first();
                // find faculty group id by searching faculty name
                // search faculty name with like clause
                $faculty_name = $faculty->faculty_name;
                // find proposal by searching faculty group id
                
                $outreach_array=[];
                $outreach = Outreach::where('outreach_faculty_name', 'like', '%'.$faculty_name.'%')->get();
                $report = true;
                return view('report', compact('outreach', 'report'));
            }else if($department_id!='0'){
                
                $department = Department::where('department_id', $department_id)->first();
                $outreach_array=[];
                $outreach = Outreach::where('outreach_faculty_department', 'like', '%'.$department->department_name.'%')->get();
                $report = true;
                return view('report', compact('outreach', 'report'));
            }
            // else 
            // show all proposal
            else{
                $outreach = Outreach::all();
                $report = true;
                return view('report', compact('outreach', 'report'));
            }
        }
        
        

        
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
