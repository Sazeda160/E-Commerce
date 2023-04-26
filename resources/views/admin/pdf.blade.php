<!DOCTYPE html>
<html>

<head>
    <title>Order list PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

	

<div class="text-center">
	  <h1 class="">Order List</h1>


            <table class="table-fixed table-bordered mt-3">
                <tr>
                    <th>Name </th>
                    <th>Email </th>
                    <th>Phone </th>
                    <th>Address </th>
                    <th>Cust Id </th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Image</th>
                  
                    
                </tr>

                <tr class="text-center">
                    <td>{{$order->name}}</td>
                     <td>{{$order->email}}</td>
                      <td>{{$order->phone}}</td>
                      <td>{{$order->address}}</td>
                      <td>{{$order->user_id}}</td>
                       <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                         <td>{{$order->price}}</td>
                          <td>{{$order->payment_status}}</td>
                           <td>
                          	<img height="50px" width="50px" src="product/{{$order->image}}"> 
                           </td>
                           

                           
                          
                  
                </tr>
           
              
            </table>

   	</div>

          <!-- container-scroller -->
    <!-- plugins:js -->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>