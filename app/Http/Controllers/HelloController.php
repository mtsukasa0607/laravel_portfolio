<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Perosn;
use App\Message;

class HelloController extends Controller
{
    

    private $fname;

    public function __construct()
    {
        $this->fname = 'sample.txt';
    }

    public function welcome()
    {
        return view('welcome.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->action('PhotoController@photoShow');
    }

    public function messageShow()
    {
        $user = Auth::user();
        if ($user) {
            $login_id = $user->id;
        } else {
            $login_id = 'no login';
        }

        $items = Message::orderBy('updated_at', 'desc')->paginate(10);
        
        $data = [
            'items' => $items,
            'login_id' => $login_id,
        ];
        return view('hello.messageShow', $data);
    }

    public function messageCreate(Request $request)
    {
        $message = new Message;
        $message->user_id = $request->user()->id;
        $message->message = $request->message;
        $message->save();
        return redirect()->action('HelloController@messageShow');
    }

    public function messageEdit(Request $request)
    {
        $message = Message::find($request->id);
        $data = [
            'form' => $message,
        ];
        return view('hello.messageEdit', $data);
    }

    public function messageUpdate(Request $request)
    {
        $message = Message::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $message->fill($form)->save();
        return redirect()->action('HelloController@messageShow');
    }

    public function messageDelete(Request $request)
    {
        $message = Message::find($request->id);
        $data = [
            'form' => $message,
        ];
        return view('hello.messageDelete', $data);
    }

    public function messageRemove(Request $request)
    {
        Message::find($request->id)->delete();
        return redirect()->action('HelloController@messageShow');
    }



    
    public function index(Request $request)
    {
        $items = DB::table('users')->simplePaginate(5);
        $param = [
            'items' => $items,
        ];
        return view('hello.index', $param);
    }

    
    public function post(Request $request)
    {
        $items = Message::simplePaginate(10);
        return view('hello.post', ['items' => $items]);
    }

    public function check(Request $request)
    {
        $items = User::simplePaginate(5);
        return view('hello.check', ['items' => $items]);
    }



    public function create(Request $request)
    {

        $message = new Message;
        $message->user_id = $request->user()->id;
        $message->message = $request->message;
        $message->save();


        // $this->validate($request, Message::$rules);
        // $message = new Message;
        // $form = $request->all();
        // unset($form['_token']);
        // $message->fill($form)->save();

        return redirect()->action('HelloController@post');
    }


    
    // public function create(Request $request)
    // {
    //     $this->validate($request, Message::$rules);
    //     $message = new Message;
    //     $form = $request->all();
    //     unset($form['_token']);
    //     $message->fill($form)->save();

    //     return redirect()->action('HelloController@post');;
    // }

    



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
