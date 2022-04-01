<?php

namespace App\Models;

use App\Models\User;
use App\Models\HallCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hall extends Model
{
    use HasFactory;

    protected $table='halls';

    protected $fillable=[

        'user_id',
        'halls_category_id',
        'title',
        'images',
        'description'
    ];
    function hallcategory(){


        return $this->belongsTo(HallCategory::class,'halls_category_id','id');
    }
    function user(){

        return $this->belongsTo(User::class,'user_id','id');


    }
}
