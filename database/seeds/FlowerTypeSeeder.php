<?php

use Illuminate\Database\Seeder;
use App\FlowerType;

class FlowerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flower_types = [
            [
                'type_name' => 'Rose'
            ],
            [
                'type_name' => 'Lily'
            ]
        ];

        FlowerType::insert($flower_types);
    }
}
