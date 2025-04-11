@extends('welcome')
@section('title', 'Contact Us')
@section('content')
<section id="center" class="center_list clearfix"> 
    <div class="container">
     <div class="row">
      <div class="center_list_1 text-center clearfix">
       <div class="col-sm-12">
         <h5 class="mgt"><a href="#">Home</a> / Contact Us </h5>
       </div>
      </div>
     </div>
    </div>
  </section>
  
  <section id="contact" class="clearfix">
   <div class="container">
    <div class="row">
      <div class="contact_1  clearfix">
       <div class="col-sm-8">
        <div class="contact_1lm clearfix">
        <div class="contact_1l clearfix">
         <h4 class="col_1 mgt">Get in touch</h4>
         <h3>Write Us A Message</h3>
        </div><br>
        <div class="checkout_1l1 clearfix">
         <div class="col-sm-6 space_left">
          <h5>Your Name <span class="col_3">*</span></h5>
          <input class="form-control" type="text">
         </div>
         <div class="col-sm-6 space_left">
          <h5>Your Subjects <span class="col_3">*</span></h5>
          <input class="form-control" type="text">
         </div>
        </div>
        <div class="checkout_1l1 clearfix">
         <div class="col-sm-6 space_left">
          <h5>Your Email<span class="col_3">*</span></h5>
          <input class="form-control" type="text">
         </div>
         <div class="col-sm-6 space_left">
          <h5>Your Phone <span class="col_3">*</span></h5>
          <input class="form-control" type="text">
         </div>
        </div>
        <div class="checkout_1l1 clearfix">
         <div class="col-sm-12 space_left">
          <h5>Your Message <span class="col_3">*</span></h5>
          <textarea class="form-control form_1"></textarea>
          <h6><a class="button" href="#">SEND MESSAGE</a></h6>
         </div>
        </div>
       </div>
       </div>
       <div class="col-sm-4">
        <div class="contact_1rm clearfix">
          <div class="contact_1r1 mgt clearfix">
           
           <h4><span><i class="fa fa-phone"></i></span> Call us Now:</h4>
           <p>+123 456-789-0000</p>
           <p class="mgt">+123 456-789-0000</p>
          </div>
          <div class="contact_1r1 clearfix">
           
           <h4><span><i class="fa fa-phone"></i></span> Email:</h4>
           <p><a href="#">info@gmail.com</a></p>
           <p class="mgt">info@gmail.com</p>
          </div>
          <div class="contact_1r1 clearfix">
           
           <h4><span><i class="fa fa-phone"></i></span>Our Address:</h4>
           <p>LB-61/1, Travel Agency, 15 Grand</p>
           <p class="mgt">Central Terminal, London.</p>
          </div>
        </div>
       </div>
      </div>
      <div class="contact_2 clearfix">
        <div class="col-sm-12">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" style="border:0; height:500px; width:100%;" allowfullscreen=""></iframe>
        </div>
       </div>
    </div>
   </div>
  </section>

  @endsection