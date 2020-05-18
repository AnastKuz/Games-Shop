<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $table = 'buyers';

    protected $fillable = ['game', 'quantity', 'price', 'total', 'email', 'name', 'phone', 'address', 'date', 'time', 'wishes'];
    protected $guarded = ['id','created_at','updated_at'];
}
