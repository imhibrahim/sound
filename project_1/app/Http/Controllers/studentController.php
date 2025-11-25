<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    
public function form(){
    return view('User.insert');
}

public function insert(Request $req){

    $req->validate([
        'name'=>'required',
        'mail'=>'required',
        'password'=>'required',
        'subject'=>'required',
    ]);

    // Raw Query relate Php
    // $userdata=DB::insert("insert into user(name,mail,password,subject)
    // values('{$req->name}','{$req->mail}','{$req->password}','{$req->subject}')");

    //query with perameter binding
//  $userdata=DB::insert("insert into user(name,mail,password,subject)
//     values(?,?,?,?)",[
// $req->name,
// $req->mail,
// $req->password,
// $req->subject
//     ]);


// Laravel Query Builder
// $userdata=DB::table('user')->insert([
// 'name'=>$req->name,
// 'mail'=>$req->mail,
// 'password'=>$req->password,
// 'subject'=>$req->subject,
// ]);


//     if($userdata){
//         return 'inserted';
//     }
//     else{
//         return "Data not Inserted";
//     }
// }


$user=new user();
$user->name=$req->name;
$user->mail=$req->mail;
$user->password=$req->password;
$user->subject=$req->subject;
$user->save();


    if($user){
        return redirect()->route('student.fatch');;
    }
    else{
        return "Data not Inserted";
    }
}


function fatch(){

//$data=DB::select('select * from users');
// $data=DB::table('users')->get();
$data=user::all();
    return view('User.data',['user'=>$data]);
}


function delete($id){

//$data=DB::delete("delete from users where id = {$id} ");
// $data=DB::table('users')->delete($id);
$data=user::destroy($id);

   if($data){
     return redirect()->route('student.fatch');
   }
   else{
     return redirect()->route('student.fatch');
   }
}


function edit($id){

// $data= DB::select("select * from users where id = {$id}");
$user=user::find($id);
    return view('User.edit',compact('user'));
}


function update(Request $req,$id){
    
    $std=user::find($id);
$std->name=$req->name;
$std->mail=$req->mail;
$std->password=$req->password;
$std->subject=$req->subject;

if($std->save()){
    return redirect()->route('student.fatch');
}
else{
     return redirect()->route('student.fatch');
}
   
}



function search(Request $req){
    $data=user::where('name','like',"%$req->search%")->get();
   return view('User.data',['user'=>$data]);
}


}