<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;

class userSkillscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= userskills::all();
        return view('userSkills.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('userSkills.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = userskills::create([
            'skill_id'=>$request->skill_id,
            'users_id'=>$request->users_id,
            'status'=>$request->status
        ]);
        if ($data){
            return redirect()->route('userSkills.index');
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
