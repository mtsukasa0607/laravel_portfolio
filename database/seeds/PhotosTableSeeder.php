<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'file_name' => '1591349757.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/images/1591349757.jpeg',
            'title' => 'sample data',
            'content' => 'This is test data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('photos')->insert($param);

        $param = [
            'user_id' => 3,
            'file_name' => '1591349771.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/images/1591349771.jpeg',
            'title' => 'sample data',
            'content' => 'This is test data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('photos')->insert($param);

        $param = [
            'user_id' => 1,
            'file_name' => '1591349782.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/images/1591349782.jpeg',
            'title' => 'sample data',
            'content' => 'This is test data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('photos')->insert($param);
        
        $param = [
            'user_id' => 3,
            'file_name' => '1591355215.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/images/1591355215.jpeg',
            'title' => 'sample data',
            'content' => 'This is test data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('photos')->insert($param);

        $param = [
            'user_id' => 1,
            'file_name' => '1591429942.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/images/1591429942.jpeg',
            'title' => 'sample data',
            'content' => 'This is test data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('photos')->insert($param);
        
        $param = [
            'user_id' => 3,
            'file_name' => '1591430134.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/images/1591430134.jpeg',
            'title' => 'sample data',
            'content' => 'This is test data',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('photos')->insert($param);
    }
}
