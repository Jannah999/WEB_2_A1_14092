<?php

namespace App\Http\Controllers;

use App\jannah_model_14092;
use Illuminate\Http\Request;

class jannah_controller_14092 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jannah_model_14092::all();
		return view('employee',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jannah_model_14092  $jannah_model_14092
     * @return \Illuminate\Http\Response
     */
    public function show(jannah_model_14092 $jannah_model_14092)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jannah_model_14092  $jannah_model_14092
     * @return \Illuminate\Http\Response
     */
    public function edit(jannah_model_14092 $jannah_model_14092)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jannah_model_14092  $jannah_model_14092
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jannah_model_14092 $jannah_model_14092)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jannah_model_14092  $jannah_model_14092
     * @return \Illuminate\Http\Response
     */
    public function destroy(jannah_model_14092 $jannah_model_14092)
    {
        //
    }
}
