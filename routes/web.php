<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Empolyeedetails;
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


 //insert
 Route::get('employee',[App\Http\Controllers\EmpolyeeController::class,'store']);

 //update
 Route::get('update',[App\Http\Controllers\EmpolyeeController::class,'edit']);

 //delete
 Route::get('delete',[App\Http\Controllers\EmpolyeeController::class,'destroy']);


//list
Route::get('list',[App\Http\Controllers\EmpolyeeController::class,'index']);




//passing route parameters

Route::get('pass/{num}',[EmployeeController::class,'display']);



//blade view

// Route::view('local','layouts.default');

// Route::view('/','hom');

Route::view('/contact','contact');


//condition statement in blade

Route::get('/', function ()
 {
    $heading = "This is a New Home Page";
    $no_of_users = 1;
    $is_user_online = 0;
    $settings = 'user settings';
    $names = ['thivin','praveen','Raj'];

    $namesmulti = [['name' => 'thivin'],['name' => 'praveen']];
    return view('hom',compact('heading','no_of_users','is_user_online','settings','names','namesmulti'));
});



