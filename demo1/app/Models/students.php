<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class students extends Model
{
    use HasFactory;
    //Lay du lieu tu db
    public function index(){
        $products = DB::table('products')
            ->get();
        return $products;
    }
}
