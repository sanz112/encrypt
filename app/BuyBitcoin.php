<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyBitcoin extends Model
{
    protected $fillable = [ 'amount', 'wallet_name', 'hash_key'  ];
}
