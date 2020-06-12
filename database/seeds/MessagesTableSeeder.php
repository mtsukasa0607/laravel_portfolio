<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 3,
            'message' => 'test message_01',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('messages')->insert($param);

        $param = [
            'user_id' => 3,
            'message' => 'test message_02',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('messages')->insert($param);

        $param = [
            'user_id' => 3,
            'message' => 'test message_03',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('messages')->insert($param);

        $param = [
            'user_id' => 3,
            'message' => 'test message_04',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('messages')->insert($param);

        $param = [
            'user_id' => 3,
            'message' => 'test message_05',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('messages')->insert($param);
    }
}
