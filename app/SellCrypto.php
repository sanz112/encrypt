<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class SellCrypto extends Model
{
    protected $fillable = [ 'amount', 'bank_name', 'account_number', 'sort_code', 'image_path', 'user_id'  ];

    public function sellCryptos(){
        return $this->belongsTo(User::class);
     }
}

