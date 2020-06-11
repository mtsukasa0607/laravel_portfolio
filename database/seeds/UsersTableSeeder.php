<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'email' => 'taro@gmail.com',
            'password' => bcrypt('87654321'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'jiro',
            'email' => 'jiro@gmail.com',
            'password' => bcrypt('87654321'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);
        
        $param = [
            'name' => 'yutaro',
            'email' => 'yutaro@gmail.com',
            'password' => bcrypt('87654321'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'kotaro',
            'email' => 'kotaro@gmail.com',
            'password' => bcrypt('87654321'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'momotaro',
            'email' => 'momotaro@gmail.com',
            'password' => bcrypt('87654321'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'rintaro',
            'email' => 'rintaro@gmail.com',
            'password' => bcrypt('87654321'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);
    }
}
