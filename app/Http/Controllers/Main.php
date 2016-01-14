<?php

namespace App\Http\Controllers;


use App\Computer;
use App\Http\Controllers\Controller;
use Request;

class main extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('main')->with('computers', $computers);
    }
    public function Update()
    {
        $user = Request::input('user');
        $benchmark = Request::input('benchmark');
        $id = Request::input('id');

        $computer = Computer::find($id);
        $computer->user = $user;
        $computer->benchmark = $benchmark;
        $computer->save();

        $return = "view/".$id;
        return redirect($return);
    }
}
