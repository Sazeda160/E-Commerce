<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

         
         @if(session()->has('message'))

         <div class="alert alert-success">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
             {{session()->get('message')}}

         </div>

     @endif
    
      <!-- why section -->
      <div class="container center" style="width: 50%;">
       {{-- <h1 class="text-info" style="text-align: center">Product List</h1> --}}
      <table class="table  table-bordered mt-5">
          <tr>
              <th class="text-warning">Product Title </th>
              <th class="text-warning">Product Quantity</th>
              <th class="text-warning"> Product Price </th>
              <th class="text-warning">Product Image</th>
              <th colspan="2"  class="text-warning">Action</th>
           

          </tr>

          <?php $totalprice=0;  ?>

          @foreach ($cart as $cart )
            <tr class="text-center">
            <td>{{$cart->product_title}}</td>
            <td>{{$cart->quantity}}</td>
            <td>Tk {{$cart->price}}</td>
            <td> <img src="/product/{{$cart->image}}" width="80px" height="80px" alt=""></td>
            <td><a class="btn btn-danger mt-3" onclick="return confirm('Are you sure to remove this product? ')"  href="{{url('remove_cart',$cart->id)}}">Remove</a></td>    
            
            </tr>  
            <?php  $totalprice=$totalprice + $cart->price;  ?>            
          @endforeach

      </table> 
      <div class="col-md-8">
            <div class="m-3 p-2 text-right" >
                    
                       <a class="btn btn-info" style="font-weight:bold;">Total: Tk
                      {{$totalprice}}</a>
                        
                    
            </div>
      </div>
      <div class="text-center">

         <h1 style="font-size: 25px;">Proceed to Order</h1>
         <a href="{{url('cash_order')}}" class="btn btn-danger mt-2"> Cash On Delivery</a>
         <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger mt-2"> Pay using Card</a>
      </div>

    </div>

        </div> 


            <!-- footer start -->
            @include('home.footer')
            <!-- footer end -->

            
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>