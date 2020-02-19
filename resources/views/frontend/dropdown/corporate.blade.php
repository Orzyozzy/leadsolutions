@extends('frontend.blank')


@section('content')

  

  <div class="row">

  </div>


    <img src="{{url('public/frontend/img/adel.jpg')}}" style="width:100%;">
    <div class="bottom-left"></div>
    <div class="top-left"></div>
    <div class="top-right"></div>
    <div class="bottom-right"></div>
    <div class="centered"></div>


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


<Br><br><br><br><br>
  </div>
</section>




<section><!--Aboutus-->



    <div class="container">
      <div class="container" id="size">
        <div class="inner_section">
      <div class="row">
        
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
          <img src="{{url('public/contents')}}/{{$about->image}}" class="img-circle delay-03s animated wow zoomIn" alt="">
          </div>
    
            <div class=" ol-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
            <div class="delay-01s animated fadeInDown wow animated">
          
              
              <h3>CORPORATE PRINCIPLES</h3><br/>
              <p><b>LEADERSHIP</b> is the core of our corporate values. These fundamentals beliefs guide our actions.</p>
             
              <h4>Loyalty </h4>  
              <p>We aim to develop a strong relationship of trust by consistently providing strong support to the goals and objectives of our client and by constantly promoting the well-being of our people.              <br>
              
              <h4>Excellence in customer service</h4>
              <p>We strive to exceed our clients’ expectations through quality products and superior service.</p>
              
              <h4>Accountability</h4>
              <p>We take personal responsibility for our work and rise above circumstances to honor our commitments.</p>

              <h4>Dedication & passion</h4>
              <p>We love what we do.  We show pride, happiness, and enthusiasm in everything we do.</p>

              <h4>Empowerment</h4>
              <p>People are our most important asset. We give them respect, responsibility and control over their own tools so that they can lead by example.</p>

              <h4>Reliability</h4>
              <p>We build trust by being dependable to deliver results.</p>

              <h4>Synergy in teamwork</h4>
              <p>We work together in harmony. Our combined wisdom, as a whole, is larger than the sum of all individuals’.</p>

              <h4>Honesty & Integrity</h4>
              <p>We observe the highest standards of professional behavior and business ethics. We are transparent and honest in all our interactions.</p>

              <h4>Innovation</h4>
              <p>We are a learning organization. We continuously improve productivity, processes, tasks and ourselves. We work with enthusiasm and intellect, and are driven to surpass what has already been achieved.</p>
              
              <h4>Professionalism</h4>
              <p>Professionalism is the culmination of competence, knowledge, resourcefulness, quality, attitude, and cooperation related to how we provide our professional services. It is essential that we leave our clients a positive view of our entire organization.</p>
          {{-- <h3>Corporate Profile</h3><br/> 
          <p>LEADSolutions, Inc. is a corporation created under the Philippine Law. We specialize in the development of business software packages. ”</p> <br/>
          <p>Our affiliate, the LEADSolutions Consultancy, Inc., another domestic corporation, provides professional, training and consultancy services.</p><br/>
          <P>Our team is composed of business consultants, professional accountants and programmers with collective knowledge in finance, accounting, business processes, control systems, internal quality audit, ISO accreditation, taxation, trainings, IT audit, internal financial audit, and controllership.</p><br/>
          <p>The synergy of our complimentary expertise in various fields and discipline enables us to provide holistic and cost-efficient approaches to improving our client’s internal processes; a guarantee that the software packages we developed can cater the information needs at various levels of management and operations.</p>  
          --}} </div>

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