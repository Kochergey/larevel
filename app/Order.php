<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable=['name', 'body', 'email', 'phone', 'status', 'user_id'];
}
