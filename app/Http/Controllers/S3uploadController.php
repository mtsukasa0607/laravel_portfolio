<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;



class S3uploadController extends Controller
{

    private $fname;

    public function __construct()
    {
        $this->fname = 'hello.txt';
    }

    public function index()
    {
        $sample_msg = Storage::disk('public')->url($this->fname);
        $sample_data = Storage::disk('public')->get($this->fname);

        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL, $sample_data),
        ];
        return view('s3upload.index', $data);
    }

    public function other(Request $request)
    {
        // Storage::disk('local')->putFile('files', $request->file('file'));
        // return redirect()->action('goodController@index');

        Storage::disk('s3')->putFile('images', $request->file('file'), 'public');
        return redirect()->action('S3uploadController@index');
    }
    
}
