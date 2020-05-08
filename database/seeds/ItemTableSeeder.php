<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();
        factory(Item::class, 20)->create();
    }
    // {
    //     Item::truncate();
    //     Item::create(['title' => 'title1', 'price' => '551']);
    // }

}
