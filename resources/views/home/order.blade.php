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
        
   
      <!-- why section -->
     


         <div class="container center" style="width: 80%;">
       <!-- <h1 class="text-info" style="text-align: center">Product List</h1>  -->
      <table class="table  table-bordered mt-5">
          <tr class="bg-warning text-white">
              <th >Product Title </th>
              <th >Product Quantity</th>
              <th > Product Price </th>
              <th >Product Image</th>
              <th >Payment Status</th>
              <th >Delivery Status</th>
              <th>Cancel Order</th>
           

          </tr>


          	@foreach($order as $order)
          <tr class="text-center">
          		<td>{{$order->product_title}}</td>

          		<td>{{$order->quantity}}</td>

          		<td>{{$order->price}}</td>
          		<td>
          			
          			<img height="100" width="120" src="product/{{$order->image}}">
          		</td>

          		<td>{{$order->payment_status}}</td>

          		<td>{{$order->delivery_status}}</td>
          		<td>

          			@if($order->delivery_status=='processing')
          			<a class="btn btn-danger mt-4" onclick="return confirm('Are you sure to cancel this order!!')" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>

          			@else
          			<p>Not Allowed</p>

          			@endif
          		</td>

          		
          		
          		

          </tr>

          @endforeach


</table>
</div>
   </div>

            
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