@extends('welcome')
@section('title', 'Blog')
@section('content')
<section id="center" class="center_list clearfix"> 
    <div class="container">
     <div class="row">
      <div class="center_list_1 text-center clearfix">
       <div class="col-sm-12">
         <h5 class="mgt"><a href="#">Home</a> / Blog Page </h5>
       </div>
      </div>
     </div>
    </div>
  </section>
  
  <section id="list_pg" class="clearfix"> 
    <div class="container">
     <div class="row">
      <div class="list_pg_1 clearfix">
       <div class="col-sm-3">
         <div class="list_pg_1l clearfix">
            
            < class="product_1i clearfix">
         <h5 class="mgt">SEARCH</h5>
        <div class="input-group">
                      <input type="text" class="form-control form_2" placeholder="Search Here...">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">
                              <i class="fa fa-search"></i></button>
                      </span>
        </div/>
        <
            <div class="product_1i1 clearfix">
         <h5 class="mgt">TAGS</h5>
         <ul>
           <li><a href="/blog_detail">Beauty</a></li>
           <li><a href="/blog_detail">Diamond</a></li>
           <li><a href="/blog_detail">Men</a></li>
           <li><a href="/blog_detail">Women</a></li>
           <li><a href="/blog_detail">Gold</a></li>
           <li><a href="/blog_detail">Silver</a></li>
           <li><a href="/blog_detail">Pearls</a></li>
           <li><a href="/blog_detail">Rings</a></li>
           <li><a href="/blog_detail">Jewelry</a></li>
           </ul>
        </div>
            
            <div class="blog_1li2 clearfix">
          <h5 class="mgt">CATEGORIES</h5>
          <h6><a href="/blog_detail"><i class="fa fa-circle-o"></i> SITE TEMPLATE<span class="pull-right">(09)</span></a></h6>
          <h6><a href="/blog_detail"><i class="fa fa-circle-o"></i> CREATIVE PSD<span class="pull-right">(10)</span></a></h6>
          <h6><a href="/blog_detail"><i class="fa fa-circle-o"></i> USER INTERFACE<span class="pull-right">(08)</span></a></h6>
          <h6 class="pdb border_none"><a href="/blog_detail"><i class="fa fa-circle-o"></i> PHOTOSHOP DESIGNS<span class="pull-right">(08)</span></a></h6>
        </div>
           <div class="product_1i clearfix">
         <h5 class="mgt">OUR GALLERY</h5><br>
        <div class="carousel slide" id="myCarousel_2">
                                      <!-- Carousel items -->
          <div class="carousel-inner">
              <div class="item" data-slide-number="0">
               <img src="img/23.jpg" alt="abc" class="iw mgt">
              </div>
  
              <div class="item active" data-slide-number="1">
               <img src="img/24.jpg" alt="abc" class="iw mgt">
              </div>
  
              <div class="item" data-slide-number="2">
               <img src="img/25.jpg" alt="abc" class="iw mgt">
              </div>
  
          </div><!-- Carousel nav -->
          <a class="left carousel-control" href="#myCarousel_2" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>                                       
          </a>
          <a class="right carousel-control" href="#myCarousel_2" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>                                       
          </a>                                
       </div>
        </div>
         </div>
       </div>
       <div class="col-sm-9">
          <div class="blog_h_1 mgt clearfix">
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="/blog_detail"><img src="img/23.jpg" class="iw" alt="abc"></a>
                 <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="/blog_detail"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="/blog_detail">Labor Depar rules pro as tweaks overtime</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="/blog_detail"><img src="img/24.jpg" class="iw" alt="abc"></a>
                 <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="blog_detail.html"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="/blog_detail">Starbucks invests $100M in startups</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="blog_detail.html"><img src="img/25.jpg" class="iw" alt="abc"></a>
                <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="/blog_detail"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                <h4><a href="/blog_detail">New restaurant in town that Looking that</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
         </div>
          <div class="blog_h_1 clearfix">
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="/blog_detail"><img src="img/33.jpg" class="iw" alt="abc"></a>
                 <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="/blog_detail"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="/blog_detail">Labor Depar rules pro as tweaks overtime</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="blog_detail.html"><img src="img/34.jpg" class="iw" alt="abc"></a>
                 <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="/blog_detail"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="/blog_detail">Starbucks invests $100M in startups</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="/blog_detail"><img src="img/35.jpg" class="iw" alt="abc"></a>
                <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="/blog_detail"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                <h4><a href="/blog_detail">New restaurant in town that Looking that</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
         </div>
          <div class="blog_h_1 clearfix">
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="/blog_detail"><img src="img/36.jpg" class="iw" alt="abc"></a>
                 <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="/blog_detail"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="/blog_detail">Labor Depar rules pro as tweaks overtime</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="/blog_detail"><img src="img/37.jpg" class="iw" alt="abc"></a>
                 <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="blog_detail.html"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="/blog_detail">Starbucks invests $100M in startups</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="/blog_detail"><img src="img/38.jpg" class="iw" alt="abc"></a>
                <h6><a href="/blog_detail"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="/blog_detail"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="/blog_detail"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                <h4><a href="/blog_detail">New restaurant in town that Looking that</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <h5><a class="button mgt" href="/blog_detail">READ MORE</a></h5>
               </div>
              </div>
         </div>
          <div class="pages clearfix text-center">
           <ul>
              <li><a href="blog_detail.html"><i class="fa fa-chevron-left"></i></a></li>
              <li class="act"><a href="blog_detail.html">1</a></li>
              <li><a href="/blog_detail">2</a></li>
              <li><a href="/blog_detail">3</a></li>
              <li><a href="/blog_detail">4</a></li>
              <li><a href="/blog_detail">5</a></li>
              <li><a href="/blog_detail">6</a></li>
              <li><a href="/blog_detail"><i class="fa fa-chevron-right"></i></a></li>
             </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
  </section>

  @endsection