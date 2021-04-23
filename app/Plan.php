<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
// use App\Plan;

class Plan extends Model
{
    protected $fillable = [ 'plan_name', 'user_id', 'sort_code'  ];

    public function plans(){
        return $this->belongsTo(User::class);
     }

     public function users() {
        return $this->belongsTo(User::class);
    }

}
