<!DOCTYPE html>
<html lang="en">
  <!-- Font Awesome CDN (V5.15.4) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  @include('public_site.include.header')

<body>

<section id="top"
@include('public_site.include.top')
</section>

<section id="header" class="clearfix">
@include('public_site.include.nav')
</section>

@yield('content')

@include('public_site.include.footer')
	
@include('public_site.include.bottom')

</body>
 
</html>
