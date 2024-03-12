<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Exception;

class HomeController extends Controller
{
    //



    public function index()
    {
        $product = product::paginate(6);
        return  view('home.userpage',compact('product'));
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
    $product = product::paginate(6);
        return  view('home.userpage',compact('product'));
}




    }






}
