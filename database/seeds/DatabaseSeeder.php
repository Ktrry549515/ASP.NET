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
        // $this->call(OrderTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); //關 巨槌瑞斯
        $this->call(ItemTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1'); //開  巨槌瑞斯 誇抓 RRRRR 老爸墮起來
    }

}
