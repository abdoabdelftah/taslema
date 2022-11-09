<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'abdo',
                'password' => '$2y$10$WT9sT.Ynnl.YM/XBn6Um7ucQWyLvHvwebD3JEGBrulAykLyZhqkga',
                'phone_number' => '01093934554',
                'is_admin' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user2',
                'password' => '$2y$10$WT9sT.Ynnl.YM/XBn6Um7ucQWyLvHvwebD3JEGBrulAykLyZhqkg',
                'phone_number' => '0102014141241',
                'is_admin' => 0,
            ),
        ));
        
        
    }
}