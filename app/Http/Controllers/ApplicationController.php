<?php

namespace App\Http\Controllers;

use App\Models\applications;
use App\Models\skills;
use Illuminate\Http\Request;

class applicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Applications::all();
        return view('Applications.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = skills::create([
            'users_id'=>$request->users_id,
            'jobs_id'=>$request->jobs_id
        ]);
        if ($data){
            return redirect()->route('Applications.index');
//            return view('Applications.index')->with('success','Applications added');
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
