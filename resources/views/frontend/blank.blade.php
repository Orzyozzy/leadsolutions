

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>LEADsolutions</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" href="{{url('public/frontend/img/leadsolutions.png')}}" type="image/png">
<link href="{{url('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet" >
<link href="{{asset('public/frontendcss/frontend/style.css')}}" rel="stylesheet">
<link href="{{url('public/frontend/css/font-awesome.css')}}" rel="stylesheet"> 
<link href="{{url('public/frontend/css/animate.css')}}" rel="stylesheet">




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>


<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
    
    <div class="logo">

      @if($setups != '')
      <a href=""><img src="{{url('public/setups')}}/{{$setups->image}}" alt="logo"></a>
      @endif
    
    </div>
	  <nav class="navbar navbar-inverse" role="navigation">
      
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">

        <li class="active"><a href="#hero_section-1" class="scroll-link">Home</a></li>
      
        <div class="dropdown">
          <li class="text-uppercase"><a href="#aboutus" class="scroll-link">about</a></li>
          <div class="dropdown-content">
            <a href="{{url('Learnmore')}}">About us</a>
            <a href="{{url(('Learnmore/Missionvision/Corporateprofile'))}}">Corporate Profile</a>
            </div>
        </div>
         
      
 
      {{-- @foreach($cats as $cat)
      <li class="text-uppercase"><a href="#{{$cat->slug}}" class="scroll-link">{{$cat->title}}</a></li>
      @endforeach --}}

      <div class="dropdown">
        <li class="text-uppercase"><a href="#contact" class="scroll-link">contact</a></li>
        <div class="dropdown-content">
          <a href="{{url('contact')}}">Contact Us</a>
          <a href="https://www.google.com">Demo</a>
          </div>
 </ul>
        <div id="mySidenav" class="sidenav">
          <a href="#" id="contactus"><img src="{{url('public/frontend/img/sidenav/contactus.png')}}"></a>
        </div>
   
    </div>  
	 </nav>
    </div>
  </div>
</header>

<!--Header_section-->        
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @yield('content')
    <!-- /.content-wrapper -->
  </div>

<!--Footer-->
<footer class="footer_wrapper">
  <div class="container">
    <section class="page_section contact" id="char">
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info" id="details">
                            <div class="detail">
                                <h5>Koronadal City</h5>
                                {{-- @if(!empty($setups))
                                <p>{{$setups->address}}</p>
                                @endif --}}
                            <p>LEADSolutions, Inc.<Br>
                              Door 3, Ilao Apartment, Tandang Sora St. 
                              9506 Koronadal, South Cotabato<br>
                              (083) 877-5384
                            </p>
                            </div>
                            <div class="detail">
                              <h5>Davao City</h5>
                              <p>LEADSolutions, Inc.<Br>
                                2F Door 8, SNN Realty Building, 55 Iñigo St.,
                                Bo. Obrero, Davao City<br>
                                (082) 327-3564</p>
                          </div>      
                         </div>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s" id="char">
          <div class="contact_info" id="details">
            <div class="detail" >
              <h5>Call us at</h5>
              {{-- @if(!empty($setups))
            <p>{{$setups->contact}}</p>
            @endif --}}
            <p>09171764872<br>09437026175</p> 
          </div>
              <div class="detail">
                  <h5>Email us at</h5>
                {{-- @if(!empty($setups))
              <p>{{$setups->email}}</p>
              @endif --}}
                  <p>admin@leadsolutionsinc.net</p> 
                </div> 
          </div>
        </div>  
        </div>
      </div>
     
       
      </div>
    
    </section>   
  </div>
  <div class="container">
    <div class="footer_bottom"><span>The LEADSolutions Group. © {{date('Y')}},    Visit us on facebook <a href="https://www.facebook.com/theLEADSolutions"><i class="	fa fa-facebook-square"></i></a></li></a></span> </div>
  </div>
</footer>

<script type="text/javascript" src="{{url('public/frontend/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/wow.js')}}"></script> 
<script type="text/javascript" src="{{url('public/frontend/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{url('public/frontend/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/custom.js')}}"></script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel,10000);    
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


</script>

<style>

.service_block
{
  margin-bottom: 30px;
}


</style>

<script>
   
</script>

</body>
</html>