<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';
    protected $fillable = ['name', 'date_of_birth', 'gender', 'address', 'phone', 'email', 'password'];
//    protected $guarded = ['create', 'update'];
    public $timestamps = false;
}
