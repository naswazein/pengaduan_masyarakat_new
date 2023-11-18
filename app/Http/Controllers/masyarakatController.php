<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class masyarakatController extends Controller
{
    function masyarakat(){

        $masyarakat = DB::table('masyarakat')->get();

        return view('masyarakat', ['masyarakat' => $masyarakat]);

    }
}
