<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert(
            [
                'transaction_date' => '2021-07-21 10:33:47',
                'user_id' => 2,
                'courier_id' => 1
            ]
        );
        DB::table('transactions')->insert(
            [
                'transaction_date' => '2021-07-21 10:47:06',
                'user_id' => 3,
                'courier_id' => 3
            ]
        );
    }
}
