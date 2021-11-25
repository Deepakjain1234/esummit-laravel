<?php

namespace App\Http\Controllers;

use App\Models\BWorkshop;

use App\Http\Requests\StoreBWorkshopRequest;
use App\Http\Requests\UpdateBWorkshopRequest;
use Illuminate\Http\Request;

class BWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return BWorkshop::all();
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
     * @param  \App\Http\Requests\StoreBWorkshopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BWorkshop::create($request->all());
        return "Form Submitted Successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BWorkshop  $bWorkshop
     * @return \Illuminate\Http\Response
     */
    public function show(BWorkshop $bWorkshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BWorkshop  $bWorkshop
     * @return \Illuminate\Http\Response
     */
    public function edit(BWorkshop $bWorkshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBWorkshopRequest  $request
     * @param  \App\Models\BWorkshop  $bWorkshop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBWorkshopRequest $request, BWorkshop $bWorkshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BWorkshop  $bWorkshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(BWorkshop $bWorkshop)
    {
        //
    }
}
