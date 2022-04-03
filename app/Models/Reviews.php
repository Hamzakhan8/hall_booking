<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    /**
     * The table associated with model
     */
    protected $table = 'reviews';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'user_id', 'username', 'hall_id', 'hall_name', 'reviews'
    ];

    /**
     * The relationship model
     */
    public function user()
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hall()
    {
        $this->belongsTo(Hall::class, 'hall_id', 'id');
    }
}
