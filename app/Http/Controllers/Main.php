<?php

namespace App\Http\Controllers;


use App\Computer;
use App\Http\Controllers\Controller;
use Auth;
use Request;

class main extends Controller
{
    public function _construct(){
        $this->middleware('status');
    }
    public function index()
    {

            $name = Auth::user()->name;
            $computers = Computer::all();
            return view('main')->with('computers', $computers)->with('name',$name);
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
