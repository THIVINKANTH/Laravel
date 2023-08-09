<?php

namespace App\Http\Controllers;

use App\Models\Empolyee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpolyeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $id = $request->input('id');
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $contact = $request->input('contact');
        // $address = $request->input('address');
        // DB::table('employee_details')->select($id,$name,$email,$contact,$address)->get($id);
        // return $id;
        $users = Empolyee::all()->toArray();
        print_r($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('employee_details')->insert([
            'name' => 'Govindavasan',
            'email' => 'barani@gmail.com',
            'contact' => 8148139874,
            'address' => 'nangavali',
            'salary' => 25000
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empolyee $empolyee)
    {
        // $list = $empolyee::all()->toArray();
        // print_r($list);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empolyee $empolyee)
    {
        $affected = DB::table('employee_details')->where('id',1001)->update(['salary' => 25000]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empolyee $empolyee)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empolyee $empolyee)
    {
         DB::table('employee_details')->where('id', 1006)->delete();
    }
}
