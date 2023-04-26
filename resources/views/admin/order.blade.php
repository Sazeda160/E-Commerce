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
        	<div class="table-responsive">
        		
        	

          <!--   @if(session()->has('message'))

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{session()->get('message')}}

                        </div>

                    @endif -->

        <h1 class="text-white bg-dark">Order List</h1>


            <div class="mt-3">

              
              <form action="{{url('search')}}" method="get">
                
                @csrf


                <input style="color:black;" type="text" name="search" placeholder="Search the Order">

                <input type="submit"  name="" value="Search" class="btn btn-outline-warning">
              </form>

            </div>

            <table class=" table-fixed text-white table-bordered mt-3">
                <tr>
                    <th class="text-warning">Name </th>
                    <th class="text-warning"> Email </th>
                     <th class="text-warning"> Phone </th>
                    <th class="text-warning"> Address </th>
                    <th class="text-warning"> Product title </th>
                    <th class="text-warning">Product Quantity</th>
                    <th class="text-warning">Product Price</th>
                    <th class="text-warning">Payment Status</th>
                    <th class="text-warning">Delivery Status</th>
                    <th class="text-warning">Product Image</th>
                    <th class="text-warning">Delivered</th>
                    <th class="text-warning">Print Pdf</th>
                    <th class="text-warning">Send Email</th>
                </tr>

                @forelse ($order as $order )
                    
               
                <tr >
                    <td>{{$order->name}}</td>
                     <td>{{$order->email}}</td>
                      <td>{{$order->phone}}</td>
                      <td>{{$order->address}}</td>
                       <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                         <td>{{$order->price}}</td>
                          <td>{{$order->payment_status}}</td>
                           <td>{{$order->delivery_status}}</td>
                           <td>
                           	<img src="/product/{{$order->image}}" width="200px" height="200px">
                           </td>
                           <td>

                           	@if($order->delivery_status=='processing')

                    <a href="{{url('delivered',$order->id)}}" onclick="confirm('Are you sure this product is delivered!!!')" class="btn btn-warning btn-sm" value=""> Delivered </a>

                    @else
                    <p class="text-dark">Delivered</p>



                    @endif
                   
                </td>

                <td> 
                	<a href="{{url('print_pdf',$order->id)}}" class="btn btn-danger">Print</a>
                </td>
                        
                        <td>
                          <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a>
                        </td>  
                  
                </tr>

                @empty

                <tr>
                  <td colspan="16">
                    No Data Found
                  </td>
                </tr>
               

                @endforelse
              
            </table>
            </div>

        </div>
      </div>

     <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>