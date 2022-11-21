<?php

namespace App\Http\Controllers;

use App\Models\classrooms;
use App\Http\Requests\StoreclassroomsRequest;
use App\Http\Requests\UpdateclassroomsRequest;
use http\Env\Request;
use Illuminate\Support\Facades\Redirect;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = new classrooms();
        $classroom = $classrooms->index();
        return view('classrooms.index', [
            'classrooms' => $classroom
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclassroomsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclassroomsRequest $request)
    {
        $classrooms = new classrooms();
        $classrooms->name = $request->name;
        $classrooms->store($classrooms);
        return Redirect::route('classrooms.index');
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
        return view('classrooms.edit', [
            'classrooms' => $classrooms
        ]);
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
        $classrooms = new classrooms();
        $classrooms->id = $request->id;
        $classrooms->name = $request->name;
        $classrooms->edit();
        return Redirect::route('classrooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classrooms  $classrooms
     * @param  \App\Http\Requests\UpdateclassroomsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(classrooms $classrooms, UpdateclassroomsRequest $request)
    {
        $classrooms = new classrooms();

        $classrooms->id = $request->id;
//        dd($classrooms->id);
        $classrooms->destroyer($classrooms);
        return Redirect::route('classrooms.index');
    }
}
