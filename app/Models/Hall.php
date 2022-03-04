<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    function Halltype(){

        return $this->belongsTo(Halltype::class,'halls_type_id');


    }
}
