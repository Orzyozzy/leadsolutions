@extends('frontend.blank')


@section('content')

    <img src="{{url('public/frontend/img/adel.jpg')}}" style="width:100%;">
    <div class="bottom-left"></div>
    <div class="top-left"></div>
    <div class="top-right"></div>
    <div class="bottom-right"></div>
 
  <div id="vision">
    <h2>Vision</h2>
     
  <img src= "{{url('public/frontend/img/vision.gif')}}"style="width:250px;height:250px;padding-left:20pt;margin-left:70pt;margin-bottom:-50pt;">
  </div>

  <div id="mission">
    <h1>Mission</h1>
    <img src= "{{url('public/frontend/img/mission.gif')}}  "style="width:240px;height:240px;padding-left:20pt;margin-left:40%;margin-top:-40pt;">
    </div>

    <div id="princples">
      <h1>Corporate Principles</h1>
      <img src= "{{url('public/frontend/img/principles.gif')}}  "style="width:250px;height:250px;padding-left:20pt;margin-left:70%;margin-top:5pt;">
      </div>
 </div>


<Br><br><br>
  </div>
</section>




<section><!--Aboutus-->
    <div class="container">
      <div class="container" id="char">
        <div class="inner_section">
      <div class="row">      
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
          <img src="{{url('public/contents')}}/{{$about->image}}" class="img-circle delay-03s animated wow zoomIn" alt="">
          </div>
            <div class=" ol-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
            <div class="delay-01s animated fadeInDown wow animated">

        
              <h6>Why Choose us</h6>   
              <br> 
              
              <div class="col-lg-3">
                <div class="service_block">
                <div class="service_icon delay-03s animated wow zoomIn"> <span><i class="fa fa-android"></i></span> </div>
                </div>
              </div>
              <h3>TRACK RECORD</h3>
              <p>10 years track record; multi-industry.</p></i> 
              <br><br><br>
              
              <div class="col-lg-3">
                <div class="service_block">
                <div class="service_icon delay-03s animated wow zoomIn"> <span><i class="fa fa-android"></i></span> </div>
                </div>
              </div>
              <h3>TECHNICAL SUPPORT</h3>
              <p>Helpdesk, IT professionals & business consultants are just a chat away.</p>
              <br><Br><br>

              <div class="col-lg-3">
                <div class="service_block">
                <div class="service_icon delay-03s animated wow zoomIn"> <span><i class="fa fa-android"></i></span> </div>
                </div>
              </div>
              <h3>EXPANDABLE AND SCALABLE SYSTEMS</h3>
              <p>Integrate with our other systems; expand the system as your business grows.</p> 
              <br><br><br>

              <div class="col-lg-3">
                <div class="service_block">
                <div class="service_icon delay-03s animated wow zoomIn"> <span><i class="fa fa-android"></i></span> </div>
                </div>
              </div>
              <h3>EASY TO USE AND RELIABLE</h3>
              <p>Easy to understand. Reliability of information are verifiable through audit trails and supporting details.</p>  

         </div>
            
          </div>
        
        </div>
        </div>
      </div>
  </section>  
  <!--Aboutus-->

  <div class="container">
    <ul class="pagination">
      <li><a href="{{url('Learnmore')}}">1</a></li>
      <li><a href="{{url('Learnmore/Missionvision')}}">2</a></li>
      <li><a href="{{url('Learnmore/Missionvision/Corporateprofile')}}">3</a></li>
    </ul>
                

</div>
</body>
@stop