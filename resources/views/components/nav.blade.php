<head>
   <title>SOS AKOUDA</title>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="{{ asset('images/instagram-icon-1.png') }}" type="image/x-icon">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets --> 
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
   <div class="container-fluid header_main">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="logo" href="{{ route('home') }}"><img src="{{ asset('../images/logo3.png') }}" style="width: 100px;position:relative;top:5px;" alt="logo"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('about') }}">À propos</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('blog') }}">Action</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="#carouselExampleIndicators">Contact</a>
                  </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                    <a class="nav-link" href="#"><img src="{{ asset('../images/serach-icon.png') }}"></a>
                    </li> --}}
               </ul>
                 <ul>
                  @if (Route::has('login'))
                     <li class="nav-item">
                        @auth
                           <a href="{{ url('/dashboard') }}" class="login-link">Dashboard</a>
                  @else
                           <a href="{{ route('login') }}" class="login-link">s'identifier</a>
           
                           @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="login-link">s'inscrire</a>
                          @endif
                       @endauth
                    </li>
                    @endif   
                 </ul>
           </div>
        </nav>
        </div>