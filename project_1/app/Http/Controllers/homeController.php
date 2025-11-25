<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function check(){
    
      $data="Bilal";
        return view('about',['name'=>$data]);
    }


public function addition(){

    $detail="Ibrahim";

    return view('about',['name'=>$detail]);
}


public function third(){
    $loop="For Loop";
    return view('about',['name'=>$loop]);
}

    
}
