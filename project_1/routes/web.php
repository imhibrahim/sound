<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/', function () {
    return view('welcome');
})->name('welcomepage');


// Route::get('admin/about',function(){
//  return view('about');
// })->name('aboutpage');

Route::get("/about",[homeController::class,"check"])->name('aboutpage');



Route::get('admin/logic/form',function(){
 return view('form');
})->name('formpage');


Route::view('/ibrahim',"form")->name('contact');

Route::fallback(function(){
return view('404');
});



Route::get('/Admin',[homeController::class,'addition'])->name('Sum');
Route::get('/mypage',[homeController::class,'third'])->name('data');

Route::get('/data',[dataController::class,'data']);


Route::post('/submit',[dataController::class,'getdata'])->name('submit');

Route::get('user/insert',[studentController::class,'form'])->name('form');
//insert data
Route::post('insert',[studentController::class,'insert'])->name('student.submit');

Route::get('/fatch',[studentController::class,'fatch'])->name('student.fatch');

Route::get('/delete/{id}',[studentController::class,'delete']);

Route::get('/edit/{id}',[studentController::class,'edit']);

Route::post('/update/{id}',[studentController::class,'update']);


Route::get('/search',[studentController::class,"search"])->name('search');
Route::get('/dildar',[studentController::class,"dildar"])->name('dildar');