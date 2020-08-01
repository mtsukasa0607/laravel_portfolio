<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'visit_date' => '2020-07-01',
            'customer_id' => 1,
            'detail' => 'sample-text',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('reports')->insert($param);

        $param = [
            'visit_date' => '2020-07-02',
            'customer_id' => 2,
            'detail' => 'sample-text',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('reports')->insert($param);
    }
}
