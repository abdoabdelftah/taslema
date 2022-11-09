<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    /**
     * @var array
     */
    protected $table = "items";
    protected $fillable = ['name', 'price'];
    public $timestamps = false;


    public function iorders(){

        return $this->belongsToMany('App\Models\Order', 'item_order', 'item_id', 'order_id');

    }

}
