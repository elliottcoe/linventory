<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Data extends Controller
{
    public function GetAll($id){
        $computers = Computer::where('id',$id)->get();
        return $computers;

    }
}
