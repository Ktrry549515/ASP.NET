<?php

use App\_d_member;
use Illuminate\Database\Seeder;

class _d_memberTableSeedere extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        _d_member::truncate();
        factory(_d_member::class, 20)->create();
    }
}
