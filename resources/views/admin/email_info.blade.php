<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
   @include('admin.css')

   <style type="text/css">
   	

   	label{

   		display: inline-block;
   		width: 200px;
   		font-size: 15px;
   	}
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->


         <div class="main-panel">
            <div class="content-wrapper">

            	<h1 class="text-center text-md">Send Email to {{$order->email}}</h1>


            	<form action="{{url('send_user_email',$order->id)}}" method="POST">
            		@csrf


            	<div style="padding-left: 35%; padding-top: 30px;">
            		<label>Email Greeting:</label>
            		<input style="color: black;"type="text" name="greeting">
            	</div>

            	<div style="padding-left: 35%; padding-top: 30px;">
            		<label>Email First Line:</label>
            		<input style="color: black;" type="text" name="firstline">
            	</div>



            	<div style="padding-left: 35%; padding-top: 30px;">
            		<label>Email Body:</label>
            		<input style="color: black;"type="text" name="body">
            	</div>

            	<div style="padding-left: 35%; padding-top: 30px;">
            		<label>Email Button Name:</label>
            		<input style="color: black;"type="text" name="button">
            	</div>

            	<div style="padding-left: 35%; padding-top: 30px;">
            		<label>Email Url:</label>
            		<input style="color: black;"type="text" name="url">
            	</div>


            	<div style="padding-left: 35%; padding-top: 30px;">
            		<label>Email Last Line:</label>
            		<input style="color: black;"type="text" name="lastline">
            	</div>
            	<div style="padding-left: 35%; padding-top: 30px;">
            		
            		<input style="color: black;"type="submit" value="Send Email" class="btn btn-primary">
            	</div>

            		</form>


            </div>
        </div>
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>