<?php

use Illuminate\Database\Seeder;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_details')->insert(
            [
                'cart_id' => '1',
                'flower_id' => '3',
                'quantity' => '4'
            ]
        );
        DB::table('cart_details')->insert(
            [
                'cart_id' => '1',
                'flower_id' => '14',
                'quantity' => '1'
            ]
        );
    }
}
