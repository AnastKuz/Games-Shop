<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discs extends Model
{
    protected $fillable = ['name', 'type', 'image','description','price'];
    protected $guarded = ['id','created_at','updated_at'];

    public function order()
    {
        return $this->hasMany(Order::class,'product_id','id');
    }

}
