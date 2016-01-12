<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class main extends Controller
{
    public function index(){
         $computers = Computer::all();
        return view('index')->with('computers',$computers);
    }
}
