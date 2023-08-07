<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $tittle = 'Send user details';
return view('user_form',['tittle'=>$tittle]/*,compact('tittle')*/)/*->withTittle('tittle',$tittle)*/;
});

route::post('userdata', function (Request $request){
    //   dd($request->all());


    $name = $request->input('name');
    $email = $request->input('email');
    $age = $request->input('age');
    // return "My Name is -".$name." "." Email is -".$email." "."Age".$age;

    //redirect function
    return redirect('/')->with('message','successfully form updataed');

});


Route::get('users/{id}', function ($id) {
    // return $id;
    if($id=="first")
    {
        return "<h2>First page</h2>";
    }
    elseif ($id=="secound") {
        return "<h2>Secound page</h2>";
    }
});


//Multi parameter

route::get('thivin/{id}/{page?}', function($id,$page =null) {
    if ($id==1 && $page=="first") {
        return "This is first page";
    }
    elseif($id==2 && $page == null)
    {
        return "Welcome back thivin";
    }
    else
    {
        return "undefine parameter";
    }

})->name('page');


Route::view('sample-page','page');

//  Route::get('gallery/photos',function(){
//      return "<h2>Photos page</h2>";
//  });



//  Route::get('gallery/videos',function(){
//     return "<h3>videos page</h3>";

//  });



 //prefix route

 Route::prefix('gallery')->group(function(){

    Route::get('photos',function(){
        return "<h2>Photos page</h2>";
    });



    Route::get('videos',function(){
       return "<h3>videos page</h3>";

    });

 });

 Route::get('month/{num}',function($num)
 {
    if($num == 1)
    {
        return "<h2>JANUARY</h2>";
    }
    elseif ($num == 2) {
        return "<h2>FEBRUARY</h2>";
    }
    elseif ($num == 3) {
        # code...
        return "<h2>MARCH</h2>";
    }

 })->middleware('month');

 Route::get('employee',[App\Http\Controllers\EmpolyeeController::class,'store']);

//  Route::get('update',[App\Http\Controllers\EmployeeController::class,'destroy']);







