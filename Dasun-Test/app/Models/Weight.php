<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'weight';

    function getAllData(){
        return $table::all();
    }
}
