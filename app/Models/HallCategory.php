<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallCategory extends Model
{
    use HasFactory;

    protected $table ='halls_category';

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'category',
    ];
}
