<?php

use App\_d_order;
use Illuminate\Database\Seeder;

class _d_orderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        _d_order::truncate();
        factory(_d_order::class, 20)->create();
    }
}
