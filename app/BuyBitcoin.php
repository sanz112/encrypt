<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class BuyBitcoin extends Model
{
    protected $fillable = [ 'amount', 'wallet_name', 'hash_key', 'user_id'  ];

    // protected $guarded = [];


    public function buyBitcoins(){
       return $this->belongsTo(User::class);
    }
}
