<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['session_id', 'product_id', 'count'];
    protected $guarded = ['id','created_at','updated_at'];

    public function discs()
    {
        return $this->belongsTo(Discs::class,'product_id','id');
    }
}
