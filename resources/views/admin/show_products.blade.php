<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zetsy-Ecommerce Admin</title>
    <!-- plugins:css -->

    @include('admin.css')
    <style>
        .center{
            margin: auto;
            width: 50%;
            border: 2px solid green;
            text-align: center;
            margin-top: 40px;
        
        }

        .font_size{
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size{
            height: 70px;
            width: 70px;
        }

        

        .center tr th{
            background: green;
            padding: 25px;
        }

        .center tr td a{
          text-decoration: none
        }




    </style>
    
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
                @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif

                <h2 class="font_size">All Products</h2>


                <table class="center">
                    <tr >
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Categoty</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        
                        <td>
                            <img src="/product/{{$product->image}}" alt="" class="img_size">
                        </td>
                        <td> <a href="{{url('/update_product',$product->id)}}" style="color: lime">Update</a> </td>

                        <td> <a onclick=" return confirm('Are you sure you want to delete this product?')" 
                            href="{{url('/delete_product',$product->id)}}" style="color: red">Delete</a> </td>

                    </tr>

                    @endforeach
                </table>






            </div>
         </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>