<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

        /**
     * The table associated with model
     */
    protected $table = 'replies';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'user_id', 'username', 'comment_id', 'reply'
    ];

    /**
     * The relationship model
     */
    public function user()
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comment()
    {
        $this->belongsTo(Comments::class, 'comment_id', 'id');
    }

    public function re_reply()
    {
        return $this->hasMany(ReReply::class);
    }
}
