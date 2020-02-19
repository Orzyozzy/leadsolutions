@extends('frontend.contact')


@section('content')



<img src="{{url('public/frontend/img/adel.jpg')}}" style="width:100%;">
<div class="bottom-left"></div>
<div class="top-left"></div>
<div class="top-right"></div>
<div class="bottom-right"></div>

<div id="contact-2">
<h2>Contact us</h2>
</div>
<Br><br><br>
</div>


  <div class="framework-1">
    <div class="container">
        <div class="container" id="char">
          <div class="inner_section">
        <div class="row">   
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-15 pull-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d972.9808903282637!2d124.83486952919063!3d6.497944399706227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjknNTIuNiJOIDEyNMKwNTAnMDcuNSJF!5e1!3m2!1sen!2sph!4v1581670716101!5m2!1sen!2sph" width="900" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
              <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left">
              <div class="delay-01s animated fadeInDown wow animated">
                <h3>Koronadal City Office</h3>    
                <br>
                <p>LEADSolutions Consultancy, Inc.</p>
                <br>    
                <p>Door 3, Ilao Apartment, Tandang Sora St.,<br>
                Zone IV, City of Koronadal, South Cotabato</p> 
                <br>
                <p>Phone: (083) 877-5384</p>
                <p>Mobile #: 09437026175</p>
                <p>Email: admin@leadsolutionsinc.net</p> 
        <br>
            </div>
  
           </div>
              
            </div>
          
          </div>
          </div>
        </div>
</div>

          <div class="framework">
          <div class="container">
              <div class="container" id="char">
                <div class="inner_section">
              <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-15 pull-right">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1794.4522502833527!2d125.6147527359987!3d7.086389241446832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96daf3ae91781%3A0xc5d29c9dea1a8da8!2sThe%20LEADSolutions%2C%20Inc.!5e1!3m2!1sen!2sph!4v1581673036103!5m2!1sen!2sph" width="900" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  </div>
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left">
                    <div class="delay-01s animated fadeInDown wow animated">
                      <h3>Davao City Office</h3>    
                      <br>
                      <p>LEADSolutions Consultancy, Inc.</p>
                      <br>    
                      <p>2F Door 8, SNN Realty Building, 55 Iñigo St.,<br>
                          Bo. Obrero, Davao City</p> 
                      <br>
                      <p>  Phone: (082) 327-3564</p>
                      <p>Mobile #: 09437026175</p>
                      <p>Email: admin@leadsolutionsinc.net</p> 
              <br>
                  </div>
                </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
    
            <footer class="section_wrapper" id="contact">
              <div class="container">
                <section class="page_section contact" id="char">
                  <div class="contact_section">
                    <h2>Get in touch</h2>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 wow fadeInLeft">	
                 <div class="contact_info">
                           <img src="{{url('public/frontend/img/gif/animcont.gif')}}">
                                    </div>
                    </div>
                    <div class="col-lg-8 wow fadeInLeft delay-06s">
                      <div class="form">

                        <span class="error userError"></span>
                        <input class="input-text" type="text" name="" placeholder="Your Name *" 
                        id="your-name">

                        <span class="error emailError"></span>
                        <input class="input-text" type="text" name="" placeholder="Your E-mail *" 
                        id="your-email">

                        <span class="errpr messageError"></span>
                        <textarea class="input-text text-area" cols="0" rows="0" 
                        id="your-message" placeholder="Your Message *"></textarea>
                       
                        <button class="input-btn" id="sendMessage">Send Message</button>
                        <div class="form-group" id="success-message"></div>
                      </div>
                    </div>
                  </div>
                </section>
           
            </footer>
            


        
@stop