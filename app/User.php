<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\BuyBitcoin;
use App\SellCrypto;
use App\Withdraw;
use App\Plan;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'username', 'country', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $primaryKey = 'id';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function withdrawCoins(){
        return $this->hasMany(Withdraw::class);
    }

    public function buyBitcoins(){
        return $this->hasMany(BuyBitcoin::class);
    }

    public function sellCryptos(){
        return $this->hasMany(SellCrypto::class);
    }

    public function plans(){
        return $this->hasMany(Plan::class);
    }
    // public function users() {
    //     return $this->hasMany(Plan::class);
    // }

}
