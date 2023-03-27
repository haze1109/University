<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculties')->delete();
        
        \DB::table('faculties')->insert(array (
            0 => 
            array (
                'faculty_id' => 1,
                'first_name' => 'Cholo',
                'last_name' => 'Hardware',
                'birthdate' => '2005-12-28',
                'gender' => 'male',
                'mobile_number' => '0986239182',
                'email_address' => 'cholo@gmail.com',
                'date_entered' => '2023-02-09',
                'position' => 'Professor 4',
                'department' => 'english',
            ),
            1 => 
            array (
                'faculty_id' => 2,
                'first_name' => 'Rico',
                'last_name' => 'Tresvalles',
                'birthdate' => '1999-10-02',
                'gender' => 'male',
                'mobile_number' => '0988989767',
                'email_address' => 'rico@gmail.com',
                'date_entered' => '2022-02-04',
                'position' => 'Assistant Professor 1',
                'department' => 'filipino',
            ),
            2 => 
            array (
                'faculty_id' => 3,
                'first_name' => 'Adrian',
                'last_name' => 'Desquitado',
                'birthdate' => '2023-02-01',
                'gender' => 'male',
                'mobile_number' => '09645893132',
                'email_address' => 'adrian@gmail.com',
                'date_entered' => '2023-03-01',
                'position' => 'Professor 6',
                'department' => 'social_science',
            ),
        ));
        
        
    }
}