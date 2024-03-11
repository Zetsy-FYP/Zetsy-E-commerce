<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Category</title>
    @include('admin.css')
    <style>
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        
        .div_center .input_value
        {
            border-radius: 5px;
            color: black;
            
        }

        .table_center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 40px;
            border: 3px solid #5cb85c;
            border-collapse: collapse;
        }
        
        .table_center tr a{
            text-decoration: none;
            color:#d9534f;
        }



    </style>



</head>
<body>
    <div class="container-scroller">

   {{-- navbar --}}
   @include('admin.sidebar')

   {{-- navbar end  --}}



    {{-- header --}}
    @include('admin.navbar')
    {{-- header end --}}
    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif

            @if(session()->has('delete_message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('delete_message')}}
            </div>



            @endif

            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>
                <form action="{{url('/add_category')}}" method="POST" >
                    @csrf

                 <input type="text" class="input_value" name ="category" placeholder=" Enter Category ">
                 <input type="submit" class="btn btn-primary" name="submit" value="Add Category">

                  </form>

            </div>

            <table class="table_center" >
                <th>
                    <tr>
                        <td>Category</td>
                        <td>Action</td>
                    </tr>
                </th>

                @foreach ($category_data as $category_data)
                <tr>
                     <td>{{$category_data->category_name}}</td>
                    
                    <td><a onclick="return confirm('Are you sure you want to delete this category?')" href="{{url('delete_category',$category_data->id)}}" class="">Delete</a></td>
                </tr>
                @endforeach

            </table>




            
         </div>
    </div>
 
     
    {{-- body  --}}



    {{-- body ends --}}
    


        {{-- script  --}}

        @include('admin.script')

        {{-- script ends --}}





</body>
</html>