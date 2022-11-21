<?php

namespace App\Http\Controllers;

use App\Models\classrooms;
use App\Models\students;
use App\Http\Requests\StorestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use Illuminate\Support\Facades\Redirect;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = new students();
        $student = $students->index();
        return view('students.index', [
            'students' => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = new classrooms();
        $classroom = $classrooms->index();
        return view('students.create', [
            'classrooms' => $classroom
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudentsRequest $request)
    {
        $students = new students();
        $students->name = $request->name;
        $students->date_of_birth = $request->date_of_birth;
        $students->address = $request->address;
        $students->phone = $request->phone;
        $students->email = $request->email;
        $students->password = $request->password;
        $students->id_classroom = $request->classrooms;
        $students->store();
        return Redirect::route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {
        $classrooms = new classrooms();
        $classroom = $classrooms->index();
        return view('students.edit', [
            'classrooms' => $classroom,
            'students' => $students
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentsRequest  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudentsRequest $request, students $students)
    {
        $students->name = $request->name;
        $students->date_of_birth = $request->date_of_birth;
        $students->address = $request->address;
        $students->phone = $request->phone;
        $students->email = $request->email;
        $students->password = $request->password;
        $students->id_classroom = $request->classrooms;
        $students->edit();
        return Redirect::route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students)
    {
        $students->destroyer();
        return Redirect::route('students.index');
    }
}
