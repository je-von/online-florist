<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FlowerTypeSeeder::class);
        $this->call(CourierSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FlowerSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CartDetailSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(TransactionDetailSeeder::class);
    }
}
