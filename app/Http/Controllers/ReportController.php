<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\FacultyGroup;
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
            $department = $request->department_select;
            if($start_date!=null){
                $end_date = $request->end_date;
                $proposal = Proposal::whereBetween('proposal_submissionDate', [$start_date, $end_date])->get();
                // make report table visible 
                echo "<script>console.log('proposal " . $proposal . "' );</script>";

                $report = true;
                return view('report', compact('proposal', 'report')); 
            }else if($faculty_id!=null){
                // find faculty id by searching faculty name
                // find faculty name from faculty id
                $faculty = Faculty::where('id', $faculty_id)->first();
                // find faculty group id by searching faculty name
                // search faculty name with like clause
                $faculty_group = FacultyGroup::where('faculty_group_name', 'like', '%'.$faculty->faculty_name.'%')->get();
                // find proposal by searching faculty group id
                $proposal_array=[];
                for($i=0; $i<count($faculty_group); $i++){
                    $proposal = Proposal::where('proposal_faculty_group_id', $faculty_group[$i]->id)->get();
                    echo "<script>console.log('proposal " . $proposal . "' );</script>";
                    for($j=0; $j<count($proposal); $j++){
                        array_push($proposal_array, $proposal[$j]);
                    }
                }
                // log to console through echo
                echo "<script>console.log('faculty " . $faculty . "' );</script>";
                echo "<script>console.log('faculty_group " . $faculty_group . "' );</script>";
                for($i=0; $i<count($proposal_array); $i++){
                    echo "<script>console.log('proposal_array " . $proposal_array[$i] . "' );</script>";
                }
                echo "<script>console.log('proposal_array " . sizeof($proposal_array) . "' );</script>";
                $proposal = $proposal_array;
                $report = true;
                return view('report', compact('proposal', 'report'));
            }else if($department!=null){
                
                $report = true;
                return view('report', compact('proposal', 'report'));
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
