<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logins extends Controller
{
    function index(Request $req)
    {
    $req->session()->put('data',$req->input());
   // return $req->session()->get('data');
   if ($req->session()->has('data'))
   {
       return redirect('profile');
   }
    }
}
