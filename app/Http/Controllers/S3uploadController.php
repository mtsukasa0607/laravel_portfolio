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
        return view('s3upload.index', $data);
    }

    public function other(Request $request)
    {
        // Storage::disk('local')->putFile('files', $request->file('file'));
        // return redirect()->action('goodController@index');

        Storage::disk('s3')->putFile('images', $request->file('file'), 'public');
        return redirect()->action('S3uploadController@index');
    }

    public function show()
    {
        $sample_msg = Storage::disk('s3')->url($this->fname);
        // $sample_data = Storage::disk('s3')->get($this->fname);

        $data = [
            'msg' => $sample_msg,
            //'msg' => 'Test S3 Show',
        ];
        return view('s3upload.show', $data);
    }
    
}
