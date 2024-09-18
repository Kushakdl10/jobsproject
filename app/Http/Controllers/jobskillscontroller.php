<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobSkillscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= jobskills::all();
        return view('jobSkills.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobSkills.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = skills::create([
            'job_id'=>$request->job_id,
            'skill_id'=>$request->skill_id,
            'status'=>$request->status
        ]);
        if ($data){
            return redirect()->route('jobSkills.index');
        }else{
            return redirect()->back()->with('error','something went wrong');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
