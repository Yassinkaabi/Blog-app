<head>
   <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/x-icon">
</head>

      <div class="header_section">
               <x-nav/>
               <!-- banner section start --> 
               <div class="container-fluid">
                  <div class="banner_section layout_padding">
                     <h1 class="banner_taital">BIENVENUE DANS  <br>NOTRE PSC</h1>
                     <div id="my_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="image_main">
                                 <div class="container">
                                    <img src="images/img-1.jpg" class="image_1">
                                    <div class="contact_bt"><a href="{{ route('blog') }}"> Savoir plus</a></div>
                                 </div>
                              </div>
                            </div>
                            <div class="carousel-item">
                               <div class="image_main">
                                  <div class="container">
                                     <img src="images/img-2.jpg" class="image_1">
                                     <div class="contact_bt"><a href="{{ route('blog') }}"> Savoir plus</a></div>
                                  </div>
                               </div>
                            </div>
                            <div class="carousel-item">
                               <div class="image_main">
                                  <div class="container">
                                     <img src="images/img-3.jpg" class="image_1">
                                     <div class="contact_bt"><a href="{{ route('blog') }}">Savoir plus</a></div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                         <i class="fa fa-angle-left"></i>
                         </a>
                         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                         <i class="fa fa-angle-right"></i>
                         </a>
                      </div>
                   </div>
                </div>
                <!-- banner section end --> 
                <!-- blog section start -->
                <div class="container">
                    <div class="touch_setion">
                       <div class="box_main ">
                          <div class="image_2 active">
                             <a href="{{ route('about') }}" class="who_text active">QUI SUIS JE</a>
                          </div>
                       </div>
                       <div class="box_main">
                          <div class="image_3">
                             <a href="{{ route('contact') }}" class="who_text">ENTRER EN CONTACT</a>
                          </div>
                       </div>
                       <div class="box_main">
                          <div class="image_4">
                             <a href="https://www.facebook.com/Vesosakouda/?locale=fr_FR" class="who_text">Facebook</a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- about section start --> 
                 {{-- <div class="about_section layout_padding">
                    <div class="container">
                       <div class="row">
                        @foreach ($data as $post)
                          <div class="col-lg-8 col-sm-12">
                             <div class="about_img"><img src="{{ asset('images/' . $post->image) }}"></div>
                             <div class="like_icon"><img src="images/like-icon.png"></div>
                             <p class="post_text">Post By <span>{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                             <h2 class="most_text">{{ $post->title }}</h2>
                             <p class="lorem_text">{{ $post->content }}</p>
                             <div class="social_icon_main">
                                <div class="social_icon">
                                   <ul>
                                      <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                      <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                      <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                   </ul>
                                </div>
                                <div class="read_bt"><a href="#">Read More</a></div>
                             </div>
                          </div>
                          @endforeach
                       </div>
                    </div>
                 </div> --}}
                 <!-- about section end --> 
                 <!-- blog section start --> 
                 <div class="about_section layout_padding">
                    <div class="container">
                       <div class="row">
                        @foreach ($limitedData as $post)
                           <div class="col-lg-8 col-sm-12" style="margin-bottom: 100px;">
                              <div class="about_img">
                                 <a href="{{ route('show',$post->id) }}">
                                 <img src="{{ asset('images/' . $post->image) }}">
                                 </a>
                              </div>
                              <div class="like_icon"><img src="images/like-icon.png"></div>
                              <p class="post_text">Post By <span>{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                              <h2 class="most_text">{{ $post->title }}</h2>
                              <p class="lorem_text">{{ $post->content }}</p>
                              <div class="social_icon_main" style="padding-bottom:40px"></div>
                              <div class="read_bt"><a href="{{ route('show',$post->id) }}">Savoir plus</a></div>
                           </div>
                           @endforeach
                        </div>

                       </div>
                    </div>
                 </div>
                 <div class="contact_section layout_padding">
                    <div class="container">
                       <div class="row">
                          <div class="col-md-6">
                             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators" style="position: absolute;top:-50px;">
                                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">1</li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="1"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">2</li>
                                   <li data-target="#carouselExampleIndicators" data-slide-to="2"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">3</li>
                                </ol>
                                <div class="carousel-inner">
                                   <div class="carousel-item active">
                                      <div class="contact_img">
                                       <img src="{{ asset('images/contact1.png') }}" alt="">
                                      </div>
                                   </div>
                                   <div class="carousel-item">
                                      <div class="contact_img">
                                       <img src="{{ asset('images/contact2.png') }}" alt="">
                                      </div>
                                   </div>
                                   <div class="carousel-item">
                                      <div class="contact_img">
                                       <img src="{{ asset('images/contact3.png') }}" alt="">
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6" style="display:flex;align-items:center;justify-content:center;flex-direction:column;">
                                <div class="contact_taital" style="text-align: center;">voulez-vous enregistrer votre idée cliquez ici </div>
                                <a ><img src="https://www.gifsanimes.com/data/media/111/fleche-image-animee-0187.gif" border="0" style="color:rgb(54, 128, 117)" alt="fleche-image-animee-0187" /></a>
                                <div class="send_bt" ><a href="{{ route('register') }}" style="border-radius: 5px">S'inscrire</a></div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- contact section end -->
               <x-footer/>
                 <!-- Javascript files-->
                 <script src="js/jquery.min.js"></script>
                 <script src="js/popper.min.js"></script>
                 <script src="js/bootstrap.bundle.min.js"></script>
                 <script src="js/jquery-3.0.0.min.js"></script>
                 <script src="js/plugin.js"></script>
                 <!-- sidebar -->
                 <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
                 <script src="js/custom.js"></script>
                 <!-- javascript --> 
                 <script src="js/owl.carousel.js"></script>
                 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
             </div>
      </div>