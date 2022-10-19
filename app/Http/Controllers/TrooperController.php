<?php

namespace App\Http\Controllers;

use App\Models\trooper;
use Illuminate\Http\Request;

class TrooperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troopers = trooper::latest()->paginate(5);

        return view('troopers.index',compact('troopers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('troopers.create');
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
            'name' => 'required',
            'faction' => 'required',
            'era' => 'required',
            'rank' => 'required',
            'legion' => 'required',
        ]);

        trooper::create($request->all());

        return redirect()->route('troopers.index')
            ->with('success','Trooper created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trooper  $trooper
     * @return \Illuminate\Http\Response
     */
    public function show(trooper $trooper)
    {
        return view('troopers.show',compact('trooper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trooper  $trooper
     * @return \Illuminate\Http\Response
     */
    public function edit(trooper $trooper)
    {
        return view('troopers.edit',compact('trooper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trooper  $trooper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trooper $trooper)
    {
        $request->validate([
            'name' => 'required',
            'faction' => 'required',
            'era' => 'required',
            'rank' => 'required',
            'legion' => 'required',
        ]);

        $trooper->update($request->all());

        return redirect()->route('troopers.index')
            ->with('success','Trooper updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trooper  $trooper
     * @return \Illuminate\Http\Response
     */
    public function destroy(trooper $trooper)
    {
        $trooper->delete();

        return redirect()->route('troopers.index')
            ->with('success','Trooper deleted');
    }
}
