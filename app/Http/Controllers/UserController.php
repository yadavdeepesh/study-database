<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;

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
}
