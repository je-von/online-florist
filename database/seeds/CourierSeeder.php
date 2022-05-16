<?php

use Illuminate\Database\Seeder;
use App\Courier;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $couriers = [
            [
                'name' => 'JNE',
                'shipping_cost' => 9000
            ],
            [
                'name' => 'Wahana',
                'shipping_cost' => 5000
            ],
            [
                'name' => 'J&T',
                'shipping_cost' => 10000
            ]
        ];

        Courier::insert($couriers);
    }
}
