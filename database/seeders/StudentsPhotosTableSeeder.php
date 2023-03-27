<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students_photos')->delete();
        
        \DB::table('students_photos')->insert(array (
            0 => 
            array (
                'student_id' => 130,
                'image' => '202303020857000000jiggs.jpg',
            ),
            1 => 
            array (
                'student_id' => 791,
                'image' => '202303020904000000beyonce.png',
            ),
            2 => 
            array (
                'student_id' => 1168,
                'image' => '202303020922000000henry.jpg',
            ),
        ));
        
        
    }
}