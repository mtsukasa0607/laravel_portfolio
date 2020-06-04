<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class S3sqlController extends Controller
{
    public function index() {
        $data = [
            'msg'=>'これはS3SQLを利用したサンプルです。',
        ];
        return view('s3sql.index', $data);
    }

    public function show() 
    {
        $records = DB::select('select * from images');
        $data = [
            'data' => $records,
        ];
        var_dump($data);
        //$sample_msg = Storage::disk('s3')->url($this->fname);
        // $sample_data = Storage::disk('s3')->get($this->fname);
        
        return view('s3sql.show', $data);
    }
}

