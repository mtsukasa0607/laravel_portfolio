<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Person;
use App\User;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        //$items = Person::all();
        //return view('person.index', ['items' => $items]);

        // $items = DB::table('people')->simplePaginate(3);
        // return view('person.index', ['items' => $items]);

        $sort = $request->sort;
        $items = Person::orderBy($sort, 'asc')->simplePaginate(3);
        $param = [
            'items' => $items,
            'sort' => $sort,
        ];
        return view('person.index', $param);
    }

    public function login_check(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $items = Person::orderBy($sort, 'asc')->simplePaginate(3);
        $param = [
            'items' => $items,
            'sort' => $sort,
            'user' => $user,
        ];
        return view('person.login_check', $param);
    }
}
