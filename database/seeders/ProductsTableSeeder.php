<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'name' => 'Coca-cola',
                'price' => 25.0,
                'stock' => 100,
            ),
            1 => 
            array (
                'product_id' => 15,
                'name' => 'Cheeseburger',
                'price' => 65.0,
                'stock' => 100,
            ),
        ));
        
        
    }
}