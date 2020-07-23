<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Customer::class, 2)
            ->create()
            ->each(function ($customer) {
                factory(\App\Report::class, 2)
                    ->make()
                    ->each(function ($report) use ($customer) {
                        $customer->reports()->save($report);
                    });
        });
    }
}
