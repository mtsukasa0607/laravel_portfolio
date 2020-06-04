<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テストデータ
        $param = [
            'file_name' => 'DIYucQvxCTsfESUS5vJWNgSRIIY4LpoJ0JKRiIMx.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/DIYucQvxCTsfESUS5vJWNgSRIIY4LpoJ0JKRiIMx.jpeg',
        ];
        DB::table('images')->insert($param);
        
        $param = [
            'file_name' => 'images/ds0F8g4MA2yyC9nChMKSgEuy9SuQYcp2WsfuK6HL.jpeg',
            'url' => 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/images/ds0F8g4MA2yyC9nChMKSgEuy9SuQYcp2WsfuK6HL.jpeg',
        ];
        DB::table('images')->insert($param);
    }
}
