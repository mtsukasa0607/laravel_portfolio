<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    public function run()
    {
        $now = \Carbon\Carbon::now();
        for ($i = 1; $i <= 10; $i++)
        {
            $author = [
                'name' => '著者名' . $i,
                'kana' => 'チョシャメイ' . $i,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('authors')->insert($author);
        }
    }
}
