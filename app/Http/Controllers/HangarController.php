<?php

namespace App\Http\Controllers;

use App\Models\Hangars;
use Illuminate\Http\Request;

class HangarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hangars = Hangars::all();

        return view(
            'hangars.hangar_index',
            [
                'hangars' => $hangars,
            ]
        );
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
     * @param  \App\Models\Hangars  $hangars
     * @return \Illuminate\Http\Response
     */
    public function show(Hangars $hangars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hangars  $hangars
     * @return \Illuminate\Http\Response
     */
    public function edit(Hangars $hangars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hangars  $hangars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hangars $hangars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hangars  $hangars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hangars $hangars)
    {
        //
    }
}
