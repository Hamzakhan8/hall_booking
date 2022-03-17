<?php

namespace App\Models;
use App\Http\Controllers\admin\CustomerController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table='customers';
    protected $fillable=[


        'full_name',
        'email',
        'password',
        'mobile',

        'address',
        'photo',





    ];

    function bookings(){
        return $this->hasMany(booking::class );

    }
}
