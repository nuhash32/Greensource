
      <header class="header-one">
        
         <!-- header-area start -->
         <div id="sticker" class="header-area hidden-xs">
            <div class="container">
               <div class="row">
                  <!-- logo start -->
                  <div class="col-md-3 col-sm-3">
                     <div class="logo">
                        <!-- Brand -->
                        <a class="navbar-brand " href="{{route('home')}}">
                        <img src="{{ asset('front/img/logo/logo2.png') }}" alt="" style="margin-top: -20px;">
                        </a>
                     </div>
                     <!-- logo end -->
                  </div>
                  <div class="col-md-9 col-sm-9">
                     <div class="header-right-link">
                        <!-- search option end -->
                        <a class="s-menu" href="{{route('login')}}">Login</a>

                     </div>
                     <!-- mainmenu start -->
                     <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                           <div class="main-menu">
                              <ul class="nav navbar-nav navbar-right">
                                 <li>
                                    <a class="pagess" href="{{route('home')}}">Home</a>
                           
                                 </li>
                                 <li><a class="pagess" href="{{route('team.view')}}">Team</a></li>
                                 <li><a class="pagess" href="{{route('kits.view')}}">Kits</a></li>
                                   
                                       <li>
                                          <a class="pagess" href="{{route('events.view')}}">Events</a>
                                          <ul class="sub-menu">
      
                                             <li><a href="{{route('blogs.view')}}">Blogs</a></li>
                                             <li><a href="{{route('gallery.view')}}">Gallery</a></li>
                                             
                                          </ul>
                                       </li>
                                 <li><a class="pagess" href="{{route('donation.view')}}">Donation</a></li>
                                    
                                 </li>
                                 <li><a href="{{route('faq.view')}}">FAQ</a></li>
                              </ul>
                           </div>
                        </div>
                     </nav>
                     <!-- mainmenu end -->
                  </div>
               </div>
            </div>
         </div>
         <!-- header-area end -->
         <!-- mobile-menu-area start -->
         <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mobile-menu">
                        <div class="logo">
                           <a href="{{route('home')}}"><img src="{{ asset('front/img/logo/logo2.png') }}" alt="" /></a>
                        </div>
                        <div class="header-right-link">
                           
                           <a class="s-menu" href="{{route('login')}}">Login</a>
   
                        </div>
                        <nav id="dropdown">
                           <ul>
                           <li>
                                    <a class="pagess" href="{{route('home')}}">Home</a>
                           
                                 </li>
                                 <li><a class="pagess" href="{{route('team.view')}}">Team</a></li>
                                 <li><a class="pagess" href="{{route('kits.view')}}">Kits</a></li>
                                   
                                       <li>
                                          <a class="pagess" href="{{route('events.view')}}">Events</a>
                                          <ul class="sub-menu">
      
                                             <li><a href="{{route('blogs.view')}}">Blogs</a></li>
                                             <li><a href="{{route('gallery.view')}}">Gallery</a></li>
                                             
                                          </ul>
                                       </li>
                                 <li><a class="pagess" href="{{route('donation.view')}}">Donation</a></li>
                                    
                                 </li>
                                 <li><a href="{{route('faq.view')}}">FAQ</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- mobile-menu-area end -->
      </header>
      <!-- header end -->