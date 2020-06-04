<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UploaderController extends Controller
{
    private $fname;

    public function __construct()
    {
        $this->fname = 'DIYucQvxCTsfESUS5vJWNgSRIIY4LpoJ0JKRiIMx.jpeg';
    }

    public function index()
    {
        $sample_msg = Storage::disk('public')->url($this->fname);
        $sample_data = Storage::disk('public')->get($this->fname);

        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL, $sample_data),
        ];
        return view('uploader.index', $data);
    }
    
    public function show()
    {
        $records = DB::select('select * from images');
        $data = [
            'data' => $records,
        ];
        return view('uploader.show', $data);
    }

    public function add()
    {
        return view('uploader.add');
    }

    public function create(Request $request)
    {
        $file_name = $request->file('file');
        Storage::disk('s3')->putFile('images', $file_name, 'public');

        $j = 0;
        for ($i=0; $i<1000000; $i++)
        {
            $j++;
        }

        $url = Storage::disk('s3')->url($file_name);
        $param = [
            'file_name' => $file_name,
            'url' => $url,
        ];

        DB::insert('insert into images (file_name, url) values (:file_name, :url)', $param);
        return redirect()->action('UploaderController@show');
    }

}
