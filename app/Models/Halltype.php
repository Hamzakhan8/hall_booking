<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class halltype extends Model
{
    use HasFactory;

    protected $table='halltypes';
    protected $fillable=[

        'name',
        'detail'
    ];

         function halltypeimage(){

            return $this->hasMany(HallTypeimage::class,'hall_type_id');
         }
}
