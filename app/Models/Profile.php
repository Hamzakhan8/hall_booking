<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'avatar', 'contact', 'address', 'description',
    ];

    /**
     * The profile has a one to one relationship with user's model
     * @return hasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
