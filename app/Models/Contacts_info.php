<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts_info extends Model
{
    use HasFactory;

        /**
     * The table associated with model
     */
    protected $table = 'contacts_infos';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','call_number', 'email', 'address'
    ];

}
