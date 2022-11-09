<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemOrderTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_order')->delete();
        
        \DB::table('item_order')->insert(array (
            0 => 
            array (
                'id' => 3,
                'order_id' => 2,
                'item_id' => 1,
            ),
            1 => 
            array (
                'id' => 4,
                'order_id' => 2,
                'item_id' => 2,
            ),
            2 => 
            array (
                'id' => 5,
                'order_id' => 3,
                'item_id' => 1,
            ),
            3 => 
            array (
                'id' => 6,
                'order_id' => 3,
                'item_id' => 2,
            ),
        ));
        
        
    }
}