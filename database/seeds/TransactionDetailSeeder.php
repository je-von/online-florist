<?php

use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert(
            [
                'transaction_id' => 1,
                'flower_id' => 3,
                'quantity' => 3
            ]
        );
        DB::table('transaction_details')->insert(
            [
                'transaction_id' => 1,
                'flower_id' => 5,
                'quantity' => 2
            ]
        );

        DB::table('transaction_details')->insert(
            [
                'transaction_id' => 2,
                'flower_id' => 11,
                'quantity' => 23
            ]
        );
        DB::table('transaction_details')->insert(
            [
                'transaction_id' => 2,
                'flower_id' => 6,
                'quantity' => 7
            ]
        );
        DB::table('transaction_details')->insert(
            [
                'transaction_id' => 2,
                'flower_id' => 1,
                'quantity' => 1
            ]
        );
    }
}
