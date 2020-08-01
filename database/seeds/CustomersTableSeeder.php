<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
