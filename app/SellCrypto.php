<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellCrypto extends Model
{
    protected $fillable = [ 'amount', 'bank_name', 'account_number', 'sort_code', 'image'  ];
}

