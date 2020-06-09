<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Perosn;

class HelloController extends Controller
{
    

    private $fname;

    public function __construct()
    {
        $this->fname = 'sample.txt';
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->action('HelloController@index');
    }

    public function index(Request $request)
    {
        //$items = Person::all()->simplePaginate(3);
        $items = DB::table('people')->simplePaginate(3);
        $param = [
            'items' => $items,
        ];
        return view('hello.index', $param);
    }

    public function getAuth(Request $request)
    {
        $param = [
            'message' => 'ログインして下さい。',
        ];
        return view('hello.auth', $param);

    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            $msg = 'ログインしました。' . Auth::user()->name;
        } else {
            $msg = 'ログインに失敗しました。';
        }
        return view('hello.auth', ['message' => $msg]);
    }

    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }

    public function show()
    {
        $records = DB::select('select * from images');
        $data = [
            'data' => $records,
        ];
        return view('hello.show', $data);
    }

    public function delete(Request $request)
    {
        $records = DB::select('select * from images');
        $data = [
            'data' => $records,
        ];

        $param = [
            'id' => 20,
        ];
        $del_record = DB::select("select * from images where id = :id", $param);

        foreach($del_record as $value)
        {
            $file_name = $value->file_name;
            $url = $value->url;
        }


        var_dump($file_name);
        var_dump($url);

        $dir = 'images';
        $path = '/' . $dir . '/' . $file_name;
        var_dump($path);
        
        
        Storage::disk('s3')->delete($path);

        return view('hello.delete', $data);
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

        return redirect()->action('HelloController@storage_index');

    }
}
