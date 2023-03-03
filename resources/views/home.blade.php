@include ('frontin.app')
@include ('frontin.header')





   <!-- slider start-->
   <div class="slideshow-container">

      <div class="mySlides">
         <img src="{{asset('img/bannerrr1.png')}}" style="width:100%; height: 400px;">


      </div>

      <div class="mySlides">

         <img src="{{asset('img/bannerr2.png')}}" style="width:100%; height: 400px;">

      </div>

      <div class="mySlides">


         <img src="{{asset('img/bannerr3.png')}}" style="width:100%; height: 400px;">
      </div>



      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

   </div>
   <br>

   <div class="slider-btn" style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
   </div>
   <!-- Slider End -->

   <!-- About Us Start-->
   <section class="aboutsec">
      <div class="container-fluid">
         <div class="about-gov">
            <div class="row">
               <div class="col-md-5 p-4">
                  <div class="abo-img">

                     <img src="{{asset('img/tax.png')}}">
                  </div>
               </div>
               <div class="col-md-7 mt-3 mt-md-0">
                  <div class="border_1 border-primary border-2 p-4 notifications">
                     <div class="abo-txt">
                        <h2><b>About Us</b></h2>

                     </div>
                     <!-- 
                     <marquee class="about-hite-marquee" width="" direction="up" scrollamount="3" height="150"
                        onmouseover="this.stop();" onmouseout="this.start();"> -->
                     <span class="_abour-text">


                        1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        2. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?<br /><br />
                        <!-- 
                        3. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                           <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        4. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />

                        5. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        6. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        7. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        8.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        9.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        10.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam
                        optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat?
                        <br /><br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, earum animi. Quibusdam optio
                        molestias, fuga facere cum dolore quo qui dicta repudiandae assumenda modi dolor rerum
                        placeat
                        eveniet, aliquam fugiat? -->
                     </span>
                     <!-- </marquee> -->
                  </div>
               </div>
               <!-- <div class="col-md-6">
                  <div class="abo-txt mt-5">
                     <h2>About Us</h2>
                     <p class="ab-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen.</p>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </section>
   <!-- About Us End-->


   <!-- Marqui? -->



   <!-- Marqui? -->

   <section class="blinks mt-5 mb-5">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-2">
               <div class="latest">
                  <div class="tital">
                     <p>Latest Update</p>
                  </div>
                  <div class="update">
                     <ul class="latest-list">
                        <li><a href="#">Model Code of Conduct-Photo Message <img
                                 src="{{asset('assets/img/new-gif-image.gif')}}"></a><br><span>11/11/2022</span></li>
                        <li><a href="#">Model Code of Conduct-Photo Message <img
                                 src="{{asset('assets/img/new-gif-image.gif')}}"></a><br><span>11/11/2022</span></li>
                        <li><a href="#">Model Code of Conduct-Photo Message <img
                                 src="{{asset('assets/img/new-gif-image.gif')}}"></a><br><span>11/11/2022</span></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a><br><span>11/11/2022</span></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a><br><span>11/11/2022</span></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a><br><span>11/11/2022</span></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a><br><span>11/11/2022</span></li>
                     </ul>
                  </div>

               </div>
            </div>
            <div class="col-md-8 p-0">
               <div class="latest">
                  <div class="tital">
                     <p>Departments List</p>
                  </div>
                  <div class="dep-card">
                     <div class="in-card">
                        <div class="card-img"><img src="{{asset('assets/img/property_tax.jpg')}}"></div>
                        <div class="card-content">
                           <h3>House Tax</h3>
                           <ul class="latest-list">
                              <li><a href="#">DDA</a></li>
                              <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                              <li><a href="#">Property Tax </a></li>
                              <li><a href="#">Registrar Cooperative Societies</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="in-card">
                        <div class="card-img"><img src="{{asset('assets/img/property_tax-1.jpg')}}"></div>
                        <div class="card-content">
                           <h3>Property Tax</h3>
                           <ul class="latest-list">
                              <li><a href="#">DDA</a></li>
                              <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                              <li><a href="#">Property Tax </a></li>
                              <li><a href="#">Registrar Cooperative Societies</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="in-card">
                        <div class="card-img"><img src="{{asset('assets/img/property_tax-2.jpg')}}"></div>
                        <div class="card-content">
                           <h3>House Hold</h3>
                           <ul class="latest-list">
                              <li><a href="#">DDA</a></li>
                              <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                              <li><a href="#">Property Tax </a></li>
                              <li><a href="#">Registrar Cooperative Societies</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="in-card">
                        <div class="card-img"><img src="{{asset('assets/img/property_tax-3.jpg')}}"></div>
                        <div class="card-content">
                           <h3>Water Tax</h3>
                           <ul class="latest-list">
                              <li><a href="#">DDA</a></li>
                              <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                              <li><a href="#">Property Tax </a></li>
                              <li><a href="#">Registrar Cooperative Societies</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-2">
               <div class="latest">
                  <div class="tital">
                     <p>Notice Board</p>
                  </div>
                  <div class="update">
                     <ul class="latest-list">
                        <li><a href="#">Model Code of Conduct-Photo Message <img src="{{asset('assets/img/new-gif-image.gif')}}"></a>
                        </li>
                        <li><a href="#">Model Code of Conduct-Photo Message <img src="{{asset('assets/img/new-gif-image.gif')}}"></a>
                        </li>
                        <li><a href="#">Model Code of Conduct-Photo Message <img src="{{asset('assets/img/new-gif-image.gif')}}"></a>
                        </li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                        <li><a href="#">Model Code of Conduct-Photo Message</a></li>
                     </ul>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>










   <!-- mission  start-->
   <!-- <section class="testimonialsSec services-diff-counter counter-sec">
      <div class="container-fluid">
         <div class="row mt-5 mission">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4 text-center">
               <div class="service_image4 box-icon-modern text-center">
                  <img alt="" class="img-fluid" src="img/mision.png">
                  <h5 class="head_color">Mission</h5>
                  <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                     Ipsum
                     has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                     type
                     and scrambled it to make a type specimen.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4 text-center">
               <div class="service_image4 box-icon-modern text-center">
                  <img alt="" class="img-fluid" src="img/vision.png">
                  <h5 class="head_color">Vision</h5>
                  <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                     Ipsum
                     has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                     type
                     and scrambled it to make a type specimen.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4 text-center">
               <div class="service_image4 box-icon-modern text-center">
                  <img alt="" class="img-fluid" src="img/value.png">
                  <h5 class="head_color">Our values</h5>
                  <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                     Ipsum
                     has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                     type
                     and scrambled it to make a type specimen.
                  </p>
               </div>
            </div>

         </div>
      </div>
   </section> -->
   <!-- <section class="testimonialsSec services-diff-counter counter-sec">
      <div class="container">
         <div class="row mt-5 mission">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4 text-center">
               <div class="service_image4 box-icon-modern text-center">
                  <img alt="" class="img-fluid" src="img/mision.png">
                  <h5 class="head_color">Mission</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                     and scrambled it to make a type specimen.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4 text-center">
               <div class="service_image4 box-icon-modern text-center">
                  <img alt="" class="img-fluid" src="img/vision.png">
                  <h5 class="head_color">Vision</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                     and scrambled it to make a type specimen.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4 text-center">
               <div class="service_image4 box-icon-modern text-center">
                  <img alt="" class="img-fluid" src="img/value.png">
                  <h5 class="head_color">Our values</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                     and scrambled it to make a type specimen.
                  </p>
               </div>
            </div>

         </div>
      </div>
   </section> -->
   <!-- mission end -->


   <!-- Objective start-->
   <section>
      <div class="abo-txt">
         <h2><b>Objective</b></h2>

      </div>
      <div class="container-fluid mt-5">
         <div class="object">

            <!-- <h1>Objective</h1> -->

            <style>
               /* .amit:hover .col-8 p {
                  color: #fff;
               }

               .amit:hover ._img-1 {
                  display: none;
               } */
            </style>
            <div class="row">
               <div class="col-md-4">
                  <div class="obj-t">
                     <div class="row amit">

                        <div class="col-3 text-center">
                           <div class="_img-1"><img src="{{asset('img/goal.png')}}" alt=""></div>
                           <div class="_img-2"><img src="{{asset('img/goal-2.png')}}" alt=""></div>
                        </div>
                        <div class="col-9">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj-t">
                     <div class="row">

                        <div class="col-3 text-center">
                           <div class="_img-1"><img src="{{asset('img/goaal.png')}}" alt=""></div>
                           <div class="_img-2"><img src="{{asset('img/goaal-2.png')}}" alt=""></div>
                        </div>
                        <div class="col-9">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj-t">
                     <div class="row">

                        <div class="col-3 text-center">
                           <div class="_img-1"><img src="{{asset('img/goal-b.png')}}" alt=""></div>
                           <div class="_img-2"><img src="{{asset('img/goal-b-2.png')}}" alt=""></div>
                        </div>
                        <div class="col-9">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                     </div>

                  </div>
               </div>


            </div>
            <div class="row mt-4">
               <div class="col-md-4">
                  <div class="obj-t">
                     <div class="row">

                        <div class="col-3 text-center">
                           <div class="_img-1"><img src="{{asset('img/goal.png')}}" alt=""></div>
                           <div class="_img-2"><img src="{{asset('img/goal-2.png')}}" alt=""></div>
                        </div>
                        <div class="col-9">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj-t">
                     <div class="row">

                        <div class="col-3 text-center">
                           <div class="_img-1"><img src="{{asset('img/goal.png')}}" alt=""></div>
                           <div class="_img-2"><img src="{{asset('img/goal-2.png')}}" alt=""></div>
                        </div>
                        <div class="col-9">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj-t">
                     <div class="row">

                        <div class="col-3 text-center">
                           <div class="_img-1"><img src="{{asset('img/goal.png')}}" alt=""></div>
                           <div class="_img-2"><img src="{{asset('img/goal-2.png')}}" alt=""></div>
                        </div>
                        <div class="col-9">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                     </div>

                  </div>
               </div>


            </div>
         </div>
      </div>
   </section>
   <!-- <section>
      <div class="container">
         <div class="object">
            <h1>Objective</h1>
            <div class="row">
               <div class="col-md-4">
                  <div class="obj">
                     <img src="img/goal.png" alt="">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj">
                     <img src="img/goal.png" alt="">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj">
                     <img src="img/goal.png" alt="">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj">
                     <img src="img/goal.png" alt="">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj">
                     <img src="img/goal.png" alt="">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="obj">
                     <img src="img/goal.png" alt="">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- Objective end-->

   <!-- slider -->
   <!-- <section>
      <div class="container">
         <div class="foot-sli">
            <div class="row ab">
               <div class="col-md-2">
                  <div class="sli-img">
                     <img src="img/7.png" alt="">
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="sli-img">
                     <img src="img/2.png" alt="">
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="sli-img">
                     <img src="img/3.png" alt="">
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="sli-img">
                     <img src="img/4.png" alt="">
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="sli-img">
                     <img src="img/5.png" alt="">
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="sli-img">
                     <img src="img/6.png" alt="">
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section> -->


   @include ('frontin.footer')



   
   <!-- footer end -->
<!-- Modal of login start-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Sign In</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <div class="center">
         <form method="post">
        <div class="txt_field">
          <input type="email" required>
           <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password</div>
        <input type="submit" value="Login">
        <!-- <div class="sigunup_link">
          Not a member?<a href="#">Signup</a>
        </div> -->
      </form>      
   </div>
</div>
   <!--    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>


  <!-- modal of login end -->
   <!------------------bootstrap-script----------------->
   <!--    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
   <!------------------bootsrap-script-end----------------->
   <!------------------Owl-carousel----------------->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!------------------Owl-carousel-end----------------->
   <!-- hshrg -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="assets/js/flexslider.js"></script>
   <script src="assets/js/owl.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!--  <script src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/js/switcher1.js"></script> -->
   <!--    <script src="https://commerce.gov.in/wp-content/themes/m-commerce/assets/js/custom.js"></script> -->

   <!--    <script type='text/javascript'
      src='https://commerce.gov.in/wp-content/themes/m-commerce/js/navigation.js?ver=20151215'
      id='m-commerce-navigation-js'></script> -->
   <!--    <script type='text/javascript'
      src='https://commerce.gov.in/wp-content/themes/m-commerce/js/skip-link-focus-fix.js?ver=20151215'
      id='m-commerce-skip-link-focus-fix-js'></script> -->
   <script type='text/javascript' id='heateor_sss_sharing_js-js-before'>
      function heateorSssLoadEvent(e) { var t = window.onload; if (typeof window.onload != "function") { window.onload = e } else { window.onload = function () { t(); e() } } }; var heateorSssSharingAjaxUrl = 'https://commerce.gov.in/wp-admin/admin-ajax.php', heateorSssCloseIconPath = 'https://commerce.gov.in/wp-content/plugins/sassy-social-share/public/../images/close.png', heateorSssPluginIconPath = 'https://commerce.gov.in/wp-content/plugins/sassy-social-share/public/../images/logo.png', heateorSssHorizontalSharingCountEnable = 0, heateorSssVerticalSharingCountEnable = 0, heateorSssSharingOffset = -10; var heateorSssMobileStickySharingEnabled = 0; var heateorSssCopyLinkMessage = "Link copied."; var heateorSssUrlCountFetched = [], heateorSssSharesText = 'Shares', heateorSssShareText = 'Share'; function heateorSssPopup(e) { window.open(e, "popUpWindow", "height=400,width=600,left=400,top=100,resizable,scrollbars,toolbar=0,personalbar=0,menubar=no,location=no,directories=no,status") }; var heateorSssWhatsappShareAPI = "web";
   </script>
   <!-- dbksg -->
   <!-- slider -->
   <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
         showSlides(slideIndex += n);
      }

      function currentSlide(n) {
         showSlides(slideIndex = n);
      }

      function showSlides(n) {
         let i;
         let slides = document.getElementsByClassName("mySlides");
         let dots = document.getElementsByClassName("dot");
         if (n > slides.length) { slideIndex = 1 }
         if (n < 1) { slideIndex = slides.length }
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slideIndex - 1].style.display = "block";
         dots[slideIndex - 1].className += " active";
      }
   </script>
   <script>
      const sectionTitleZoom = document.querySelectorAll(".section-title");
      const zoomContainer = document.querySelectorAll(".swiper-zoom-container");
      const swiperSlide = document.querySelectorAll(".swiper-zooms");

      for (let i = 0; i < zoomContainer.length; i++) {
         zoomContainer[i].addEventListener("click", () => {
            for (let i = 0; i < swiperSlide.length; i++) {
               if (swiperSlide[i].classList.contains("swiper-slide-zoomed")) {
                  sectionTitleZoom[i].classList.add("active");
               } else {
                  sectionTitleZoom[i].classList.remove("active");
               }
            }

         })
      }
   </script>
   <script>
      $(function () {
         $('marquee').mouseover(function () {
            $(this).attr('scrollamount', 0);
         }).mouseout(function () {
            $(this).attr('scrollamount', 5);
         });
      });
   </script>

   <!-- slider end -->
</body>

</html>