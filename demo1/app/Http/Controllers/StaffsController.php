<?php

namespace App\Http\Controllers;

use App\Models\Staffs;
use App\Http\Requests\StoreStaffsRequest;
use App\Http\Requests\UpdateStaffsRequest;
use Illuminate\Support\Facades\Redirect;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tao doi tuong cua model
        $staffs = new Staffs();
        //Nhan du lieu tu model gui ve
        $staff = $staffs->index();
        return view('staffs.index',[
            'staffs' => $staff
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffsRequest $request)
    {
        $staffs = new Staffs();
        $staffs->name = $request->name;
        $staffs->date_of_birth = $request->date_of_birth;
        $staffs->gender = $request->gender;
        $staffs->address = $request->address;
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->password = $request->password;
        $staffs->store($staffs);
        return Redirect::route('staffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function show(Staffs $staffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffs $staffs)
    {
        return view('staffs.edit', [
            'staffs' => $staffs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffsRequest  $request
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffsRequest $request, Staffs $staffs)
    {
        $staffs->name = $request->name;
        $staffs->date_of_birth = $request->date_of_birth;
        $staffs->gender = $request->gender;
        $staffs->address = $request->address;
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->password = $request->password;
        $staffs->edit($staffs);
        return Redirect::route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffs $staffs)
    {
        $staffs->destroyer($staffs);
        return Redirect::route('staffs.index');
    }
}
