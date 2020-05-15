<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['session_id', 'product_id', 'count'];
    protected $guarded = ['id','created_at','updated_at'];

    public function playstations()
    {
        return $this->belongsTo(Playstation::class,'product_id','id');
    }
}
