<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>kingC</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" >

    <!-- Icon Font Stylesheet -->
    <!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"-->
       
   
   </head>

     <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('assets/images/loading.gif')}}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="header_top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <ul class="contat_infoma">
                           <li><i class="fa fa-phone" aria-hidden="true"></i> +33 12345678909</li>
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <ul class="social_icon_top text_align_center  ">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <ul class="contat_infoma text_align_right">
                           <li><a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> kingconstruction@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="header_bottom">
                        <div class="row">
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                              <div class="full">
                                 <div class="center-desk">
                                    <div class="logo">
                                       <a href="index.html">LOGO</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                              <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="navbar-toggler-icon"></span>
                                 </button>
                                 <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                       <li class="nav-item">
                                          <a class="nav-link" href="/">Accueil</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="/#about">A propos</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="{{ route('service') }}">Nos services</a>
                                       </li>
                                       
                                       <li class="nav-item">
                                          <a class="nav-link" href="/#realisation">Nos réalisations</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link active" href="{{ route('contact') }}">Nous contacter</a>
                                       </li>
                                    </ul>
                                 </div>                               
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->


   <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Nos services</h2>
                  </div>
               </div>
            </div>
         </div>
    </div>


                @foreach ($services as $service)
                    
                    @if ($_GET['idService'] == $service->idService)

                  <!-- about -->
                    <div class="about">
                        <div class="container-fluid">
                            <div class="row d_flex">
                            <div class="col-md-7">

                                <div class="titlepage">

                                    <h2>{{ $service->titre }}</h2>
                                        
                                        <span> {{ $service->description }} </span>

                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="about_img">
                                    <figure><img src="{{asset('../assets/images/about.png')}}" alt="about"/></figure>
                                </div>
                            </div>

                            </div>
                        </div>

                    @endif


                @endforeach

     

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


      </div>
    </div>

      <!-- end about -->


  
@include('partials.footer')