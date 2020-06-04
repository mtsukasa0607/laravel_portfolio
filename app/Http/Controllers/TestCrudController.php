<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestCrudController extends Controller
{
    // 検証コード
    public function index() {
        $data = [
            'msg'=>'これはCRUDテストです。',
        ];
        return view('testCrud.index', $data);
    }

    public function show(Request $request) {
        $items = DB::select('select * from items');
        return view('testCrud.show', ['items' => $items]);
    }

    public function add(Request $request) {
        return view('testCrud.add');
    }

    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into items (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('testCrud/show');
    }
}