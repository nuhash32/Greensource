<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
     
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <title>Greensource Sign In</title>
        <link rel="stylesheet" href= "{{ asset('loginasset/css/style.css') }}">
       
        
       
    </head>
    <body>

        <div class="container-fluid">
           
            <div class="row" >

                 <!--Left Content Area Start-->

                <div class="col-sm-4 col-md-4 d-md-block d-none" style="background-color: #1AA15F;">
   
                 
                    <div class="left-part">
                       
                        <div class="logo">
                            <img class="img-fluid" src="{{ asset('loginasset/Assets/logo2.png') }}">
                        </div>
                        <div class="leftheader-1">
                            <h3>The only source to make the world green, be with Greensource</h3>
                            </div>
                            <div class="leftheader-2">
                          
                          
                        </div>
                                         
                        <div class="img-rocket">

                            <img class="img-fluid" src="{{ asset('loginasset/Assets/mission1.png') }}">
                        </div>
                   
                </div>
            
                </div>

                <!--Left Content Area End-->

      
                 <!--Right Content Area Start-->

                
                    <div class="col-sm-8 col-md-8">
                     
                        <div class="right-part">
                           
                        <div class="member">
                            <p>Not a member yet?<span1 ><a href="{{route('register')}}" style="color: #1AA15F;">Sign Up Now!</a></span1></p>
                        </div>

                        <div class="right-content">

                            <div class="right-top-content">
                                                     <div class="right-header1">
    
                                                        <h2>Sign In to Greensource</h2>
                                                    </div>
                        
                                                    <div class="soical-media-logo">
                        
                        
                                                        <div class="wrapper">
                                                        
                                                        
                                                            <div class="button">
                                                                <div class="icon">
                                                                    <div class="google-logo">
                                                                        <img class="img-fluid" src="{{ asset('loginasset/Assets/google-logo.svg') }}" alt="Google">
                                                                        </div>
                                                                    
                                                                </div>
                                                                <span><a href="#">Sign In with Google</a></span>
                                                             </div>
                                                            
                                                            
                                                             <div class="button">
                                                                <div class="icon">
                                                                    <div class="linkedin-logo">
                                                                        <img class="img-fluid"  src="{{ asset('loginasset/Assets/linkedin.svg') }}"alt="linkedIn" style="width: 22px;">
    
                                                                    </div>
                                                                    
                                                                </div>
                                                                <span><a href="#">Sign In with LinkedIn</a></span>
                                                             </div>
                                                            
                                                            
                                                             <div class="button">
                                                                <div class="icon">
                                                                    <div class="twitter-logo">
                                                                    <img class="img-fluid"  src="{{ asset('loginasset/Assets/twitter.svg') }}" alt="Twitter" >
                                                                    </div>
                                                                </div>
                                                                <span><a href="#">Sign In with Twitter</a></span>
                                                             </div>
                                                            
                                                            
                                                            <div class="button">
                                                               <div class="icon">
                                                                <div class="facebook-logo">
                                                                <img class="img-fluid" src="{{ asset('loginasset/Assets/facebook.svg') }}"alt="Twitter" style="width: 11px;">
                                                                </div>
                                                               </div>
                                                               <span><a href="#">Sign In with Facebook</a></span>
                                                            </div>
                                                                 
    
                                                         </div>
                                                        </div>
                           <div id="orsection" class="text-muted">
                            <p>----------- Or -----------</p>
                         </div>
                         </div>

                      <!--Form Area Start-->

                         <div class="sign-in-form">
                            @if (isset(Auth::user()->email))
                            <script>
                                window.location = "/main/successlogin";
                            </script>
                        @endif
                
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                
                        @if (count($errors) > 0)
                            <div class="alert alert-danger" style="color: red">
                                <h5>
                                    @foreach ($errors->all() as $error)
                                        <h5>{{ $error }}  </h5>
                                    @endforeach
                                </h5>
                            </div>
                        @endif
                
                             
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">

                <label for="name">Username or Email Address</label>
                <input type="email" class="form-control"  id="email" name="email"  placeholder="Enter Username or Email" size="20">
              </div>
              <div class="form-group">
                <label for="name">Password</label><span1 style="font-weight: 320;"><a href="#" style="text-decoration: none; color: #1AA15F;">Forget Password?</a></span1>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" size="20">
              </div>

              <div class="button-sign-in">

                <button type="submit" class="btn" value="Log In" class="btn btn-primary">Sign In</button>
              </div>

              
            </form>

        </div>

         <!--Form Area End-->
            
    </div>
</div>
</div>

  <!--Right Part Area End-->

</div>
</div>
</body>
</html>