<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name = "keywords" content = "king borad & granite, kitchen work,services, construction, granite work, tiles ,tar roads,bed room tiles, cupboard," />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
      

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">

 <style>
*{
                font-family: 'STIX Two Math', serif;
            }
        .a1{
                color: white;
            }

            .a1:hover{
                color: lightcyan;
            }
             .navbar-nav{
            
            z-index:9999;
            background-color:;
            }
           .navbar-collapse{
            
            z-index:9999;
        
            }
.back-to-top {
 position: fixed;
 bottom: 30px;
 Left: 12px;
 width: 55px;
 height: 55px;
 z-index: 9999;
 cursor: pointer;
 text-decoration: none;
 transition: opacity 0.2s ease-out;
 background-image: url(top.png);
}

.back-to-top:hover{
 opacity: 0.7;
}
.whatsapp{
 position: fixed;
 bottom: 30px;
 right: 12px;
 width: 55px;
 height: 55px;
 z-index: 9999;
 cursor: pointer;
 text-decoration: none;
 transition: opacity 0.2s ease-out;
}
.footer{
    background-color:#e6e9ed;
    height:auto;
    
}
.text-color{
    color:#919191;
}
.bor{
    border:5px solid #2b2b2b;
}
.header{
    background-image:url({{asset('image/hero.jpg')}});
    background-repeat: no-repeat;
        background-size: cover;
        height:600px;
        width:100%;
}



            
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
 //Check to see if the window is top if not then display button
 $(window).scroll(function(){
  // Show button after 100px
  var showAfter = 100;
  if ($(this).scrollTop() > showAfter ) { 
   $('.back-to-top').fadeIn();
  } else { 
   $('.back-to-top').fadeOut();
  }
 });
 
 //Click event to scroll to top
 $('.back-to-top').click(function(){
  $('html, body').animate({scrollTop : 0},800);
  return false;
 });
 
});
</script>
</head>
<body class="bg-black text-gray bg-stroke-text" style="background-color:#12171A">
<header class="header">
<nav class="navbar nav1   navbar-expand-lg"style=" padding:8px 8px;">
<div class="w-25">
        <a href="/" class="navbar-brand">
            <img src="{{asset('image/logo.svg')}}" class="img-fluid " width="85" height="44" alt="Logo"  style="margin-left:10px">
        </a>
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars text-white"></i></button>
  
    <div class="navbar-collapse  collapse" id="mynav">
        <ul class="navbar-nav mt-3  p-2">
        <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link a1   ml-5 font-weight-bold">Home</a>
                </li>
            <li class="nav-item" @yield('navb')>
                <a href="/service" class="nav-link a1 ml-5 font-weight-bold">Partnership</a>
            </li>

            <li class="nav-item" @yield('navc')>
                <a href="/about" class="nav-link a1 ml-5 font-weight-bold">Pricing</a>
            </li>

            <li class="nav-item" @yield('navd')>
                <a href="/contact" class="nav-link a1 ml-5 font-weight-bold">Company</a>
            </li>

            <li class="nav-item" @yield('nave')>
                <a href="/gallery" class="nav-link a1 ml-5 font-weight-bold">Help</a>
            </li>
            <li class="nav-item" @yield('navf')>
                <a href="/whatsapp" class="nav-link a1 ml-5 font-weight-bold">Log In</a>
            </li>
            <li class="nav-item" @yield('navg')>
                <a href="/whatsapp" class="nav-link a1 ml-5 font-weight-bold">Sign Up</a>
            </li>


        </ul>
    </div>
</nav>
</header>
@yield('content')

<!-- Back to top -->
<a href="#" class="back-to-top" ><i class="fas fa-chevron-up fa-1x text-center p-2 text-white" style="background-color:rgba(63, 66, 71,0.5);" ></i></a>


<footer class="mt-5" >
<div class="container">
<div class="row">
<div class="col-4 col-lg col-md-3 mb-3">
<img src="{{asset('image/blockchain.png')}}" alt="" class="img-fluid">
</div>
<div class="col-4 col-lg col-md-3 mb-3">
<img src="{{asset('image/cloudflare.png')}}" alt="" class="img-fluid">
</div>
<div class="col-4 col-lg col-md-3 mb-3">
<img src="{{asset('image/ssl.png')}}" alt="" class="img-fluid">
</div>
<div class="col-4 col-lg col-md-3 mb-3">
<img src="{{asset('image/bitmain.png')}}" alt="" class="img-fluid">
</div>
<div class="col-4 col-lg col-md-3 mb-3">
<img src="{{asset('image/antminer.png')}}" alt="" class="img-fluid">
</div>
<div class="col-4 col-lg col-md-3 mb-3">
<img src="{{asset('image/coinbase.png')}}" alt="" class="img-fluid">
</div>
<div class="col-4 col-lg col-md-3 mb-3">
<img src="{{asset('image/bitcoin.png')}}" alt="" class="img-fluid">
</div>
</div>
<div class="row">
<div class="col-6 col-lg-3 col-md-6">
<ul class="text-white ul mt-5 m-0 p-0" style="list-style-type:none;">
<li class="mb-3"><a href="/about" style="text-decoration:none" class="text-white ">Home</a></li>
<li class="mb-3"><a href="/service" style="text-decoration:none" class="text-white ">Pricing</a></li>
<li class="mb-3"><a href="/gallery" style="text-decoration:none" class="text-white ">Partnership</a></li>
<li class="mb-3"><a href="/contact" style="text-decoration:none" class="text-white ">Help</a></li>
<li class="mb-3"><a href="/contact" style="text-decoration:none" class="text-white ">Company</a></li>
<li class="mb-3"><a href="/contact" style="text-decoration:none" class="text-white ">Terms & Condition</a></li>
</ul>
</div>
<div class="col-6 col-lg-3 col-md-6 ">
<ul class="text-white ul mt-5" style="list-style-type:none;">
<li class="mb-3"><a href="/about" style="text-decoration:none" class="text-white ">Log In</a></li>
<li class="mb-3"><a href="/service" style="text-decoration:none" class="text-white ">Forgot Password ?</a></li>
<li class="mb-3"><a href="/gallery" style="text-decoration:none" class="text-white ">Sign Up</a></li>
</ul>
</div>
<div class="col-6 col-lg-3 col-md-6 text-center mt-5" >

<a href="/" class="">
            <img src="{{asset('image/logo.svg')}}" class="img-fluid " width="85" height="44" alt="Logo">
        </a>
        <p class="text-sm mt-4 bg-black px-0 py-3 bor text-color">
        B24 MINING LTD,<br>
        5 Ebner Street,<br>
        London SW18 1BT,<br>
        England
        
        </p>
</div>
</div>
</div>
 
</footer>

<script>
  AOS.init();
</script>
</body>
</html>
