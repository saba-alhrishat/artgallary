@extends('welcome')
@section('title', 'Blog Detail')
@section('content')
<section id="center" class="center_list clearfix"> 
    <div class="container">
     <div class="row">
      <div class="center_list_1 text-center clearfix">
       <div class="col-sm-12">
         <h5 class="mgt"><a href="#">Home</a> / Blog Detail </h5>
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
            
            <div class="product_1i clearfix">
         <h5 class="mgt">SEARCH</h5>
        <div class="input-group">
                      <input type="text" class="form-control form_2" placeholder="Search Here...">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">
                              <i class="fa fa-search"></i></button>
                      </span>
        </div>
        </div>
            <div class="product_1i1 clearfix">
         <h5 class="mgt">TAGS</h5>
         <ul>
           <li><a href="blog_detail.html">Beauty</a></li>
           <li><a href="blog_detail.html">Diamond</a></li>
           <li><a href="blog_detail.html">Men</a></li>
           <li><a href="blog_detail.html">Women</a></li>
           <li><a href="blog_detail.html">Gold</a></li>
           <li><a href="blog_detail.html">Silver</a></li>
           <li><a href="blog_detail.html">Pearls</a></li>
           <li><a href="blog_detail.html">Rings</a></li>
           <li><a href="blog_detail.html">Jewelry</a></li>
           </ul>
        </div>
            
            <div class="blog_1li2 clearfix">
          <h5 class="mgt">CATEGORIES</h5>
          <h6><a href="blog_detail.html"><i class="fa fa-circle-o"></i> SITE TEMPLATE<span class="pull-right">(09)</span></a></h6>
          <h6><a href="blog_detail.html"><i class="fa fa-circle-o"></i> CREATIVE PSD<span class="pull-right">(10)</span></a></h6>
          <h6><a href="blog_detail.html"><i class="fa fa-circle-o"></i> USER INTERFACE<span class="pull-right">(08)</span></a></h6>
          <h6 class="pdb border_none"><a href="blog_detail.html"><i class="fa fa-circle-o"></i> PHOTOSHOP DESIGNS<span class="pull-right">(08)</span></a></h6>
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
            <div class="center_detail_1lm clearfix">
              <div class="center_detail_1lm1 mgt clearfix">
         <a href="#"><img src="img/10.jpg" class="iw" alt="abc"></a>
         <h6 class="col_2"><span class="bold col_1">HEADLINES</span> / 3 year ago / <i class="fa fa-calendar col_1"></i> March 29, 2019</h6>
         <h2><a href="#">Tips On How To Get The Maximum Out Of Your Exotic Vacation</a></h2>
         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus.</p>
           <div class="news_pg1 clearfix">
          <img src="img/36.jpg" alt="abc">
          <p class="mgt">Morbi finibus dui nec orci eleifend, at semper eros iaculis. Donec sem nulla, lobortis vitae justo ac, ornare consequat sem. Quisque varius vitae urna id volutpat. Etiam et erat eu mauris vestibulum laoreet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer est metus, vestibulum quis eros id, dapibus molestie turpis. Pellentesque lobortis mi id pellentesque bibendum. Nam sed ipsum auctor, dignissim libero eget, ultricies neque. Maecenas a ligula nec lorem rutrum cursus. In massa ante, dapibus eget ex a, tempus dignissim nulla. Praesent congue tempus nisl eu feugiat.  In id nunc vitae magna tempor suscipit quis eu libero. Cras laoreet velit suscipit orci mattis consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin id nisl sodales, tincidunt purus sagittis, tempus magna. Donec fermentum elit in sapien porta, id interdum urna lacinia. Aenean maximus mauris diam, sit amet vulputate nisi bibendum sed. Sed a dolor turpis.</p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
          <ul class="nav_n">
          <li>Comodous in tempor ullamcorper miaculis.</li>
          <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
          <li>Divamus sit amet purus justo.</li>
          <li>Proin molestie egestas orci ac suscipit risus posuere loremous.</li>
          </ul>
          <blockquote>
          <h4 class="mgt">It is a capital mistake to theorize before one has data. Insensibly one begins to twist facts to suit theories, instead of theories to suit facts.</h4>
          </blockquote>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet commodo ligula eget dolor.</p>
          <h4>Keep Yourself Updated By Following Our Stories From The Whole World</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus.</p>
          <h4>Share With</h4>
          <ul class="social-network social-circle">
              <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
           </ul>
           
          </div>
        </div>
              <div class="center_detail_1lm2 clearfix">
                <div class="list_1 clearfix">
                  <h2 class="mgt">Related Articles</h2>
                </div>
                <div class="blog_h_1 mgt clearfix">
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="#"><img src="img/33.jpg" class="iw" alt="abc"></a>
                 <h6><a href="#"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="#"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="#"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="#">Labor Depar rules pro as tweaks overtime</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="#">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="#"><img src="img/34.jpg" class="iw" alt="abc"></a>
                 <h6><a href="#"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="#"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="#"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                 <h4><a href="#">Starbucks invests $100M in startups</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <h5><a class="button mgt" href="#">READ MORE</a></h5>
               </div>
              </div>
              <div class="col-sm-4 space_left">
               <div class="blog_h_1i clearfix">
                <a href="#"><img src="img/35.jpg" class="iw" alt="abc"></a>
                <h6><a href="#"><i class="fa fa-calendar col_1"></i> JULY 7, 2019</a> <a href="#"><i class="fa fa-user col_1"></i> ADMIN</a>  <a href="#"><i class="fa fa-comment-o col_1"></i> 4</a></h6>
                <h4><a href="#">New restaurant in town that Looking that</a></h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <h5><a class="button mgt" href="#">READ MORE</a></h5>
               </div>
              </div>
         </div>
                <div class="center_detail_1lm2i clearfix">
                  <h4 class="head_bg mgb mgt"><span>LEAVE A COMMENT</span></h4>
                </div>
                <div class="news_pg5 clearfix">
         <textarea placeholder="Type Message:" class="form-control mgt form_1"></textarea>
         <div class="news_pg5i clearfix">
          <div class="col-sm-4 space_left">
           <input placeholder="Name:" class="form-control" type="text">
          </div>
          <div class="col-sm-4 space_all">
           <input placeholder="Email:" class="form-control" type="text">
          </div>
          <div class="col-sm-4 space_right">
           <input placeholder="Website:" class="form-control" type="text">
          </div>
         </div>
         <p><input type="checkbox"> Save my name, email, and website in this browser for the next time I comment.</p>
         <h5 class="text-center"><a class="button block" href="#">Post A Comment</a></h5>
        </div>
              </div>
            </div>
          </div>
      </div>
     </div>
    </div>
  </section>


  @endsection