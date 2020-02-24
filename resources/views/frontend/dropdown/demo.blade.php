@extends('frontend.contact')


@section('content')

  

  <div class="row">

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

</body>
@stop