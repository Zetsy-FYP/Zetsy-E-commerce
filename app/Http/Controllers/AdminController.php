<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;



class AdminController extends Controller
{
    

    public function view_category()
{

      $category_data = category::all();

    return view('admin.category',compact('category_data'));
}

  public function add_category(Request $request)
  {
      $data  = new category;
      $data->category_name = $request->category;
      $data->save();
      return redirect()->back()->with('message','Category Added Successfully');
  }

public function delete_category($id)
{
   $data = Category::find($id);
   $data->delete();
   return redirect()->back()->with('delete_message','category deleted!');
}


}
