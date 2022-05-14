<?php

namespace App\Models;

use App\Models\User;
use App\Models\HallCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hall extends Model
{
    use HasFactory;

    /**
     * The table associated with model
     */
    protected $table='halls';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable=[
        'user_id', 'halls_category_id', 'title', 'images', 'description', 'location'
    ];

    /**
     * The relation models
     */
    public function hallCategory()
    {
        return $this->belongsTo(HallCategory::class, 'halls_category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }

    public function halls_meta()
    {
        return $this->hasMany(Halls_meta::class);
    }

    // public function reviews()
    // {
    //     return $this->hasMany(Reviews::class);
    // }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
