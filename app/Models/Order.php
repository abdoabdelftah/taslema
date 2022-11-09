<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Orderitem;
use App\Models\Item;

class Order extends Model
{
    /**
     * @var array
     */
    protected $table = "orders";
    protected $fillable = ['location', 'user_id'];
    public $timestamps = false;

    public function ousers(){
        return $this -> belongsTo('App\Models\User','user_id','id');
    }

    public function oitems()
    {

        return $this->belongsToMany('App\Models\Item', 'item_order', 'order_id', 'item_id');


       // return $this->belongsToMany('App\Models\Item')->using('App\Models\Orderitem');
    }

}
