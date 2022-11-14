<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staffs extends Model
{
    use HasFactory;
    public function index(){
        $staffs = DB::table('staffs')
            ->get();
        return $staffs;
    }
    public function store($staffs){
        DB::table('staffs')
            ->insert([
                'name' => $staffs->name,
                'date_of_birth' => $staffs->date_of_birth,
                'gender' => $staffs->gender,
                'address' => $staffs->address,
                'phone' => $staffs->phone,
                'email' => $staffs->email,
                'password' => $staffs->password
            ]);
    }
    public function edit($staffs){
        DB::table('staffs')
            ->where('id', $staffs->id)
            ->update([
                'name' => $staffs->name,
                'date_of_birth' => $staffs->date_of_birth,
                'gender' => $staffs->gender,
                'address' => $staffs->address,
                'phone' => $staffs->phone,
                'email' => $staffs->email,
                'password' => $staffs->password
            ]);
    }
    public function destroyer($staffs){
        DB::table('staffs')
            ->delete($staffs->id);
    }
}
