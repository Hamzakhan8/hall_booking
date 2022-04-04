<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsReply extends Model
{
    use HasFactory;

        /**
     * The table associated with model
     */
    protected $table = 'contacts_replies';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'contacts_id', 'reply',
    ];

    /**
     * The relation models
     */
    public  function user()
    {
        return  $this->belongsTo(User::class, 'user_id', 'id');
    }
}
