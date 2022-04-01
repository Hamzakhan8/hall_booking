<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

            /**
     * The table associated with model
     */
    protected $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'hall_id', 'booking_date', 'checkin_date', 'checkout_date',
    ];

    /**
     * The relationship models
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
