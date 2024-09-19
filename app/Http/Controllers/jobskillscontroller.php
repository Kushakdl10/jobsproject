<?php

namespace App\Http\Controllers;

use App\Models\applications;
use App\Models\Job;
use App\Models\jobSkills;
use App\Models\Skills;
use App\Models\User;
use Illuminate\Http\Request;

class jobskillscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= JobSkills::all();
        return view('jobSkills.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills=Skills::all()->pluck('skills_name','id');
        $jobs=Job::all()->pluck('title','id');
        return view('jobskills.create',compact('skills','jobs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = JobSkills::create([
            'job_id'=>$request->job_id,
            'skill_id'=>$request->skill_id,
            'status'=>$request->status
        ]);
        if ($data){
            return redirect()->route('JobSkills.index');
        }else{
            return redirect()->back()->with('error','something went wrong');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jobskills=jobSkills::find($id);
        return view('jobskills.edit',compact('jobskills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
