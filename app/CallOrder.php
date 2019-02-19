<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallOrder extends Model
{
    protected $fillable = ['user_name','phone_number'];
}
