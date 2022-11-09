<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Orderitem extends Model
{
    /**
     * @var array
     */
    protected $table = "item_order";

    protected $fillable = ['order_id', 'item_id'];
    public $timestamps = false;



}
