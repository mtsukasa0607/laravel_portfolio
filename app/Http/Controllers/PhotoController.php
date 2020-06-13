<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Photo;

class PhotoController extends Controller
{
    public function photoShow()
    {
        $records = Photo::orderBy('updated_at', 'desc')->paginate(3);
        $data = [
            'data' => $records,
        ];
        return view('photo.photoShow', $data);
    }

    public function photoAdd()
    {
        return view('photo.photoAdd');
    }

    public function photoCreate(Request $request)
    {
        $ext = '.' . $request->file('file')->extension();
        $file_name = time() . $ext;
        $dir = 'images';
        Storage::disk('s3')->putFileAs($dir, $request->file('file'), $file_name);
        $url = 'https://s3.ap-northeast-1.amazonaws.com/mtsukasa0607.com/' . $dir . '/' . $file_name;

        $photo = new Photo;
        $photo->user_id = $request->user()->id;
        $photo->file_name = $file_name;
        $photo->title = $request->title;
        $photo->content = $request->content;
        $photo->url = $url;
        $photo->save();

        return redirect()->action('PhotoController@photoShow');
    }

    public function photoDetail(Request $request)
    {
        $id = $request['id'];
        $record = DB::select("select * from photos where id={$id}");
        $data = [
            'data' => $record,
        ];
        return view('photo.photoDetail', $data);
    }
}
