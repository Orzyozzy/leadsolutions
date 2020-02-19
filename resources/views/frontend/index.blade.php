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
           <a href="{{url('Learnmore')}}">Vision & Mission</a>
            <a href="{{url(('Learnmore/Missionvision/Corporateprofile'))}}">Corporate Profile</a>
            </div>
        </div>
         
      
 
      @foreach($cats as $cat)
      <li class="text-uppercase"><a href="#{{$cat->slug}}" class="scroll-link">{{$cat->title}}</a></li>
      @endforeach

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



<section id="hero_section-1" class="top_cont_outer">
{{-- <!--Hero_Section-->
  

  {{-- <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section-1">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated "> 
              
              <h4>LEADSolution,Inc</h4>
              <p>A premiere developer of business software packages and provider of consultancy services, more than 10 years of experience expertise founded on long years of experience in
                wide latitutude of experience across industries</p>
              <p></p>
              <a href="#products" class="read_more2">View Products</a>
              <br>
              <a href="#products" class="read_more2">View Products</a>
             </div>
            
          </div>
          <div class="col-lg-7 col-sm-5">
		<div class="w3-content w3-section" style="max-width:500px" >
        <img class="mySlides w3-animate-zoom" src="{{url('public/frontend/img/products/accountingsystem.png')}}" style="width:100%" alt="Accounting System">
        <img class="mySlides w3-animate-zoom" src="{{url('public/frontend/img/products/inventory.png')}}" style="width:100%">
        <img class="mySlides w3-animate-zoom" src="{{url('public/frontend/img/products/business.png')}}" style="width:100%">
   </div>
		  </div>
        </div>
      </div> 
    </div>  --}}

<div class="slideshow-container">
  
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    {{-- <img src="{{url('public/frontend/img/headerpage/inventorysystem.jpg')}}" style="width:100%"> --}}
  <img src="{{url('public/contents')}}/{{$carousel1->image}}" style="width:100%">
    <div class="container"> 
      <div class="carousel-caption">    
      <h4 class="text-uppercase">{{$carousel1->title}}</h4>
      <p>{!!$carousel1->description!!}</p>
        <p></p>
      <a href="#{{$product->slug}}" class="read_more2">View Products</a>
      </div>
      </div>
  </div>

  
    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      {{-- <img src="{{url('public/frontend/img/headerpage/inventorysystem.jpg')}}" style="width:100%"> --}}
    <img src="{{url('public/contents')}}/{{$carousel2->image}}" style="width:100%">
      <div class="container"> 
        <div class="carousel-caption">    
        <h4 class="text-uppercase">{{$carousel2->title}}</h4>
        <p>{!!$carousel2->description!!}</p>
          <p></p>
        <a href="#{{$product->slug}}" class="read_more2">View Products</a>
        </div>
        </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      {{-- <img src="{{url('public/frontend/img/headerpage/inventorysystem.jpg')}}" style="width:100%"> --}}
    <img src="{{url('public/contents')}}/{{$carousel3->image}}" style="width:100%">
      <div class="container"> 
        <div class="carousel-caption">    
        <h4 class="text-uppercase">{{$carousel3->title}}</h4>
        <p>{!!$carousel3->description!!}</p>
          <p></p>
        <a href="#{{$product->slug}}" class="read_more2">View Products</a>
        </div>
        </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      {{-- <img src="{{url('public/frontend/img/headerpage/inventorysystem.jpg')}}" style="width:100%"> --}}
    <img src="{{url('public/contents')}}/{{$carousel4->image}}" style="width:100%">
      <div class="container"> 
        <div class="carousel-caption">    
        <h4 class="text-uppercase">{{$carousel4->title}}</h4>
        <p>{!!$carousel4->description!!}</p>
          <p></p>
        <a href="#{{$product->slug}}" class="read_more2">View Products</a>
        </div>
        </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">5/ 6</div>
      {{-- <img src="{{url('public/frontend/img/headerpage/inventorysystem.jpg')}}" style="width:100%"> --}}
    <img src="{{url('public/contents')}}/{{$carousel5->image}}" style="width:100%">
      <div class="container"> 
        <div class="carousel-caption">    
        <h4 class="text-uppercase">{{$carousel5->title}}</h4>
        <p>{!!$carousel5->description!!}</p>
          <p></p>
        <a href="#{{$product->slug}}" class="read_more2">View Products</a>
        </div>
        </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      {{-- <img src="{{url('public/frontend/img/headerpage/inventorysystem.jpg')}}" style="width:100%"> --}}
    <img src="{{url('public/contents')}}/{{$carousel6->image}}" style="width:100%">
      <div class="container"> 
        <div class="carousel-caption">    
        <h4 class="text-uppercase">{{$carousel6->title}}</h4>
        <p>{!!$carousel6->description!!}</p>
          <p></p>
        <a href="#{{$product->slug}}" class="read_more2">View Products</a>
        </div>
        </div>
    </div>
 
  
 
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      
      <img class="demo cursor" src="{{url('public/contents')}}/{{$carousel1->image}}" onclick="currentSlide(1)" > 
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('public/contents')}}/{{$carousel2->image}}" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('public/contents')}}/{{$carousel3->image}}" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('public/contents')}}/{{$carousel4->image}}" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('public/contents')}}/{{$carousel5->image}}" onclick="currentSlide(5)" >
    </div>    
    <div class="column">
      <img class="demo cursor" src="{{url('public/contents')}}/{{$carousel6->image}}" onclick="currentSlide(6)" >
    </div>
  </div>
  
</div>
</div>
</section>






<!--Hero_Section--> 
<section id="aboutus"  class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_carousel zoomIn wow animated"> 
              <div class="container"  id="char">
                <h2>ABOUT US</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-sm-5">
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section ><!--Aboutus-->
<br><br><br>
<div class="inner_wrapper" id="aboutUs">
 <div class="container">
  <div class="container" id="char">
    <div class="inner_section">
	<div class="row">
    
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
      <img src="{{url('public/contents')}}/{{$about->image}}" class="img-circle delay-03s animated wow zoomIn" alt="">
      </div>

      	<div class=" ol-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        <div class="delay-01s animated fadeInDown wow animated">
      
          <h3>{{$about->title}}</h3><br/>     
           <p> {!!$about->description!!}</p>
      
			{{-- <h3>Corporate Profile</h3><br/> 
      <p>LEADSolutions, Inc. is a corporation created under the Philippine Law. We specialize in the development of business software packages. ”</p> <br/>
      <p>Our affiliate, the LEADSolutions Consultancy, Inc., another domestic corporation, provides professional, training and consultancy services.</p><br/>
      <P>Our team is composed of business consultants, professional accountants and programmers with collective knowledge in finance, accounting, business processes, control systems, internal quality audit, ISO accreditation, taxation, trainings, IT audit, internal financial audit, and controllership.</p><br/>
      <p>The synergy of our complimentary expertise in various fields and discipline enables us to provide holistic and cost-efficient approaches to improving our client’s internal processes; a guarantee that the software packages we developed can cater the information needs at various levels of management and operations.</p>  
      --}} </div>
<div class="work_bottom"><a href="Vision-and-mission" class="contact_btn">Know More...</a> </div>       
	   </div>
      	
      </div>
	  
    </div>
    </div>
  </div> 
  </div>
  <br><br><br>
</section>
<!--Aboutus--> 

<!--Service-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_carousel zoomIn wow animated"> 
              <div class="container"  id="char">
                <h2>SERVICES</h2>
                </div> 
            </div>
          </div>
          <div class="col-lg-7 col-sm-5">          
		  </div>
        </div>
      </div>
    </div>
  </div>


</section>

<section  id="{{$services->slug}}">
  <div class="container" id="char">
    <div class="service_wrapper" >
      <div class="row">

        @foreach ($services as $service)
        <div class="col-lg-4">
          <div class="service_block">
          <div class="service_icon delay-03s animated wow zoomIn"> <span><i class="fa fa-{{$service->icon}}"></i></span> </div>
            <h4 class="animated fadeInUp wow">{{$service->title}}</h4>
            <p class="animated fadeInDown wow">{!!$service->description!!}</p>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>


<!--Service-->




<!-- Portfolio -->
<section id="{{$product->slug}}" class="top_cont_outer"> 
  
  
  <!-- Container -->
  
    
    <!-- Title -->
    <div class="top_left_carousel zoomIn wow animated"> 
    <div class="section-title products-section-5" id="char">
      <h2>PRODUCTS</h2>
    </div>
    </div>
    
    <!--/Title --> 
    
  
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a><li>
        @foreach($prodcats as $cats)
          <li><a class="" href="#" data-filter=".{{$cats->slug}}">
        <h5>{{$cats->title}}</h5>
          </a></li>
          @endforeach
         
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
     
      @foreach ($product as $prod)
      <!-- Portfolio Item -->
    <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); 
      width: 337px; opacity: 1;" class="portfolio-item one-four {{$prod->class}} isotope-item">
     <div class="team_box wow fadeInDown delay-03s">
    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
    <div class="portfolio_img"> <img src="{{url('public/products')}}/{{$prod->image}}"  alt="Portfolio 1"> </div>        
    <ul>
     
    </ul>
     </div>
    <div class="item_overlay">
     <div class="item_info"> 
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-deep-orange" style="height:50%">View Product</button>
       <h6 class="project_name">{{$prod->title}}</h6>
     </div>
   </div>
   </div>
 @endforeach

 
    </div>
    <!--/Portfolio Wrapper --> 
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
          @yield('content')
      <!-- /.content-wrapper -->
    </div>
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 

  
</section>

<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Modal Header</h2>
    </header>
    <div class="w3-container">
      <p>S12312312321</p>
      <p>Some text..</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal Footer</p>
    </footer>
  </div>
</div>
</div>

<!--/Portfolio --> 

{{-- <section class="page_section abouthis" id="clients"><!--page_section-->
  <h2>Clients</h2>
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container">
    <ul class="fadeInRight animated wow">
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/client_logo1.png')}}" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/client_logo2.png')}}" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/client_logo3.png')}}" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/client_logo5.png')}}" alt=""></a></li>
    </ul>
  </div>
</div>
</section> --}}
<!--client_logos-->

<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container abouthis">
    <h2>Team</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    <div class="team_section clearfix">
      @foreach($teams as $team)
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
        <img src="{{url('public/teams')}}/{{$team->image}}" alt="">

          <ul>
            <a href="#" class="read_more2">FULL BIO</a>
          </ul>
        </div>
      <h3 class="wow fadeInDown delay-03s">{{$team->name}}</h3>
      <span class="wow fadeInDown delay-03s">{{$team->designation}}</span>
      <p class="wow fadeInDown delay-03s">{!!$team->intro!!}</p>
      </div>
      @endforeach

     
    </div>
  </div>
</section>
<!--/Team-->

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

</body>
</html>