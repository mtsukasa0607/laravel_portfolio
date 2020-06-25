<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Photo;
use App\Comment;

use App\Http\Requests\ValidateRequest;
use App\Http\Requests\PhotoValidateRequest;
use App\Http\Requests\CommentValidateRequest;



class PhotoController extends Controller
{
    public function top()
    {
        return redirect()->action('PhotoController@photoShow');
    }

    public function photoShow()
    {
        $user = Auth::user();

        $records = Photo::orderBy('created_at', 'desc')->paginate(9);
        $data = [
            'data' => $records,
            'input' => 'キーワードを入力',
            'user' => $user,
        ];
        return view('photo.photoShow', $data);
    }

    public function photoAdd()
    {
        return view('photo.photoAdd');
    }

    public function photoCreate(PhotoValidateRequest $request)
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
        $session_photo_id = $request['id'];
        $request->session()->put('session_photo_id', $session_photo_id);

        $id = $request['id'];
        $record = Photo::find($id);

        $user = Auth::user();
        if ($user) {
            $login_id = $user->id;
        } else {
            $login_id = 'no login';
        }

        $comments = Comment::where('photo_id', $id) -> orderBy('created_at', 'desc') -> get();

        $data = [
            'record' => $record,
            'login_id' => $login_id,
            'comments' => $comments,
        ];

        return view('photo.photoDetail', $data);
    }

    public function photoDelete(Request $request)
    {
        $session_photo_id = $request->session()->get('session_photo_id');
        $photo = Photo::find($session_photo_id);
        $data = [
            'data' => $photo,
        ];
        return view('photo.photoDelete', $data);
    }

    public function photoRemove(Request $request)
    {
        $session_photo_id = $request->session()->get('session_photo_id');
        $photo = Photo::find($session_photo_id);

        $file_name = $photo->file_name;
        $dir = 'images';
        $path = '/' . $dir . '/' . $file_name;

        Storage::disk('s3')->delete($path);
        $photo->delete();
        $comments = Comment::where('photo_id', $session_photo_id)->delete();

        return redirect()->action('PhotoController@photoShow');
    }

    public function photoEdit(Request $request)
    {
        $session_photo_id = $request->session()->get('session_photo_id');
        $photo = Photo::find($session_photo_id);
        $data = [
            'data' => $photo,
        ];
        return view('photo.photoEdit', $data);
    }

    public function photoUpdate(ValidateRequest $request)
    {
        $session_photo_id = $request->session()->get('session_photo_id');
        $photo = Photo::find($session_photo_id);
        $photo->title = $request->title;
        $photo->content = $request->content;
        $photo->save();
        return redirect()->action('PhotoController@photoShow');
    }

    public function photoFind(Request $request)
    {
        return view('photo.photoFind', ['input' => '']);
    }

    public function photoSearch(Request $request)
    {
        $word = $request->input;
        $record = Photo::where('title', 'like', "%{$word}%") -> orWhere('content', 'like', "%{$word}%") -> orderBy('updated_at', 'desc')->paginate(9);
        $cnt = $record->count();

        if($cnt === 0)
        {
            $msg = "「" . $word . "」と一致する投稿はありません。";
        } else {
            $msg = $cnt . "件ヒットしました。";
        }

        $param = [
            'input' => $request->input,
            'data' => $record,
            'msg' => $msg,
        ];

        return view('photo.photoFind', $param);
    }

    public function photoComment(CommentValidateRequest $request)
    {
        $comment = new Comment;
        $comment->photo_id = $request->photo_id;

        $user = Auth::user();
        if ($user) {
            $user_id = $user->id;
        }
        $comment->user_id = $user_id;
        $comment->comment = $request->comment;
        $comment->save();
        
        return redirect()->action('PhotoController@photoDetail', ['id' => $request->photo_id]);
    }

    public function photoCommentRemove(Request $request)
    {
        Comment::find($request->id)->delete();
        return redirect()->action('PhotoController@photoDetail', ['id' => $request->photo_id]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->action('PhotoController@photoShow');
    }

}
