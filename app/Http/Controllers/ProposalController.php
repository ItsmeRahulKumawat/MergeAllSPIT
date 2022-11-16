<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;


class ProposalController extends Controller
{

    public function getDept(){
        $num = $_POST['num'];
        $dept = $_POST['department'];
        $connection = mysqli_connect('localhost', 'root', '', 'laravel');
        $sql = mysqli_query($connection, "SELECT faculty_name FROM faculties Where faculty_department = '$dept'");
        while ($row = $sql->fetch_assoc()) {
            // echo option with value 
            echo "<option value='" . $row['faculty_name'] . "'>" . $row['faculty_name'] . "</option>";
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Proposal::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'proposal_title' => 'required|unique:proposals|max:255',
            'proposal_abstract' => 'required',
            'proposal_fundingAmount' => 'required',
            'proposal_submissionDate' => 'required',
            'proposal_file' => 'required|max:10240',
        ],[
            'proposal_title.required' => 'Proposal Title is required',
            'proposal_title.unique' => 'Proposal Title already exists',
            'proposal_abstract.required' => 'Proposal Abstract is required',
            'proposal_fundingAmount.required' => 'Proposal Funding Amount is required',
            'proposal_submissionDate.required' => 'Proposal Submission Date is required',
            'proposal_file.max' => 'File size must be less than 10MB',
        ],
        );
        $title = $request->input('proposal_title');
        $file = $request->proposal_file;    
        // create a new folder with submission date as name
        $submission_date = $request->input('proposal_submissionDate');
        $submission_date = str_replace('/', '-', $submission_date);
        $year = date('Y', strtotime($submission_date));
        $month = date('m', strtotime($submission_date));
        $day = date('d', strtotime($submission_date));
        $year_folder = 'public/'.$year;
        // month in words
        $monthNum  = $month;
        $dateObj   = \DateTime::createFromFormat('!m', $monthNum);
        $monthName = $dateObj->format('F');
        $month_folder = $year_folder.'/'.$monthName;
        $day_folder = 'public/'.$year.'/'.$monthName.'/'.$day;
        if(!file_exists($year_folder)){
            mkdir($year_folder, 0777, true);
        }
        if(!file_exists($month_folder)){
            mkdir($month_folder, 0777, true);
        }
        if(!file_exists($day_folder)){
            mkdir($day_folder, 0777, true);
        }
        // create a new folder with proposal title as name
        $proposal_folder = 'public/'.$year.'/'.$monthName.'/'.$day;
        $fileName = $title.'.'.$file->getClientOriginalExtension();
        $file->storeAs($proposal_folder, $fileName);


        $proposal = new Proposal();
        $proposal->proposal_title = $request->input('proposal_title');
        $proposal->proposal_authorityOrOrganization = $request->proposal_authorityOrOrganization[0];
        $proposal->proposal_govtPrivate = $request->proposal_govtPrivate[0];
        $proposal->proposal_abstract = $request->input('proposal_abstract');
        $proposal->proposal_fundingAmount = $request->input('proposal_fundingAmount');
        $proposal->proposal_submissionDate = $request->input('proposal_submissionDate');
        $proposal->proposal_file = $proposal_folder.'/'.$fileName;

        $proposal->save();
        return view('proposal_submitted');
    }

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