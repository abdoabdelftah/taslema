<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'location' => 'الفولى',
                'user_id' => 2,
            ),
            1 => 
            array (
                'id' => 3,
                'location' => 'ألمني',
                'user_id' => 1,
            ),
        ));
        
        
    }
}