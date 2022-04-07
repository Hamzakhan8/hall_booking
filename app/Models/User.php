<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The relation models
     */
    public  function hall()
    {
        return  $this->hasMany(Hall::class);
    }

    public  function hallCategory()
    {
        return  $this->hasMany(HallCategory::class);
    }

    public function profile()
    {
        return  $this->hasOne(Profile::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function contact()
    {
        return $this->hasMany(Contacts::class);
    }

    public function contact_reply()
    {
        return $this->hasMany(ContactsReply::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function re_reply()
    {
        return $this->hasMany(ReReply::class);
    }

    public function halls_meta()
    {
        $this->hasMany(Halls_meta::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}
