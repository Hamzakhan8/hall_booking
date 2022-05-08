<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallCategory extends Model
{
    use HasFactory;

    /**
     * The table associated with model
     */
    protected $table ='halls_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category',
    ];

    public function user(){
        $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hall()
    {
        return $this->hasMany(Hall::class);
    }
}
