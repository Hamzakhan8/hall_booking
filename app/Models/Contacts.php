<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    /**
     * The table associated with model
     */
    protected $table = 'contacts';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'username', 'first_name', 'last_name', 'email', 'mobile', 'your_message',
    ];

    /**
     * The relation models
     */
    public  function user()
    {
        return  $this->hasMany(User::class);
    }
}
