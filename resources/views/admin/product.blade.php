<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zetsy-Ecommerce Admin</title>

    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }

        .h1_font{
            font-size: 40px;
            padding-bottom: 40px;
        }

        
        
        label{
            display: inline-block;
            width: 200px;
        }

        .input_value{
            border-radius: 5px;
            color:black;
        }

        .input_div{
            padding-bottom: 15px;
        }



</style>

    <!-- plugins:css -->

    @include('admin.css')
    
    <!-- end of css-->

    
        


    
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
        <!-- partial -->

        <!-- navbar -->


        @include('admin.navbar')


         <!-- end -->

<div class="main-panel">
    <div class="content-wrapper">
        <div class="div_center">
            <h1 class="h1_font">Add Product</h1>
            <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="input_div">
                    <label for="title">Product Title :</label>
                    <input type="text" class="input_value" name="title" placeholder="Enter product title" required>
                </div>
                <div class="input_div">
                    <label for="title">Product Description :</label>
                    <input type="text" class="input_value" name="description" placeholder="Enter product description" required>
                </div>
                <div class="input_div">
                    <label for="price">Product price :</label>
                    <input type="number" class="input_value" name="price" placeholder="Enter product price" required>
                </div>
                <div class="input_div">
                    <label for="title">Product quantity :</label>
                    <input type="number" class="input_value" name="quantity" placeholder="Enter quantity" required >
                </div>
                <div class="input_div">
                    <label for="title">Discount price :</label>
                    <input type="number" class="input_value" name="dis_price" placeholder="Enter discount price" required>
                </div>
                <div class="input_div">
                    <label for="title">Product Category :</label>
                    <select name="category" id="" class="input_value" required>
                        <option value="" selected>Add a category</option>
                        @foreach($category as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input_div">
                    <label for="title">Choose product image</label>
                    <input type="file" class="input_value" name="image" accept=".jpg,.jpeg,.png" required>
                </div>

                <div class="input_div">
                    
                    <input type="submit"  name="submit" class="btn btn-success">
                </div>
            </form>
        
        </div>
    </div>
</div>
        
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>