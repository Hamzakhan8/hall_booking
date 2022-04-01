<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halls_meta extends Model
{
    use HasFactory;

        /**
     * The table associated with model
     */
    protected $table = 'halls_meta';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'user_id', 'hall_id', 'meta_key', 'meta_value'
    ];

        /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // Cast JSON data to associative array
        'meta_value' => 'array',
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
