<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Skills;
use App\Http\Requests\SkillsRequest;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Skills::all();
        return view('Skills.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Use the form request class for validation
    {
        $data = Skills::create([
            'skills_name' => $request->skills_name,
            'status' => $request->status
        ]);

        if ($data) {
            return redirect()->route('Skills.index')->with('success', 'Skill added successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    // Other methods (show, edit, update, destroy) can remain as they are, or you can implement them if needed

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $skills=Skills::find($id);
        return view('Skills.edit', compact('skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $skills=Skills::find($request->id);
        $skills->update([
            'skills_name' => $request->skills_name,
            'status' => $request->status
        ]);
        return redirect()->route('Skills.index')->with('success','Skills added success fully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills= Skills::findOrFail($id);
        $skills->delete();

        return redirect()->route('Skills.index')->with('success', 'job deleted successfully.');
    }
}
