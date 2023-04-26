<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
   @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
      <!-- partial -->

      <div class="main-panel">
        <div class=" bg-primary text-center content-wrapper">

            @if(session()->has('message'))

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{session()->get('message')}}

                        </div>

                    @endif

        <h1 class="text-white bg-dark">Product List</h1>
            <table class="table text-white table-bordered mt-3">
                <tr>
                    <th class="text-warning">Product Title </th>
                    <th class="text-warning"> Product Discription </th>
                    <th class="text-warning"> Product Category </th>
                    <th class="text-warning"> Product Price </th>
                    <th class="text-warning">Product Quantity</th>
                    <th class="text-warning">Product Discount</th>
                    <th class="text-warning">Product Image</th>
                    <th colspan="2"  class="text-warning">Action</th>
                 

                </tr>
                @foreach ($product as $product )
                    
               
                <tr >
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                        <img src="/product/{{$product->image}}" alt="" width="250px" height="250px">
                    </td>
                    <td>
                    <a href="{{url('edit_product',$product->id)}}" class="btn btn-warning btn-sm" value=""> Edit </a>
                    <a href="{{url('delete_product',$product->id)}}" class=" btn btn-danger btn-sm" value=""> Delete </a>
                </td>
                </tr>
                @endforeach
            </table>

        </div>
      </div>

     <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>