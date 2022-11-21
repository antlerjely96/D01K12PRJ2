<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class students extends Model
{
    use HasFactory;
    public function index(){
        $students = DB::table('classrooms')
            ->join('students', 'students.id_classroom' , '=', 'classrooms.id')
            ->select('students.*', DB::raw('classrooms.name as classrooms_name'))
            ->get();
        return $students;
    }
    public function store(){
        DB::table('students')
            ->insert([
                'name' => $this->name,
                'date_of_birth' => $this->date_of_birth,
                'address' => $this->address,
                'phone' => $this->phone,
                'email' => $this->email,
                'password' => $this->password,
                'id_classroom' => $this->id_classroom
            ]);
    }
    public function edit(){
        DB::table('students')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'date_of_birth' => $this->date_of_birth,
                'address' => $this->address,
                'phone' => $this->phone,
                'email' => $this->email,
                'password' => $this->password,
                'id_classroom' => $this->id_classroom
            ]);
    }
    public function destroyer(){
        DB::table('students')
            ->where('id', $this->id)
            ->delete();
    }
}
