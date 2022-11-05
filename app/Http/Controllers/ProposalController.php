<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;


class ProposalController extends Controller
{
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
            'proposal-title' => 'required',
            'proposal-abstract' => 'required',
            'proposal-funding-amount' => 'required',
            'proposal-submission-date' => 'required',
        ],[
            'proposal-title.required' => 'Proposal Title is required',
            'proposal-abstract.required' => 'Proposal Abstract is required',
            'proposal-funding-amount.required' => 'Proposal Funding Amount is required',
            'proposal-submission-date.required' => 'Proposal Submission Date is required',
        ]);
        // print errors

        // Proposal::create($request->all());
        // return view('proposal-submitted');
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