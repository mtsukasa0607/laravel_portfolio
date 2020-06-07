<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        //$items = Person::all();
        //return view('person.index', ['items' => $items]);

        $items = DB::table('people')->simplePaginate(3);
        return view('person.index', ['items' => $items]);
    }
}
