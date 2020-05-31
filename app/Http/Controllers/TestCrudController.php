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
    
}
