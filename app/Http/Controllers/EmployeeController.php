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

    // middleware

    public function __construct()
    {
        $this->middleware('month');
    }

    public function display($num)
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
    }
}
