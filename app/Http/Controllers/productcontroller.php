<?php

namespace App\Http\Controllers;

use App\Models\applications;
use App\Models\Job;
use App\Models\Skills;
use Illuminate\Console\Application;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Job::all();
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = Job::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'company'=>$request->company,
            'location'=>$request->location
        ]);
        if ($data){
            return redirect()->route('product.index');
//            return view('product.index')->with('success','product added');
        }else{
            return redirect()->back()->with('error','something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $job=Job::find($id);
        return view('product.edit', compact('job'));
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
    public function update(Request $request)
    {
        $job=Job::find($request->id);
        $job->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'company'=>$request->company,
            'location'=>$request->location
        ]);
        return redirect()->route('product.index')->with('success','job added success fully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $product= Job::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'job deleted successfully.');

    }
}
