<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [ 'amount', 'bank_name', 'account_number', 'sort_code' ];
}
