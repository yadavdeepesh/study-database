<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    function get(Request $request){
        return $request->all();
    }

    function post(Request $request){
        return $request->all();
    }

    function put(Request $request){
        echo "put request";
        return $request->all();
    }
    function patch(Request $request){
        echo "patch request";
        return $request->all();
    }
    function delete(Request $request){
        echo "delete request";  
        return $request->all();
    }

    function any(Request $request){
        echo "any request";  
        return $request->all();
    }

    function group1(){
        return "group1 is called";
    }

       function group2(){
        return "group2 is called";
    }

    function login(Request $request){
      echo "Request Method".$request->method();
      echo "<br>";
      echo "Request Path ".$request->path();
      echo "<br>";

      echo "Request url ".$request->url();
      echo "<br>";

      echo "name ".$request->name;
      echo "<br>";

     echo "name ".$request->input('name');
      echo "<br>";

      print_r($request->input());
    echo "<br>";
     print_r($request->collect());
     echo "<br>";
     if($request->isMethod('post')){
        echo "post method";
     }
     else{
         echo "not post method";
     }
    }

}