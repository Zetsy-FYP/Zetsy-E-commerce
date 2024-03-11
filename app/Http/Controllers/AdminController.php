<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;



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

public function view_product()
{
  $category = category::all();


  return view('admin.product',compact('category'));
}

public function add_product(Request $request)
{
$product = new Product;
$product->title = $request->title;
$product->description = $request->description;
$product->price = $request->price;
$product->quantity = $request->quantity;
$product->discount_price = $request->dis_price;
$product->category = $request->category;

$image = $request->image;
$imageName = time().'.'.$image->getClientOriginalExtension();
$request->image->move('product',$imageName);
$product->image=$imageName;

$product->save();

return redirect()->back()->with('message','product Added Successfully!');

}

public function show_products()
{

  $product = product::all();
  return view('admin.show_products',compact('product'));
}

public function delete_product($id)
{
  $product = product::find($id);

  $product-> delete();
  return redirect()->back()->with('message','product deleted successfully');
}

public function update_product($id)
{
  $product = product::find($id);
  $category = category::all();
  return view('admin.update_product',compact('product','category'));
}

public function update_product_confirm(Request $request,$id)
{

  $product = product::find($id);

$product->title = $request->title;
$product->description = $request->description;
$product->price = $request->price;
$product->quantity = $request->quantity;
$product->discount_price = $request->dis_price;
$product->category = $request->category;

$image = $request->image;
if($image)
{
$imageName = time().'.'.$image->getClientOriginalExtension();
$request->image->move('product',$imageName);
$product->image=$imageName;
}

$product->save();

return redirect()->back()->with('message','product updated Successfully!');



}


}
