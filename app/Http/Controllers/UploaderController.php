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
        $ext = '.' . $request->file('file')->extension();
        $file_name = time() . $ext;
        $dir = 'images';
        Storage::disk('s3')->putFileAs($dir, $request->file('file'), $file_name);

        $url = 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/' . $dir . '/' . $file_name;

        $param = [
            'file_name' => $file_name,
            'url' => $url,
        ];

        DB::insert('insert into images (file_name, url) values (:file_name, :url)', $param);
        return redirect()->action('UploaderController@show');
    }

    public function edit(Request $request)
    {
        $id = $request['id'];
        $record = DB::select("select * from images where id={$id}");
        $data = [
            'data' => $record,
        ];
        return view('uploader.edit', $data);
    }

    public function delete(Request $request)
    {
        $param = [
            'id' => $request->id,
        ];

        $file_name = $request->file_name;
        $dir = 'images';
        //$path = '/' . $dir . '/' . $file_name;

        //$record = DB::select("select * from images where id = :id", $param);
        
        

        DB::delete("delete from images where id = :id", $param);
        Storage::disk('s3')->delete($file_name);
        return redirect()->action('UploaderController@show');
    }

}
