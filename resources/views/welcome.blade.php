@include('partials.header')


         <!-- banner -->
         <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption  banner_po">
                           <div class="row">
                              <div class="col-md-9">
                                 <div class="build_box">
                                    <h1>KING'S CONSTRUCTION</h1>
                                    <p>Innovation et excellence pour construire votre rêve</p>
                                    <a class="read_more conatct_btn" href="#contact" role="button">Nous contacter</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-md-9">
                                 <div class="build_box">
                                    <h1>KING'S CONSTRUCTION</h1>
                                    <p>Innovation et excellence pour construire votre rêve</p>
                                    <a class="read_more conatct_btn" href="#contact" role="button">Nous contacter</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-md-9">
                                 <div class="build_box">
                                    <h1>KING'S CONSTRUCTION</h1>
                                    <p>Innovation et excellence pour construire votre rêve</p>
                                    <a class="read_more conatct_btn" href="#contact" role="button">Nous contacter</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </section>
      </header>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div id="text_hover" class="const text_align_center">
                     <i><img src="{{asset('assets/images/ser1.png')}}" alt="#"/></i>
                     <span>service de construction</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div id="text_hover" class="const text_align_center">
                     <i><img src="{{asset('assets/images/ser3.png')}}" alt="#"/></i>
                     <span>conception architecturale</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div id="text_hover" class="const text_align_center">
                     <i><img src="{{asset('assets/images/ser2.png')}}" alt="#"/></i>
                     <span>location matériaux</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end three_box -->
      <!-- about -->
      <div class="about" id="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>A propos de nous</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</span>
                     <a class="read_more" href="{{route('about')}}"> Lire plus</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="{{asset('assets/images/about.png')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5" id="service">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Nous vous fournissons <span class="text-warning">les meilleurs</span> services de constructions</h1>
        </div>
        <div class="row g-5">

         @foreach($services as $service )

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/images/{{$service->image}}" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-home text-warning"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">{{ $service->titre }}</h4>
                        <p>{{ $service->description }}</p>
                        
                        <a class="btn text-warning" href="{{ route('service',['idService'=>$service->idService]) }}">Lire plus <i class="bi bi-arrow-right"></i></a>

                    
                    </div>
                </div>
            </div>

         @endforeach

        </div>
    </div>
    <!-- Services End -->


      <!-- projects -->
      <div class="projects" id="realisation">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Nos réalisations</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="proj" class="carousel slide projects_ban" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#proj" data-slide-to="0" class="active"></li>
                        <li data-target="#proj" data-slide-to="1"></li>
                        <li data-target="#proj" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img1.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img2.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img2.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img1.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img2.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">
                                             <figure><img src="{{asset('assets/images/project_img1.png')}}" alt="#"/></figure>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3>Reader will be<br> distracted by the readable</h3>
                                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#proj" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#proj" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end projects -->
      <!-- choose -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-7 ">
                  <div class="titlepage">
                     <h2>Pourquoi nous choisir</h2>
                     <p>Notre vision d’entreprise, nos valeurs, notre équipe compétente et dynamique associées a notre matériel moderne et de qualité font de nous un excellent choix pour vous accompagner dans vos projets</p>
                     <div class="award">
                        <div id="awa_ho" class="award_icon text_align_center">
                           <i><img src="{{asset('assets/images/ch1.png')}}" alt="#"/>
                           </i>
                           <strong>clients satisfaits</strong>
                        </div>
                        <!--div id="awa_ho" class="award_icon text_align_center">
                           <i><img src="{{asset('assets/images/ch2.png')}}" alt="#"/></i>
                           <strong></strong>
                        </div-->
                        <div id="awa_ho" class="award_icon text_align_center">
                           <i><img src="{{asset('assets/images/ch3.png')}}" alt="#"/></i>
                           <strong>tarif excellent</strong>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose -->
      <!-- staff -->
      <div class="staff_main">
         <div class="container_staff">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Notre équipe</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the </span>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="staff">
                     <div class="man">
                        <i><img src="{{asset('assets/images/man.png')}}" alt="#"/></i>
                     </div>
                     <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="staff">
                     <div class="man">
                        <i><img src="{{asset('assets/images/man.png')}}" alt="#"/></i>
                     </div>
                     <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="staff">
                     <div class="man">
                        <i><img src="{{asset('assets/images/man.png')}}" alt="#"/></i>
                     </div>
                     <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="staff">
                     <div class="man">
                        <i><img src="{{asset('assets/images/man.png')}}" alt="#"/></i>
                     </div>
                     <div class="social_icon_main">
                        <h4>Available</h4>
                        <ul class="social_icon_staff text_align_center  ">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- end staff -->
      <!--  contact -->
      <div class="contact" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Nous contacter</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 padding_right0">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nom" type="type" name="Nom"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone" type="type" name="Phone">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Valider</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6 padding_left0">
                  <div class="map_main">
                     <div class="map-responsive">
                        <img src="{{asset('assets/images/logo_2.jpeg')}}" style="height:500px;" alt="#"/>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <div class="truck">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 jkhgkj">
                  <div class="truck_img1">
                     <img src="{{asset('assets/images/truck.png')}}" alt="#"/>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="truck_img1">
                     <img src="{{asset('assets/images/jcb.png')}}" alt="#"/>
                  </div>
               </div>
            </div>
         </div>
      </div>




@include('partials.footer')


