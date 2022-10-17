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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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

        Product::create($request->all());

        return redirect()->route('index')
            ->with('success','Trooper aangemaakt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trooper  $trooper
     * @return \Illuminate\Http\Response
     */
    public function show(trooper $trooper)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trooper  $trooper
     * @return \Illuminate\Http\Response
     */
    public function edit(trooper $trooper)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trooper  $trooper
     * @return \Illuminate\Http\Response
     */
    public function destroy(trooper $trooper)
    {
        //
    }
}
