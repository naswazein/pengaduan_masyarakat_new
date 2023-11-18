<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthControll extends Controller
{
    function register(){
        return view('register');
    }
    function store(Request $request){
        var_dump($request->all());
        //masukan data

        $data = DB::table("masyarakat")->insert([
            'nik' => $request ->nik,
            'nama' => $request ->nama,
            'username' => $request ->username,
            'password' => Hash::make($request->password),
            'telp' => $request ->telp
        ]);
    }
}
