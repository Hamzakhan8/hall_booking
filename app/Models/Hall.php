<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $table='halls';
    protected $fillable=[

        'title',
        'halls_type_id'
    ];
    function Halltype(){

        return $this->belongsTo(Halltype::class,'hall_types_id');


    }
}
