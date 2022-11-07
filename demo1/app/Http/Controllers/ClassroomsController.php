<?php

namespace App\Http\Controllers;

use App\Models\classrooms;
use App\Http\Requests\StoreclassroomsRequest;
use App\Http\Requests\UpdateclassroomsRequest;

class ClassroomsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclassroomsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclassroomsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function show(classrooms $classrooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function edit(classrooms $classrooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclassroomsRequest  $request
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclassroomsRequest $request, classrooms $classrooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classrooms  $classrooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(classrooms $classrooms)
    {
        //
    }
}
