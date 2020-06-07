<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
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
            'mail' => 'taro@gmail.com',
            'age' => 20,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'jiro',
            'mail' => 'jiro@gmail.com',
            'age' => 22,
        ];
        DB::table('people')->insert($param);
        
        $param = [
            'name' => 'yutaro',
            'mail' => 'yutaro@gmail.com',
            'age' => 24,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'kotaro',
            'mail' => 'kotaro@gmail.com',
            'age' => 26,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'momotaro',
            'mail' => 'momotaro@gmail.com',
            'age' => 28,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'rintaro',
            'mail' => 'rintaro@gmail.com',
            'age' => 30,
        ];
        DB::table('people')->insert($param);
    }
}
