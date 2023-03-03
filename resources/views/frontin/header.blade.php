<header id="en" class="">
      <div class="header-top  header-top-desktop display-none-mobile">
         <div class="container">
            <div class="grid grid-space-between grid-align-center">
               <div class="header-top-left grid grid-align-center">
                  Welcome to Save Environment
                  <ul class="grid grid-justify-flex-center social-icon grid-align-center">
                     <li><a href="#" class="third-party-ex" title="External site that opens in a new window"
                           target="_blank"><img
                              src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/images/facebook.svg"
                              alt="Facebook"></a></li>
                     <li><a href="#" class="third-party-ex" title="External site that opens in a new window"
                           target="_blank"><img
                              src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/images/twitter.svg"
                              alt="Twitter"></a></li>
                     <li><a href="#" class="third-party-ex" title="External site that opens in a new window"
                           target="_blank"><img
                              src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/images/instagram-new.svg"
                              alt="Instagram"></a></li>
                  </ul>
               </div>
               <div class="header-top-right grid grid-align-center">
                  <div class="screen-reader-access-redirect"><a href="#" title="Screen reader access"> Screen reader
                        access </a></div>
                  <div class="skip-main-content"><a href="#" title="Skip to Main content"> Skip to Main content </a>
                  </div>
                  <!--   <div class="color-change"><a href="javascript:void(0)" title="Color toggle button"><span><img src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/images/color-change.svg" alt="Color toggle"></span></a></div> -->
                  <div class="font-change-change grid grid-align-center">
                     <a onclick="set_font_size('increase')" href="javascript:void(0);" title="Increase font size"> +A
                     </a>
                     <a onclick="set_font_size()" href="javascript:void(0);" title="Reset font size"> A </a>
                     <a onclick="set_font_size('decrease')" href="javascript:void(0);" title="Decrease font size"> -A
                     </a>
                  </div>
                  <div class="language-change language-change-desktop">

                     <div class="select-drp" style="color:#fff!important;">
                        <ul>
                           <li class="en current"><a href="#">English</a></li>
                           <li class="hi"><a href="#">Hindi</a></li>
                        </ul>
                        <span></span>
                     </div>
                  </div>
                  <div class="language-change language-change-desktop">

                  <!-- @if(Route::has('admin.login'))
                                <a href="{{ route('admin.login') }}" class="py-2 px-6 flex hover:text-blue-500">Admin</a>

                        @endif -->
                     <!-- Button trigger modal -->
                     @if(Route::has('admin.login'))
                     <a href="{{ route('admin.login') }}" type="button" class="btn oran" style="height:30px;">
                        Login 
    </a>
    @endif 

                     <!-- Modal -->
                   
                  </div>



                  <!-- Modal -->

</div>


                  <!-- Mobile Language -->
                  <div class="language-change language-change-mobile"> </div>
                  <!-- End mobile language Here -->
               </div>
            </div>
         </div>
      </div>
      <!-- end of header top -->
      <!-- Start Mobile header -->
      <!--<div class="header-top header-top-mobile">
            <div class="container">
               <div class="grid grid-space-between grid-align-center">
                  <div class="header-top-left">
                     <p>Welcome to Department of Commerce, <br class="gov-mobile">Government of India : 91-11-23062261</p>
                  </div>
               </div>
            </div>
            </div> -->
      <!-- End Mobile -->
      <div class="header-bottom">
         <div class="container">
            <div class="grid grid-space-between">
               <div class="logo">
                  <h2><span class="logo_N">S</span>ave <span class="logo_N">E</span>nvironment</h2>
                  <!-- <img src="img/logo.png"> -->
               </div>
               <!-- end of header logo-->
               <!-- start of minister slider -->
               <div class="top-minister top-minister-desktop grid grid-align-center">
                  <div class="minister-wrapper grid grid-align-center">
                     <div class="grid grid-align-center">
                        <div class="azadi-image no-post top-img">
                           <img src="{{asset('img/splash_screens.png')}}" alt="">
                           <!--  <img src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/images/120w_75_azadi.png" alt="75_azad"> -->
                        </div>
                        <div class="">
                           <!-- <div class="minister-name1">“जल ही जीवन है”</div> -->

                        </div>

                     </div>
                     <div class="grid grid-align-center">
                        <div class="azadi-image no-post top-img">
                           <img src="{{asset('img/splash_screens-1.png')}}" alt="">
                           <!--  <img src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/images/120w_75_azadi.png" alt="75_azad"> -->
                        </div>
                        <div class="">
                           <!-- <div class="minister-name1">“जल ही जीवन है”</div> -->

                        </div>

                     </div>
                     <div class="grid grid-align-center">
                        <div class="azadi-image no-post top-img">
                           <img src="{{asset('img/splash_screens-3.png')}}" alt="">
                           <!--  <img src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/images/120w_75_azadi.png" alt="75_azad"> -->
                        </div>
                        <div class="">
                           <div class="minister-name1">
                              <!-- “स्वच्छ भारत अभियान” -->
                           </div>

                        </div>

                     </div>
                  </div>
               </div>


               <!-- logo right mobile wrapper end here-->
            </div>
         </div>
         <!-- end of top minister -->
      </div>
      <!-- end of header bottom -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary-2">
         <div class="container">
            <a class="navbar-brand" href="#">
               <ul class="navbar-nav ms-auto">
                
                  <div class="box">
                     <div class="container-2">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <input type="search" id="search" placeholder=" " />
                     </div>
                  </div>

               </ul>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
               aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
               <ul class="navbar-nav">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/')}}">Home </a> </li>
                  <li class="nav-item"><a class="nav-link" href="{{url('about-us')}}"> About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{url('services')}}"> Services Provided by Us </a></li>
                  <li class="nav-item dropdown has-megamenu">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> User </a>
                     <div class="dropdown-menu megamenu" role="menu" style="    width: 50%;
    margin: 0 auto;">
                        <div class="row g-3">
                           <div class="col-lg-3 col-6">
                              <div class="col-megamenu">
                                 <h6 class="title"> Nagar Nigam</h6>
                                
                              </div> <!-- col-megamenu.// -->
                           </div><!-- end col-3 -->
                           <div class="col-lg-3 col-6">
                              <div class="col-megamenu">
                                 <h6 class="title">Nagar Palika Parishad</h6>
                                 
                              </div> <!-- col-megamenu.// -->
                           </div><!-- end col-3 -->
                           <div class="col-lg-3 col-6">
                              <div class="col-megamenu">
                                 <h6 class="title">Nagar Panchayat</h6>
                                 
                              </div> <!-- col-megamenu.// -->
                           </div>
                           <div class="col-lg-3 col-6">
                              <div class="col-megamenu">
                                 <h6 class="title">Cattonment Board</h6>
                                
                              </div> <!-- col-megamenu.// -->
                           </div><!-- end col-3 -->
                        </div><!-- end row -->
                     </div> <!-- dropdown-mega-menu.// -->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#"> Notices </a></li>
                  <li class="nav-item"><a class="nav-link" href="{{url('/contact-us')}}"> Contact Us </a></li>
               </ul>

            </div> <!-- navbar-collapse.// -->
         </div> <!-- container-fluid.// -->
      </nav>

   </header>
   <section class="marquee-text">
      <div class="container-fluid">
         <div class="row mission">
            <div class="col-lg-12 text-center">
               <marquee width="100%" direction="left" height="150px">
                  <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit !</p>
               </marquee>
            </div>
         </div>
      </div>
   </section>

