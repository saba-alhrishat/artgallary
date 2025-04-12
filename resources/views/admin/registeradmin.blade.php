@extends('welcome')
@section('title', 'Register')
@section('content')
<section id="center" class="center_list clearfix"> 
    <div class="container">
     <div class="row">
      <div class="center_list_1 text-center clearfix">
       <div class="col-sm-12">
         <h5 class="mgt"><a href="#">Home</a> / Register </h5>
       </div>
      </div>
     </div>
    </div>
</section>
  
<section id="register">
   <div class="container">
    <div class="row">
     <div class="register_1 clearfix">
      <div class="col-sm-6 space_left">
       <div class="register_1l clearfix">
{{-- start form register admin --}}

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register_1li clearfix">
             <h3 class="mgt">Welcome to Integer.com</h3>
             <p>Nulla quis sem at nibh imperdiet Duis sagittis ipsum Praesent mauris.</p>
             <h4 class="c_text">Create a New Account</h4>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-6 space_left">
              <div class="register_1li1l clearfix">
               <h5>First Name *</h5>
               <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" required>
               @error('first_name')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
             </div>
             <div class="col-sm-6 space_right">
              <div class="register_1li1l clearfix">
               <h5>Last Name *</h5>
               <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" required>
               @error('last_name')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
             </div>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-12 space_all">
              <div class="register_1li1l clearfix">
               <h5>Enter Your Email *</h5>
               <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
               @error('email')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
             </div>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-12 space_all">
              <div class="register_1li1l clearfix">
               <h5>Enter Your Password *</h5>
               <input class="form-control" type="password" name="password" required>
               @error('password')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
               <h5><button type="submit" class="button">SIGN IN</button></h5>
               <span class="tick_box"><input class="check" type="checkbox" name="remember"> Remember Me</span>
               <h6>Forgot Password ? <a class="c_text" href="{{ route('password.request') }}">Click Here</a></h6>
              </div>
             </div>
            </div>
            <div class="register_1li2 clearfix">
             <h4 class="c_text">Enter Your Business Information</h4>
             <p>
             I am a
             <span><input class="check" type="radio" name="user_type" value="buyer"></span>
             Buyer
             <span><input class="check" type="radio" name="user_type" value="supplier"></span>
             Supplier
             <span><input class="check" type="radio" name="user_type" value="both"></span>
             Both
             @error('user_type')
                 <span class="text-danger">{{ $message }}</span>
             @enderror
             </p>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-6 space_left">
              <div class="register_1li1l clearfix">
               <h5>Add Your Country</h5>
               <select class="form-control" name="country">
                  <option value="">Select Country</option>
                  <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                  <option value="United States" {{ old('country') == 'United States' ? 'selected' : '' }}>America</option>
                  <option value="Australia" {{ old('country') == 'Australia' ? 'selected' : '' }}>Australia</option>
                  <option value="England" {{ old('country') == 'England' ? 'selected' : '' }}>England</option>
               </select>
               @error('country')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
             </div>
             <div class="col-sm-6 space_right">
              <div class="register_1li1l clearfix">
               <h5>Country Code</h5>
               <input class="form-control" placeholder="Type here" type="text" name="country_code" value="{{ old('country_code') }}">
              </div>
             </div>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-6 space_left">
              {{-- <div class="register_1li1l clearfix">
               <h5>Company Name</h5>
               <input class="form-control" type="text" name="company_name" value="{{ old('company_name') }}">
              </div> --}}
             </div>
             <div class="col-sm-6 space_right">
              {{-- <div class="register_1li1l clearfix">
               <h5>Company Type</h5>
               <select class="form-control" name="company_type">
                  <option value="">Select Company Type</option>
                  <option value="Private" {{ old('company_type') == 'Private' ? 'selected' : '' }}>Private</option>
                  <option value="Public" {{ old('company_type') == 'Public' ? 'selected' : '' }}>Public</option>
                  <option value="LLC" {{ old('company_type') == 'LLC' ? 'selected' : '' }}>LLC</option>
               </select>
              </div> --}}
             </div>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-12 space_all">
                 <div class="col-sm-6 space_left">
              <div class="register_1li1l clearfix">
               <h5>Contact</h5>
               <input class="form-control" type="text" name="contact_number" value="{{ old('contact_number') }}">
              </div>
             </div>
                 <div class="col-sm-6 space_right">
              {{-- <div class="register_1li1l clearfix">
               <h5>Office No</h5>
               <input class="form-control" type="text" name="office_number" value="{{ old('office_number') }}">
              </div> --}}
             </div>
             </div>
             {{-- <div class="col-sm-12 space_all">
               <h6 class="term"><input class="check" type="checkbox" name="terms" required> I agree with website <a class="c_text" href="#">Terms and Services</a></h6>
               @error('terms')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
               <h6 class="term"><input class="check" type="checkbox" name="additional_terms"> Lorem ipsum dolor sit amet, consectetur adipiscing elit Integer nec odio Praesent libero Sed cursus ante dapibus diam. </h6>
             </div> --}}
             <div class="col-sm-12 space_all">
               {{-- <h6 class="term"><input class="check" type="checkbox" name="not_robot" required> I'm not a robot </h6>
               @error('not_robot')
                   <span class="text-danger">{{ $message }}</span>
               @enderror --}}
                <h5><button type="submit" class="button">CREATE ACCOUNT</button></h5>
             </div>
            </div>
        </form>
        {{-- end form register admin  --}}
       </div>
      </div>
      <div class="col-sm-6">
       <div class="register_1r clearfix">
        <img  src="{{ asset('imgart/himg/h1.jpg') }}" class="iw" alt="Register Image">	 </div>
      </div>
     </div>
    </div>
   </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        /*****Fixed Menu******/
        var secondaryNav = $('.cd-secondary-nav'),
           secondaryNavTopPosition = secondaryNav.offset().top;
           navbar_height = document.querySelector('.navbar').offsetHeight;
           
            $(window).on('scroll', function(){
                if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
                    secondaryNav.addClass('is-fixed');	
                    document.body.style.paddingTop = navbar_height + 'px';
                    
                } else {
                    secondaryNav.removeClass('is-fixed');
                    document.body.style.paddingTop = '0'
                }
            });	
            
    });
</script>
@endsection