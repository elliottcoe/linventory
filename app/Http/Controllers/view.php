<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Computer;

use Illuminate\Support\Facades\Redirect;

class view extends Controller
{
    public function viewcomputer($id = null)
    {

        if ($id == null) {
            return Redirect::to('/');
        } else {
            $name = Auth::user()->name;
            $computer = Computer::where('id', $id)->get();
            return view('view')->with('computer', $computer)->with('name', $name);
        }

    }
}
