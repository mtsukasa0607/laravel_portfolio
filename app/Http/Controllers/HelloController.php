<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Storage;


class HelloController extends Controller
{
    // 検証コード

    private $fname;

    public function __construct()
    {
        $this->fname = 'sample.txt';
        // $this->fname = 'file.txt';
    }


    public function index() {
        $data = [
            'msg'=>'これはBladeを利用したサンプルです。',
        ];
        return view('hello.index', $data);
    }

    public function storage_index()
    {
        $sample_msg = $this->fname;
        $sample_data = Storage::get($this->fname);

        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL, $sample_data),
        ];

        var_dump($data);
    
        return view('hello.storage_index', $data);
    }

    public function other(string $msg)
    {
        Storage::append($this->fname, $msg);

        // $sample_msg = $this->fname;
        // $sample_data = Storage::get($this->fname);



        // $data = [
        //     'msg' => $sample_msg,
        //     'data' => explode(PHP_EOL, $sample_data),
        // ];




        // return view('hello.other', $data);
        // return redirect()->action('HelloController@storage_index', $data);
        return redirect()->action('HelloController@storage_index');




        // return redirect()->action('HelloController@index');
    }
}
