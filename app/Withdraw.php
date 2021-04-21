<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Withdraw extends Model
{
    // public $table = "withdraws";

    protected $fillable = [ 'amount', 'bank_name', 'account_number', 'sort_code', 'user_id' ];

    public function withdrawCoins(){
        return $this->belongsTo(User::class);
     }
}
