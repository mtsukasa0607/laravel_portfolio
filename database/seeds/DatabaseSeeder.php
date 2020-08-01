<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CustomersTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
    }
}
