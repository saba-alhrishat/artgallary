@extends('welcome')
@section('title', 'Login')
@section('content')

<section id="center" class="center_list clearfix"> 
    <div class="container">
     <div class="row">
      <div class="center_list_1 text-center clearfix">
       <div class="col-sm-12">
         <h5 class="mgt"><a href="#">Home</a> / Login </h5>
       </div>
      </div>
     </div>
    </div>
</section>

<section id="login">
   <div class="container">
    <div class="row">
     <div class="register_1 clearfix">
      <div class="col-sm-6 space_left">
       <div class="register_1l clearfix">

{{-- start form login admin --}}

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="register_1li clearfix">
             <h3 class="mgt">Welcome Back to Integer.com</h3>
             <p>Please login to your account to continue.</p>
             <h4 class="c_text">Login to Your Account</h4>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-12 space_all">
              <div class="register_1li1l clearfix">
               <h5>Email Address *</h5>
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
               <h5>Password *</h5>
               <input class="form-control" type="password" name="password" required>
               @error('password')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
             </div>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-12 space_all">
              <div class="register_1li1l clearfix">
               <span class="tick_box"><input class="check" type="checkbox" name="remember"> Remember Me</span>
               <h6>Forgot Password ? <a class="c_text" href="{{ route('password.request') }}">Click Here</a></h6>
              </div>
             </div>
            </div>
            <div class="register_1li1 clearfix">
             <div class="col-sm-12 space_all">
              <h5><button type="submit" class="button">SIGN IN</button></h5>
             </div>
            </div>
        </form>
{{-- end form login admin --}}

       </div>
      </div>
      <div class="col-sm-6">
       <div class="register_1r clearfix">
        <img  src="{{ asset('imgart/himg/h1.jpg') }}" class="iw" alt="Login Image">	 
       </div>
      </div>
     </div>
    </div>
   </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        var secondaryNav = $('.cd-secondary-nav'),
           secondaryNavTopPosition = secondaryNav.offset().top;
           navbar_height = document.querySelector('.navbar').offsetHeight;

            $(window).on('scroll', function(){
                if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
                    secondaryNav.addClass('is-fixed');	
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    secondaryNav.removeClass('is-fixed');
                    document.body.style.paddingTop = '0';
                }
            });	
    });
</script>

@endsection
