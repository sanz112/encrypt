<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Plan extends Model
{
    protected $fillable = [ 'plan_name', 'user_id', 'sort_code'  ];

    public function plans(){
        return $this->belongsTo(User::class);
     }

}
