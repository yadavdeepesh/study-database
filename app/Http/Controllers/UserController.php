<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;

use App\Models\User;

class UserController extends Controller
{
    //
    function users(){
        $users= DB::select("select * from users");

        return view('users', ['users' => $users]);
    }

    function getUsers(){
        // https://dummyjson.com/users
        $users= Http::get('https://jsonplaceholder.typicode.com/users');
        $users = json_decode($users);

        return view('users', ['users' => $users]);

    }

    function getQueries(){
        // $users= DB::select("select * from users where id = ?", [1]);
        // $users = DB::table('users')->get();

        // $users = DB::table('users')->where('phone', 1234)->get();
        // $users = DB::table('users')->first();
        // return view('users', compact('users'));// this line is issue because compact is not defined in this context
       
        // $users = DB::table('users')->insert([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => bcrypt('password'),
        //     'phone' => '1234567890'
        // ]);

        // if($users){
        //     return "User inserted successfully";
        // }else{
        //     return "User insertion failed"; 
        // }
        // return view('users', ['users' => $users]);

        //  $users = DB::table('users')->where('name', 'John Doe')->update([
        //     'phone' => '9999999999'
        // ]);

        // if($users){
        //     return "User updated successfully";
        // }else{
        //     return "User update failed"; 
        // }

        // $users = DB::table('users')->where('name', 'John Doe')->delete();

        // if($users){
        //     return "User deleted successfully";
        // }else{
        //     return "User deletion failed"; 
        // }

        // $users = DB::table('users')->find(4);  
        // $users = DB::table('users')::where('id', 1)->get();
        $users = DB::table('users')->where('id', 4)->first();

        if ($users) {
            return view('users', ['users' => $users]);
        }


  
    }

    function getQueries2(){
    //    $users = User::all();
    //    $users = User::get();
    //    $users = User::where('phone', 1234)->first();
    //    $users =[$users];
    //    $users = User::find(4);
    //    $users =[$users];
    //    return view('users', ['users' => $users]);   

    // $insert = User::create([
    //     'name' => 'John',
    //     'email' => 'john4334@example.com',  
    //     'password' => bcrypt('password'),
    //     'phone' => '1234567890'
    // ]);
    // if($insert){
    //     return "User inserted successfully";        

    // }else{
    //     return "User insertion failed"; 
    // }


    $update = User::where([
        'name' => 'John',
    ])->update([
        'phone' => '9999999999'
    ]);
    if($update){
        return "User updated successfully";         
    }else{
        return "User insertion failed"; 
    }

    

    }
}
