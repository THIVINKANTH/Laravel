<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empolyeedetails;

class EmployeeController extends Controller
{
    public function details( Request $request)
    {
        $users = Empolyeedetails::all()->toArray();

        Empolyeedetails::insert([
            'email' => 'kayla@example.com',
            'votes' => 0
        ]);
        $title = 'Employees';
        // print_r($users);
        return view('home',compact('users','title'));
    }
}
