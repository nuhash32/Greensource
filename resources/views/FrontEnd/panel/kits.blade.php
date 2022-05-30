@extends('FrontEnd.master')
<style>
.card-img-top {
    width: 100%;
    height: 20vw;
    object-fit: cover;
}

</style>
      <!-- Start Bottom Header -->
      <div class="page-area">
         <div class="breadcumb-overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="breadcrumb text-center">
                     <div class="section-headline white-headline text-center">
                        <h3>Kits</h3>
                     </div>
                     <ul>
                        <li class="home-bread">Home</li>
                        <li>Kits</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- END Header -->
      <!-- Start project Area -->

      
      <section class="kits">
    
      <div class="project-page-area area-padding-2">
         <div class="container">
           
              
                  <!-- single-awesome-project start -->
                  @foreach ($alldata as $key => $products)
                  <div class="row">
                 
                  <div class="col-md-3 col-sm-6 col-xs-12">
                  
                     <div class="card" style="width: 100%;">
                      
                       
                        <img  class="card-img-top" src="{{ asset('upload/product_images/'.$products->image)}}">
                        <div class="card-body">
                        <h3>{{ $products->name }}</h3>
                        <p class="price">৳ {{ $products->price }}</p>
                       
                          
                        <button class="btn"><a href="{{route('login')}}" style="color: white;">Buy Now</a></button>
                        
              
                        </div>
             
                      </div>
                    
                  </div>
                  @endforeach
               
                   <!-- single-awesome-project start -->
                  
                  
                   
                  
              
            </div>
         </div>
         <!-- End main content -->
      </div>
      
        </section>

         <!-- End main content -->
   
      <!-- End project Area -->
     