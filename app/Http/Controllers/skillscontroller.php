<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;

class skillscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= skills::all();
        return view('skills.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = skills::create([
            'skills_name'=>$request->skills_name,
            'status'=>$request->status
        ]);
        if ($data){
            return view('skills.index')->with('success','skill added');
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
