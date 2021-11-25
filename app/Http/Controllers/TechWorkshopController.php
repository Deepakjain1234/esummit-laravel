<?php

namespace App\Http\Controllers;

use App\Models\TechWorkshop;
use App\Http\Requests\StoreTechWorkshopRequest;
use App\Http\Requests\UpdateTechWorkshopRequest;
use Illuminate\Http\Request;

class TechWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TechWorkshop::all();
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
     * @param  \App\Http\Requests\StoreTechWorkshopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TechWorkshop::create($request->all());
        return "Form Submitted Successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TechWorkshop  $techWorkshop
     * @return \Illuminate\Http\Response
     */
    public function show(TechWorkshop $techWorkshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechWorkshop  $techWorkshop
     * @return \Illuminate\Http\Response
     */
    public function edit(TechWorkshop $techWorkshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechWorkshopRequest  $request
     * @param  \App\Models\TechWorkshop  $techWorkshop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechWorkshopRequest $request, TechWorkshop $techWorkshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechWorkshop  $techWorkshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechWorkshop $techWorkshop)
    {
        //
    }
}
