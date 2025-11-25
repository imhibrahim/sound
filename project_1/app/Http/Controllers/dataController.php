<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function data(){
   $detal=['ibrahim','ali','bilal','arham'];

        return view('data',['data'=>$detal]);
    }

    public function getdata(Request $req){
    return $req->name;

    }

}
