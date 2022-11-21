<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
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
        $request->validate([
            'faculty_name' => 'required|unique:faculties|max:255',
            'faculty_department' => 'required',
            'faculty_email' => 'required',
            'faculty_phone' => 'required',
        ],[
            'faculty_name.required' => 'Faculty Name is required',
            'faculty_name.unique' => 'Faculty Name already exists',
            'faculty_department.required' => 'Faculty Department is required',
            'faculty_email.required' => 'Faculty Email is required',
            'faculty_phone.required' => 'Faculty Phone is required',
        ],
        );
        foreach($request->faculty_name as $key => $value){
            $data = array(
                'faculty_name' => $request->faculty_name[$key],
                'faculty_department' => $request->faculty_department[$key],
                'faculty_email' => $request->faculty_email[$key],
                'faculty_phone' => $request->faculty_phone[$key],
            );
            Faculty::create($data);
        }
        return redirect()->back()->with('success', 'Faculty Added Successfully');
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
        // update faculty with the request
        $request->validate([
            'faculty_name' => 'required|max:255',
            'faculty_department' => 'required',
            'faculty_email' => 'required',
            'faculty_phone' => 'required',
        ],[
            'faculty_name.required' => 'Faculty Name is required',
            'faculty_department.required' => 'Faculty Department is required',
            'faculty_email.required' => 'Faculty Email is required',
            'faculty_phone.required' => 'Faculty Phone is required',
        ],
        );
        $faculty = Faculty::find($id);
        $faculty->faculty_name = $request->input('faculty_name');
        $faculty->faculty_department = $request->input('faculty_department');
        $faculty->faculty_email = $request->input('faculty_email');
        $faculty->faculty_phone = $request->input('faculty_phone');
        $faculty->save();
        return redirect()->back()->with('success', 'Faculty Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $faculty = Faculty::find($id);
        $faculty->delete();
    }
}
