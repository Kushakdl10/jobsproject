<?php

namespace App\Http\Controllers;

use App\Models\applications;
use App\Models\Job;
use App\Models\skills;
use App\Models\userSkills;
use Illuminate\Http\Request;

class userSkillscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= UserSkills::with('User','Skill')->get();
        return view('UserSkills.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Job::all()->pluck('title','id');
        $skills=Skills::all()->pluck('skills_name','id');
        return view('JobSkills.create',compact('user','skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = UserSkills::create([
            'skill_id'=>$request->skill_id,
            'users_id'=>$request->users_id,
            'status'=>$request->status
        ]);
        if ($data){
            return redirect()->route('UserSkills.index');
//            return view('Skills.index')->with('success','skill added');
        }else{
            return redirect()->back()->with('error','something went wrong');
        }

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $userSkills=UserSkills::find($id);

        return view('UserSkills.edit', compact('userSkills'));

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
        $UserSkills=UserSkills::find($request->id);
        $UserSkills->update([
            'skill_id'=>$request->skill_id,
            'users_id'=>$request->users_id

        ]);
        return redirect()->route('UserSkills.index')->with('success','UserSkills added success fully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userSkills= UserSkills::findOrFail($id);
        $userSkills->delete();

        return redirect()->route('UserSkills.index')->with('success', 'UserSkills deleted successfully.');
    }
}
