<?php
namespace App\Http\Controllers;

use App\Models\FacultyGroup;
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
        $proposal_folder = $year.'/'.$monthName.'/'.$day;
        $fileName = $title.'.'.$file->getClientOriginalExtension();
        $file->storeAs($proposal_folder, $fileName);

        
        $proposal = new Proposal();
        
        $faculty_group = array();
        $department_group = array();
        for($i=1; $i<=5; $i++){
            $faculty = $request->input('faculty_name_'.$i);
            $department = $request->input('faculty_department_'.$i);
            if($faculty != null){
                array_push($faculty_group, $faculty);
                array_push($department_group, $department);
            }
        }
        $faculty_group = implode(',', $faculty_group);
        $department_group = implode(',', $department_group);

        $faculty_group_table = new FacultyGroup();
        $faculty_group_table->faculty_group_name = $faculty_group;
        $faculty_group_table->faculty_group_department = $department_group;
        $faculty_group_table->save();

        $faculty_group_id = FacultyGroup::where('faculty_group_name', $faculty_group)->first()->id;
        $proposal->proposal_faculty_group_id = $faculty_group_id;

        // $department = $request->input('proposal_department');
        // $department = implode(',', $department);
        
        // give random hash string as id
        $proposal->proposal_id = md5(uniqid(rand(), true));
        $proposal->proposal_title = $request->input('proposal_title');
        $proposal->proposal_authorityOrOrganization = $request->proposal_authorityOrOrganization[0];
        $proposal->proposal_govtPrivate = $request->proposal_govtPrivate[0];
        $proposal->proposal_abstract = $request->input('proposal_abstract');
        $proposal->proposal_fundingAmount = $request->input('proposal_fundingAmount');
        $proposal->proposal_submissionDate = $request->input('proposal_submissionDate');
        $proposal->proposal_file = $proposal_folder.'/'.$fileName;
        $proposal->save();
        // send view with proposal id

        return view('proposal_submitted', ['proposal_id' => $proposal->proposal_id]);
        
    }

    public function pdfStream(Request $request){
        $proposal_id = $request->input('proposal_id');
        $proposal = Proposal::where('proposal_id', $proposal_id)->first();
        $file = $proposal->proposal_file;
        $file = str_replace('public/', '', $file);
        $file = storage_path('app/'.$file);
        return response()->file($file);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $proposal = Proposal::where('proposal_id', $id)->first();

        // return response()->file(storage_path($proposal->proposal_file));
        return view('proposal_details')->with('proposal', $proposal);
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
        // update faculty
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