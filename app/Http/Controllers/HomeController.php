<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //



    public function index()
    {
        return  view('home.userpage');
    }




    public function redirect()
    {
        // $usertype = Auth::user()->usertype;
        

if(!empty(Auth::user()->usertype) && Auth::user()->usertype==1)
{
    return view('admin.home');
}

else
{
    return view('home.userpage');
}


    }






}
