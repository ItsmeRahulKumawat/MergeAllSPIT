<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('department');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        // store in department database
        $department = new Department();
        $department->department_name = $request->department_name;
        // if department name is duplicated and request 
        $department->save();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Department created successfully',
            'data' => $department
        ], 200);
        }catch(\Exception $e){
            if($e->getCode() == 23000){
                return response()->json([
                    'status' => 'error',
                    'message' => 'Department name already exists',
                    'data' => null
                ], 400);
            }
        }
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
        // update in department database
        
        $department=Department::where('department_id',$id)->first();
        // $department->department_id=$request->department_id;
        $department->department_name = $request->department_name;
        $department->save();
        
        // return response()->json($department->department_name);

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
        $department=Department::where('department_id',$id);
        $department->delete();
        // if department count is 0 then return 0
        if(Department::count()==0){
            echo "<script>alert('No Department Found')</script>";
            Department::truncate();
        }
    }
}
