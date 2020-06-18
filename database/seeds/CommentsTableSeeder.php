<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
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
            'photo_id' => 1,
            'comment' => 'test-data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => 3,
            'photo_id' => 5,
            'comment' => 'test-data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => 3,
            'photo_id' => 7,
            'comment' => 'test-data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => 3,
            'photo_id' => 8,
            'comment' => 'test-data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('comments')->insert($param);

        $param = [
            'user_id' => 3,
            'photo_id' => 26,
            'comment' => 'test-data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('comments')->insert($param);

    }
}
