@extends('welcome')
@section('title', 'Home')
@section('content')

<section id="center" class="center_home"> 
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
         <!-- Overlay -->
         <div class="overlay"></div>
       
         <!-- Indicators -->
         <ol class="carousel-indicators">
           <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
           <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
           <li data-target="#bs-carousel" data-slide-to="2" class=""></li>
         </ol>
         
         <!-- Wrapper for slides -->
         <div class="carousel-inner">
           <div class="item slides active">
             <div class="slide-1"></div>
             <div class="hero hero_o1 clearfix">
               <div class="col-sm-12">
                   <h1 class="mgt">Nulla Quis Liber</h1>
                   <p class="col_3">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>
                   <h5><a class="button" href="#"> BOOK ORDER</a></h5>
               </div>
             </div>
           </div>
           <div class="item slides">
             <div class="slide-2"></div>
             <div class="hero hero_o2 clearfix">
               <div class="col-sm-12">
                   <h1 class="mgt">Dolo Magna Curs</h1>
                   <p class="col_3">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>
                   <h5><a class="button" href="#"> BOOK ORDER</a></h5>
               </div>
             </div>
           </div>
           <div class="item slides">
             <div class="slide-3"></div>
             <div class="hero hero_o3 text-center clearfix">
               <div class="col-sm-12">
                   <h1 class="mgt">Fusce Nec Dapib </h1>
                   <p class="col_3">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>
                   <h5><a class="button" href="#"> BOOK ORDER</a></h5>
               </div>
           </div>
         </div> 
        </div>
   </div>
   </section>
   
   <section id="offer">
    <div class="container">
     <div class="row">
      <div class="offer_1 clearfix">
       <div class="col-sm-9">
        <div class="offer_1l clearfix">
          <div class="offer_1li clearfix">
           <h1 class="mgt col">Lorem & <br> Porta</h1>
           <h5><a href="#" class="button">View More</a></h5>
          </div>
        </div>
       </div>
       <div class="col-sm-3 space_all">
        <div class="offer_1r clearfix">
         <div class="offer_1ri text-center clearfix">
           <h2 class="mgt col">Semper</h2>
          </div>
        </div>
       </div>
      </div>
      <br>
      {{-- <div class="offer_2 clearfix">
       <div class="col-sm-4">
        <div class="offer_2i text-center clearfix">
         <span><i class="fa fa-truck"></i></span>
         <h4>FREE SHIPPING</h4>
         <p>Curabitur blandit tempus ardua ridiculus doloresed magna.</p>
        </div>
       </div>
       <div class="col-sm-4">
        <div class="offer_2i text-center clearfix">
         <span><i class="fa fa-user"></i></span>
         <h4>ONLINE SUPPORT</h4>
         <p>Curabitur blandit tempus ardua ridiculus doloresed magna.</p>
        </div>
       </div>
       <div class="col-sm-4">
        <div class="offer_2i text-center clearfix">
         <span><i class="fa fa-thumbs-o-up"></i></span>
         <h4>SPECIAL OFFER</h4>
         <p>Curabitur blandit tempus ardua ridiculus doloresed magna.</p>
        </div>
       </div>
      </div> --}}
     </div>
    </div>
   </section>
   <br>
   <section id="list">
    <div class="container">
     <div class="row">
      <div class="list_1 text-center clearfix">
       <div class="col-sm-12">  
        <h2 class="mgt">Special Products</h2>
       </div>
      </div>
      <div class="list_2 clearfix">
       <div id="carousel-example" class="carousel slide" data-ride="carousel">
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                   <div class="item active">
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      {{-- <img src="../public/imgart/aimg/a1.jpg" class="iw" alt="abc"> --}}
                      <img src="imgart/aimg/a2.jpg" class="iw" alt="abc">

                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">New</h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Per Conubia</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      <img src="imgart/aimg/a1.jpg" class="iw" alt="abc">
                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">New</h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Dapibus Diam</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      <img src="imgart/aimg/a3.jpg" class="iw" alt="abc">
                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">Acrylic </h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Eget Nulla</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      <img src="imgart/random/ran2.jpg" class="iw" alt="abc">
                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">Oil</h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Semper Porta</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>
                   </div>
                   <div class="item">
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      <img src="imgart/oimg/o2.jpg" class="iw" alt="abc">
                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">New</h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Per Conubia</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      <img src="imgart/oimg/o3.jpg" class="iw" alt="abc">
                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">New</h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Dapibus Diam</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      <img src="imgart/oimg/o4.jpg" class="iw" alt="abc">
                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">New</h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Eget Nulla</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>
                    <div class="col-sm-3 space_left">
                      <div class="list_2im clearfix">
                       <div class="list_2imi clearfix">
                      <img src="imgart/random/ran5.jpg" class="iw" alt="abc">
                     </div> 
                       <div class="list_2imi1 clearfix">
                      <h5 class="mgt normal">New</h5>
                     </div>
                       <div class="list_2imi2 clearfix">
                          <span><a href="#"><i class="fa fa-eye"></i></a></span>
                         </div>
                    </div>
                      <div class="list_2im1 clearfix">
                       <h4><a href="#">Semper Porta</a></h4>
                       <h5><a class="col_1 bold" href="#"><span>£60.00</span> £50.00</a></h5>
                       <h6><a class="button mgt" href="#">Add To Cart</a></h6>
                      </div>
                    </div>						
                   </div>
               </div>
           </div>
      </div>
      <div class="list_3 text-center clearfix">
               <div class="col-sm-12">
                   <!-- Controls -->
                   <div class="controls">
                       <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example" data-slide="next"></a>
                   </div>
               </div>
           </div>
      <div class="list_4 clearfix">
       <div class="col-sm-4 space_left">
        <div class="list_4i clearfix">
         <div class="list_4i1 clearfix">
          <img src="imgart/oimg/o1.jpg" class="iw" alt="abc">
         </div>
         <div class="list_4i2 text-center clearfix">
          <h4 class="mgt col">Semper Porta</h4>
          <h3 class="col_3">Popular</h3>
          <ul class="social-network social-circle">
               <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
           </ul>
         </div>
        </div>
       </div>
       <div class="col-sm-4 space_left">
        <div class="list_4i clearfix">
         <div class="list_4i1 clearfix">
          <img src="imgart/oimg/o2.jpg" class="iw" alt="abc">
         </div>
         <div class="list_4i2 text-center clearfix">
          <h4 class="mgt col">Dapibus Diam</h4>
          <h3 class="col_3">Latest</h3>
          <ul class="social-network social-circle">
               <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
           </ul>
         </div>
        </div>
       </div>
       <div class="col-sm-4 space_left">
        <div class="list_4i clearfix">
         <div class="list_4i1 clearfix">
          <img src="imgart/oimg/o3.jpg" class="iw" alt="abc">
         </div>
         <div class="list_4i2 text-center clearfix">
          <h4 class="mgt col">Eget Nulla</h4>
          <h3 class="col_3">Best</h3>
          <ul class="social-network social-circle">
               <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
           </ul>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   

   
   <section id="testim">
    <div class="container">
     <div class="row">
      <div class="list_1 text-center clearfix">
       <div class="col-sm-12">  
        <h2 class="mgt">Happy Clients</h2>
       </div>
      </div>
      <div class="testim_1 clearfix">
       <div class="col-sm-4">
        <div class="testim_1i clearfix">
          <div class="testim_1i1 clearfix"><span><i class="fa fa-quote-left"></i></span></div>
          <div class="testim_1i2 clearfix">
            <p class="col_2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="testim_1i2i clearfix">
              <img src="img/26.jpg" class="img-circle" alt="abc">
              <h4 class="col_1 mgt">Eget Nulla <br> <span class="small_tag col_2">Mraketing Manager</span></h4>
            </div>
          </div>
        </div>
       </div>
       <div class="col-sm-4">
        <div class="testim_1i clearfix">
          <div class="testim_1i1 clearfix"><span><i class="fa fa-quote-left"></i></span></div>
          <div class="testim_1i2 clearfix">
            <p class="col_2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="testim_1i2i clearfix">
              <img src="img/27.jpg" class="img-circle" alt="abc">
              <h4 class="col_1 mgt">Semper Porta <br> <span class="small_tag col_2">Mraketing Manager</span></h4>
            </div>
          </div>
        </div>
       </div>
       <div class="col-sm-4">
        <div class="testim_1i clearfix">
          <div class="testim_1i1 clearfix"><span><i class="fa fa-quote-left"></i></span></div>
          <div class="testim_1i2 clearfix">
            <p class="col_2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="testim_1i2i clearfix">
              <img src="img/28.jpg" class="img-circle" alt="abc">
              <h4 class="col_1 mgt">Dapibus Diam <br> <span class="small_tag col_2">Mraketing Manager</span></h4>
            </div>
          </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>

   @endsection