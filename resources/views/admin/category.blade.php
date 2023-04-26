<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')


   <style>
    .cc{

        font-family: 'Times New Roman', Times, serif;
        font-size: 40px;
    }

    .category{

        color: black;
    }

    .center{

        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid green;
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
        {{-- @include('admin.body') --}}
        <div class="main-panel">
            <div class="content-wrapper">


                    @if(session()->has('message'))

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{session()->get('message')}}

                        </div>

                    @endif

                    <div class="bb text-center pt-5">
                            <h1 class="cc">Add Category</h1>

                            <form action="{{url('/add_category')}}" method="POST" class=" pt-3">

                                @csrf
                                <input type="text" class="category" name="category" placeholder="Write Category Name">
                                <input type="submit" class="btn btn-primary mx-2" name="submit" value="Add Category">
                            </form>
                    </div>

                    <div class="container">
                        <table class="center">
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>

                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->category_name}}</td>
                                <td> <a onclick="return confirm('Are you Sure to Delete This')"
                                    href="{{url('delete_category',$data->id)}}" class="btn btn-danger">Delete</a> </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>