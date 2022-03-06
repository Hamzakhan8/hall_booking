<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $table='halltypes';
    protected $fillable=[

        'name',
        'detail'
    ];
    function Halltype(){

        return $this->belongsTo(Halltype::class,'halls_type_id');


    }
}
