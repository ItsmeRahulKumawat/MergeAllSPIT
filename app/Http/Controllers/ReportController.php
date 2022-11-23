<?php

namespace App\Http\Controllers;

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
            $faculty = $request->faculty_select;
            $department = $request->department_select;
            if($start_date!=null){
                $end_date = $request->end_date;
                $proposal = Proposal::whereBetween('proposal_submissionDate', [$start_date, $end_date])->get();
                // make report table visible 
                $report = true;
                return view('report', compact('proposal', 'report')); 
            }else if($faculty!=null){
                $proposal = Proposal::where('proposal_faculty', $faculty)->get();
                // make report table visible 
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
