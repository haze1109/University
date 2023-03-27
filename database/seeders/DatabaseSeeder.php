<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClassesTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(FacultiesEducTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrdersProductsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(StudentsClassesTableSeeder::class);
        $this->call(StudentsPhotosTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
