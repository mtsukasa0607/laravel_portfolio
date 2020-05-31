<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 検証コード

        // テストデータ
        $param = [
            'name' => 'taro',
            'mail' => 'taro@gmail.com',
            'age' => 20,
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'jiro',
            'mail' => 'jiro@gmail.com',
            'age' => 22,
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'yutaro',
            'mail' => 'yutaro@gmail.com',
            'age' => 24,
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'kotaro',
            'mail' => 'kotaro@gmail.com',
            'age' => 26,
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'momotaro',
            'mail' => 'momotaro@gmail.com',
            'age' => 28,
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'rintaro',
            'mail' => 'rintaro@gmail.com',
            'age' => 30,
        ];
        DB::table('items')->insert($param);
    }
}
