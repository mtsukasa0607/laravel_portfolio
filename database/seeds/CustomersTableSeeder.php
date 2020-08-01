<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'taro',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('customers')->insert($param);

        $param = [
            'name' => 'jiro',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('customers')->insert($param);
    }
}
