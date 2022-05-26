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

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        'user_id', 'username', 'comments_id', 'reply', 'hall_id', 'hall_name'
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
        $this->belongsTo(Comments::class, 'comments_id', 'id');
    }

    public function hall()
    {
        $this->belongsTo(hall::class, 'hall_id', 'id');
    }

    public function re_reply()
    {
        return $this->hasMany(ReReply::class);
    }
}
