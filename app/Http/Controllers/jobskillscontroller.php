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
        $data= JobSkills::with('Jobs','Skills')->get();
        return view('JobSkills.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs=Job::all()->pluck('title','id');
        $skills=Skills::all()->pluck('skills_name','id');
        return view('JobSkills.create',compact('jobs','skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try{

//          dd($request->all());

          $data =JobSkills::create([
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
catch (\Exception $exception){
          dd($exception);
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
        $jobskills=jobSkills::find($request->id);
        $jobskills->update([
            'job_id'=>$request->job_id,

            'skill_id'=>$request->skill_id,
            'status'=>$request->status

        ]);
        return redirect()->route('JobSkills.index')->with('success','jobskills added success fully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jobskills= jobSkills::findOrFail($id);
        $jobskills->delete();

        return redirect()->route('JobSkills.index')->with('success', 'jobskills deleted successfully.');
    }
}
