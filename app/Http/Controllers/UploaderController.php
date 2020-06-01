<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploaderRequest;

class UploaderController extends Controller
{
    // 検証用コード
    public function getIndex()
    {
        $uploader = \App\Uploader::orderBy('created_at', 'desc')->paginate(5);
        return view('uploader.index')->with('uploaders',$uploader);
    }

    public function confirm(\App\Http\Requests\UploaderRequest $req)
    {
        $username = $req->username;
        $thum_name = uniqid("THUM_") . "." . $req->file('thum')->guessExtension(); // TMPファイル名
        $req->file('thum')->move(public_path() . "/img/tmp", $thum_name);
        $thum = "/img/tmp/".$thum_name;

        $hash = array(
            'thum' => $thum,
            'username' => $username,
        );

        return view('uploader.confirm')->with($hash);
    }

    public function finish(Request $req)
    {
        $uploader = new \App\Uploader;
        $uploader->username = $req->username;
        $uploader->save();

        // レコードを挿入したときのIDを取得
        $lastInsertedId = $uploader->id;

        // ディレクトリを作成
        if (!file_exists(public_path() . "/img/" . $lastInsertedId)) {
            mkdir(public_path() . "/img/" . $lastInsertedId, 0777);
        }

        // 一時保存から本番の格納場所へ移動
        rename(public_path() . $req->thum, public_path() . "/img/" . $lastInsertedId . "/thum." .pathinfo($req->thum, PATHINFO_EXTENSION));

        return view('uploader.finish');
    }

}
