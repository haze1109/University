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
                'order_id' => 1,
                'time_placed' => '2023-02-27 11:02:03',
                'status' => 'waiting',
                'student_id' => 1,
            ),
            1 => 
            array (
                'order_id' => 2,
                'time_placed' => '2023-03-03 15:59:12',
                'status' => 'preparing',
                'student_id' => 1,
            ),
            2 => 
            array (
                'order_id' => 3,
                'time_placed' => '2023-03-03 16:30:09',
                'status' => 'waiting',
                'student_id' => 1,
            ),
            3 => 
            array (
                'order_id' => 4,
                'time_placed' => '2023-03-06 09:32:51',
                'status' => 'approved',
                'student_id' => 1,
            ),
            4 => 
            array (
                'order_id' => 5,
                'time_placed' => '2023-03-07 17:35:01',
                'status' => 'approved',
                'student_id' => 6,
            ),
            5 => 
            array (
                'order_id' => 6,
                'time_placed' => '2023-03-08 10:18:48',
                'status' => 'cancelled',
                'student_id' => 5,
            ),
            6 => 
            array (
                'order_id' => 7,
                'time_placed' => '2023-03-08 11:09:32',
                'status' => 'cancelled',
                'student_id' => 5,
            ),
            7 => 
            array (
                'order_id' => 8,
                'time_placed' => '2023-03-08 11:20:08',
                'status' => 'cancelled',
                'student_id' => 5,
            ),
            8 => 
            array (
                'order_id' => 9,
                'time_placed' => '2023-03-08 11:37:56',
                'status' => 'cancelled',
                'student_id' => 5,
            ),
            9 => 
            array (
                'order_id' => 10,
                'time_placed' => '2023-03-08 13:53:22',
                'status' => 'cancelled',
                'student_id' => 5,
            ),
            10 => 
            array (
                'order_id' => 11,
                'time_placed' => '2023-03-08 13:54:22',
                'status' => 'completed',
                'student_id' => 5,
            ),
        ));
        
        
    }
}