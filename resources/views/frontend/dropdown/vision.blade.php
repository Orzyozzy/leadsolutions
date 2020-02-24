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
                      
                
                        
                      </div>
                    
                    </div>
                    </div>
                  </div> 
                  </div>
                  <br><br><br>
              
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