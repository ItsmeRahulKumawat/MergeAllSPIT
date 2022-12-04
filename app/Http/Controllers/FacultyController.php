<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        return view('faculty');

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
        try{
            // store data in an array
            $temp = array();
            foreach($request->faculty_name as $key => $value){
                $data = array(
                    'faculty_name' => $request->faculty_name[$key],
                    'faculty_department' => $request->faculty_department[$key],
                    'faculty_email' => $request->faculty_email[$key],
                    'faculty_phone' => $request->faculty_phone[$key],
                    'faculty_password' => $request->faculty_password[$key]
                );
                
                $faculty_id = Faculty::insertGetId($data);
                $data['faculty_id'] = $faculty_id;
                array_push($temp, $data);
                // create a user for each faculty
                $user = new User();
                $user->name = $request->faculty_name[$key];
                $user->email = $request->faculty_email[$key];
                $user->password = Hash::make($request->faculty_password[$key]);
                $user->role = '0';
                $user->save();
                
            }
            // send the array as response
            return response()->json([
                'status' => 'success',
                'message' => 'Faculty added successfully',
                'data' => $temp
            ], 200);
            }catch(\Exception $e){
                if($e->getCode() == 23000){
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Email already exists',
                        'data' => null
                    ], 400);
                }
                

                return response()->json([
                    'status' => 'error',
                    'message' => $e->getMessage(),
                    'data' => null
                ], 400);
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
        $faculty = Faculty::where('faculty_id', $id);
        $faculty->update([
            'faculty_name' => $request->faculty_name,
            'faculty_department' => $request->faculty_department,
            'faculty_email' => $request->faculty_email,
            'faculty_phone' => $request->faculty_phone,
        ]);
        return response()->json(['success', 'Faculty Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // delete faculty with the id
        $faculty = Faculty::where('faculty_id', $id);
        $temp = Faculty::where('faculty_id', $id)->first();
        $faculty->delete();
        $email = $temp->faculty_email;
        print_r($email);
        // delete user
        $user = User::where('email', $email)->delete();
        return response()->json(['success', 'Faculty Deleted Successfully']);
    }
}
