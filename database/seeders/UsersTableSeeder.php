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
                'user_id' => 2,
                'first_name' => 'Patricia',
                'last_name' => 'Hamilton',
                'email' => 'practice@gmail.com',
                'password' => '$2y$10$6J8GuEvAnc/tRbt9cNQwuOa91CQiQFA3uRrcv37l17P7SKqDA23AG',
                'role' => 'user',
                'student_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 4,
                'first_name' => 'Daiben',
                'last_name' => 'Sanchez',
                'email' => 'daibenangelosanchez@gmail.com',
                'password' => '$2y$10$NNt7G.hUnJhXzi/1WzoLX.sSE6Ev3zTCkhETdAsr2sEuKEkHMT8xm',
                'role' => 'user',
                'student_id' => 2,
            ),
            2 => 
            array (
                'user_id' => 5,
                'first_name' => 'Manny',
                'last_name' => 'Pacquiao',
                'email' => '13e1221@gmail.com',
                'password' => '$2y$10$TYRGz3dn6zw285Gtf6hODuyGV.2TVLXIboKeZFrqll.cwGyVF8rii',
                'role' => 'user',
                'student_id' => 3,
            ),
            3 => 
            array (
                'user_id' => 8,
                'first_name' => 'Anthony',
                'last_name' => 'Pena',
                'email' => 'mozell83@yahoo.com',
                'password' => '$2y$10$HfL5dIpxTnalzzD3F.DodebaNTMWdKso4YlMi1Txb7Jyr84Q99WTe',
                'role' => 'user',
                'student_id' => 5,
            ),
            4 => 
            array (
                'user_id' => 9,
                'first_name' => 'Andrea',
                'last_name' => 'Johnson',
                'email' => 'renner.christopher@balistreri.com',
                'password' => '$2y$10$RhcDB13R0m.L/lmgmsb/ROoUqxxnzbcjKISfDusOiPkQceHcsVUfK',
                'role' => 'user',
                'student_id' => 6,
            ),
            5 => 
            array (
                'user_id' => 10,
                'first_name' => 'Daiben',
                'last_name' => 'Sanchez',
                'email' => 'daibensanchez@gmail.com',
                'password' => '$2y$10$mvMMBpKrwYyDF5p.F5KX3e4QS.4IYSSEX.nbb4eN030c/ssSsb/Zy',
                'role' => 'admin',
                'student_id' => 0,
            ),
            6 => 
            array (
                'user_id' => 11,
                'first_name' => 'Colin',
                'last_name' => 'Coolidge',
                'email' => 'col@gmail.com',
                'password' => '$2y$10$SVHKqJJ3LJSzLj4lhhDjEuNhdO99U9fS/SBM5ZSsztKCwWIvwBq12',
                'role' => 'admin',
                'student_id' => 0,
            ),
            7 => 
            array (
                'user_id' => 12,
                'first_name' => 'Carl James',
                'last_name' => 'Berdos',
                'email' => 'c@gmail.com',
                'password' => '$2y$10$.kfGK/oxznxTrrPo8nk/lOQLc7b/P4cf54zRSKD/cwXCYZCWMBd2i',
                'role' => 'user',
                'student_id' => 7,
            ),
            8 => 
            array (
                'user_id' => 13,
                'first_name' => 'Clyde',
                'last_name' => 'Abelanio',
                'email' => 'ca@gmail.com',
                'password' => '$2y$10$Ii9uUO24QI8.HbGL9iKSiute0tPeIoxNju9DylQRNihIWRbWAtppS',
                'role' => 'user',
                'student_id' => 8,
            ),
        ));
        
        
    }
}