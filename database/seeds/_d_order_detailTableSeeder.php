<?php

use App\_d_order_detail;
use Illuminate\Database\Seeder;

class _d_order_detailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        _d_order_detail::truncate();
        factory(_d_order_detail::class, 20)->create();
    }
}
