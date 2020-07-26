<?php

use Illuminate\Database\Seeder;

class BookdetailsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Bookdetail::class, 50)->create();
    }
}
