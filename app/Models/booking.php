<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    function customer(){

            return $this->belongsto(Customer::class , 'customer_id');
    }
    function hall(){

        return $this->belongsto(Hall::class ,'hall_id');
}


}
