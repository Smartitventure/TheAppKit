<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home</title>
      <!-- Bootstrap -->
      <link rel="icon" href="images/moblogo.png" type="image/png" sizes="16x16">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,800&display=swap" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo url ('/'); ?>/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo url ('/'); ?>/css/style.css" rel="stylesheet">
      <link href="<?php echo url ('/'); ?>/css/owl.carousel.min.css" rel="stylesheet">
      <link href="<?php echo url ('/'); ?>/css/owl.carousel.css" rel="stylesheet">
      <link href="<?php echo url ('/'); ?>/css/responsive.css" rel="stylesheet">
   </head>
   <body>

      <!-- header start -->
      <header>
         <div class="header-menu">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <nav class="navbar navbar-expand-lg navbar-light navbar-custom ">
                        <a class="navbar-brand" href="{{ URL::to('/') }}">The app Kit</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul class="navbar-nav ml-auto">
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="{{ URL::to('solutions') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Solution
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ URL::to('Ecommerce') }}">Ecommerce</a>
                                 </div>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ URL::to('pricing') }}">Pricing</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ URL::to('work') }}">Our work</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ URL::to('contact') }}">Contact us</a>
                              </li>
                              @guest  
                                 @if (Route::has('logout'))
                                    <li class="nav-item">
                                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                 @endif
                                 <div class=" my-2 my-lg-0 right-search">
                                    <a class="btncreateapp " href="{{ URL::to('buildapp') }}">
                                    Create a App
                                    </a>
                                 </div>
                                 @else
                                    <li class="nav-item dropdown">
                                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                          </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                          </form>
                                       </div>
                                    </li>
                              @endguest
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      @yield('content')
      @yield('contact')
      @yield('pricing')
      @yield('solutions')
      @yield('work')
      @yield('Ecommerce')


        <!-- footer start-->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p class="text-white text-center">© Copyright 2020</p>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script src="js/owl.carousel.js "></script>
      <script src="js/owl.carousel.min.js "></script>
      <script src="js/bootstrap.min.js "></script>
      <script src="js/custom.js "></script>
   </body>
</html>





