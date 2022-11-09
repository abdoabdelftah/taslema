<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'item 1',
                'price' => '10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'item 2',
                'price' => '20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'item 3',
                'price' => '5',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'item 4',
                'price' => '2',
            ),
        ));
        
        
    }
}