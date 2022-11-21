<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class classrooms extends Model
{
    use HasFactory;
    public function index(){
        $classrooms = DB::table('classrooms')
            ->get();
        return $classrooms;
    }
    public function store(){
        DB::table('classrooms')
            ->insert([
                'name' => $this->name
            ]);
    }
    public function edit(){
        DB::table('classrooms')
            ->where('id', '=', $this->id)
            ->update([
                'name' => $this->name
            ]);
    }
    public function destroyer(){
        DB::table('classrooms')
            ->where('id', $this->id)
            ->delete();
    }
}
