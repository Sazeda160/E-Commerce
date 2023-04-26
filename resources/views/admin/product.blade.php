<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   {{-- <style>
  
.div_center{
    text-align: center;
    padding-top: 40px;
}


.font_size{
    font-size: 40px;
    padding-bottom: 40px;
}

.text_color{
    color: black;
    padding-bottom: 20px;
}

label{
    display: inline-block;
    width: 200px;
}
   </style> --}}
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
          <div class="main-panel"> 
             <div class=" bg-primary content-wrapper"> 
              
              @if(session()->has('message'))

              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{session()->get('message')}}

              </div> 

          @endif 


                <div class="container-xxl  flex-grow-1 container-p-y">

  
                    <h4 class="fw-bold py-3 mb-4"><span class="text-black-50 fw-light">Page/</span> Add Product</h4>
      
      <div class="  col-xxl">
                        <div class="  card mb-4">
                          <div class=" card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Add New Product</h5>
                            <small class="text-black-50 float-end">Input Info</small>
                          </div>
                          <div class="card-body ">
                            <form action="{{url('/add_product')}}" method="POST"  enctype="multipart/form-data">
                              
                              @csrf

                              <div class="row bg-black mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Product Title</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control bg-info" required="" name="title" id="title" placeholder="Enter Product Name"  />
                                </div>
                              </div>
      
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Product Description</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control bg-info" required="" name="description" id="" cols="30" rows="10"></textarea>
                                </div>
                              </div>
    
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Product Price</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control bg-info" required="" name="price" id="price" placeholder="1200" />
                                </div>
                              </div>
                              
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Product Quantity</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control bg-info" required="" name="quantity" id="quantity" min="0" />
                                </div>
                              </div>
                              <div class="row bg-black mb-3">
                                <label class="col-sm-2 col-form-label  " for="basic-default-name">Discount Price</label>
                                <div class="col-sm-10">
                                  <input type="Number" class="form-control bg-info " required="" name="dis_price" id="dis_price" />
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category </label>
                               <div class="col-sm-10">
                               <select id="category" required="" name="category" class="form-select text-black">
                                <option>Select Category</option>
                                @foreach ($category as $category )
                                  
                               
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                              </select>
                            </div>
                            </div> 
                           
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" required="" name="image" for="basic-default-name">Upload Product Image</label>
                                <div class="col-sm-10">
                                <input class="form-control bg-black" type="file"  name="image" id="image" />
                                </div>
                              </div>     
      
                           
                              <div class="row justify-content-end">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-success">Add Product</button>
                                </div>
                              </div>
                            </form>
                          </div>
            </div>
      


      
             </div> 

                
           
        </div> 

             </div>
          </div>
       
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>