<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $table = 'buyers';

    protected $fillable = ['email', 'name', 'phone', 'address', 'date', 'time', 'wishes'];
    protected $guarded = ['id','created_at','updated_at'];
}
