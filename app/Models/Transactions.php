<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    /**
     * The table associated with model
     */
    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_name', 'transaction_id', 'amount', 'date',
        'card_cvc', 'exp_month', 'exp_year', 'card_last_4'
    ];

    /**
     * The relationship models
     */
    public function user()
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }
}
