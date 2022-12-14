<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>Oumshouse</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      

     <!--styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/etlinefont.css')}}">
    <link href="{{asset('css/style.css')}}" type="text/css"  rel="stylesheet"/>


   <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    
	<body  data-spy="scroll" data-target="#main-menu">
 

  <!--Start Page loader -->
  <div id="pageloader">   
        <div class="loader">
          <img src="{{asset('images/progress.gif')}}" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->
   
      
   <!--Start Navigation-->
		<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only"></span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="#">
									<img src="{{asset('images/logo.png')}}" style="width:20%  ;" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">
                                
									<li class="btn btn-primary"><a href="{{('login')}}">Se connecter</a> </li>
									
									
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->

      
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Oum'shouse</div>          
                                <div class="small">votre sugu teliman chez vous!</div>
                                <a href="#details" class="middle btn btn-white">DETAILS</a>
                            </div>       
                        </div>
                        <img src="{{asset('images/slider/shop.webp')}}" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                       
                                <div class="big">Oum'shouse</div>          
                                <div class="small">votre sugu teliman chez vous</div>
                                <a href="#details" class=" middle btn btn-white">DETAILS</a>
                            </div>
                         </div>
                        <img src="{{asset('images/slider/roblue.jpg')}}" alt="">
                    </li>
                    
                    <li class="third">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                              
                                <div class="big">Oum'shouse  </div>          
                                <div class="small">votre sugu teliman chez vous</div>
                                <a href="#details" class="middle btn btn-white">DETAILS</a>
                             </div>
                        </div>
                        <img src="{{asset('images/slider/heureuse.jpg')}}" alt="">
                    </li>
                </ul>
            </div>
        </section>
          <!-- End Slider  -->



  
  <!--Start Section-->
 <section id="details"class="section">
      <div class="container">
          <div class="row"> 
                <div class="col-md-12">
					<div class="content-tab-1">
						<ul class="nav">
							<li class="active">
								<a aria-expanded="true" href="#tab-content-1" data-toggle="tab">
								<i class="fa fa-desktop"></i>
								<h4>Facile</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
							  <li>
								<a aria-expanded="true" href="#tab-content-2" data-toggle="tab">
								<i class="fa fa-cubes"></i>
								<h4>Flexible</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
							
							  
                            
							  <li>
								<a aria-expanded="true" href="#tab-content-5" data-toggle="tab">
								<i class="fa fa-pie-chart"></i>
								<h4>Simple</h4>
								</a>
								<div class="tab-arrow">
								</div>
							</li>
                            
						</ul>
                        
						<div class="tab-content-main">
								<div class="container">
									<div class="tab-content">
										<div class="tab-pane active in" id="tab-content-1">
											
                                           <!-- Features Icon-->	
                                            <div class="col-md-6 margin-bottom-30">
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                    <div class="info">
                                                        <h4>Acheter en tout simplicit??</h4>
                                                        <p>achter et etre livr?? en tout securit??</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-codepen"></i> </div>
                                                    <div class="info">
                                                        <h4>Ajout vos produits a vos panier</h4>
                                                        <p>faites des ajouts a vos panier</p>
                                                    </div>
                                                </div>
                                              
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-heart-o"></i></div>
                                                    <div class="info">
                                                        <h4>Profiter de nos offres</h4>
                                                        <p>profitez de nos offres </p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!--End features Icon-->
                                            
                                           
                                          <!--  Start Carousel-->
                                          <div class="col-md-6">
                                              <div class="tab-carousel">
                                                    <div class="item"><img src="{{asset('images/works/Arrow-Icon01_1 1.png')}}" alt=""></div>
                                                    <div class="item"><img src="{{asset('images/works/01 Online Shopping 6.png')}}" alt=""></div>
                                                    <div class="item"><img src="{{asset('images/works/Arrow-Icon01_1 2.png')}}" alt=""></div>						 
                                              </div>
                                          </div>
                                          <!-- End Carousel-->                                            
                                            
										</div>
                                       <!-- End Tab content 1-->
                                        
                                        
                                       <!-- Start Tab content 2-->
										<div class="tab-pane" id="tab-content-2">
											 
                                            <div class="col-md-4">
                                                 <div class="tab2-services-box">
                                                     <div class="media">
                                                         <img src="{{asset('images/ecom_first_section_pic.webp')}}"  alt="services"/>
                                                     </div>
                                                     
                                                     <div class="services-info">
                                                         <h4>notre histoire</h4>
                                                         <p>L'int??r??t d'utiliser OUMSHOUSE est qu'il a un aspect plus ou moins rapide et simple.</p>
                                                     </div>
                                                     
                                                 </div>
                                            </div>
                                            
                                           <div class="col-md-4">
                                                 <div class="tab2-services-box">
                                                     <div class="media">
                                                         <img src="{{asset('images/images.jpg')}}"  alt="services"/>
                                                     </div>
                                                     
                                                     <div class="services-info">
                                                         <h4>Fleurt?? sur notre plateforme</h4>
                                                         <p>fleurt?? sur notre plate et faite vos choix.</p>
                                                     </div>
                                                     
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                 <div class="tab2-services-box">
                                                     <div class="media">
                                                         <img src="{{asset('images/Paybox.png')}}"  alt="services"/>
                                                     </div>
                                                     
                                                     <div class="services-info">
                                                         <h4>Faites vos achat </h4>
                                                         <p>faite vos achats en toute simple et facilit?? securis?? </p>
                                                     </div>
                                                     
                                                 </div>
                                            </div> 
                                            	
										</div>
                                        
                                        
										<div class="tab-pane" id="tab-content-3">
                                                
                                       <div class="features-tab3">
                                        
                                            <!--Start Features Left-->
                                            <div class="col-md-4">
                                                <div class="features-left m-bot-30">
                                                        <!--Features Item #1-->
                                                        <div class="features-item">
                                                            <div class="features-icon"> <i class="fa fa-pagelines"></i> </div>
                                                            <div class="features-info">
                                                               <h4>Multipurpose & Responsive</h4>
                                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <!--Features Item #2-->
                                                        <div class="features-item">
                                                            <div class="features-icon"> <i class="fa fa-trophy"></i> </div>
                                                            <div class="features-info">
                                                               <h4>Creative Design</h4>
                                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                            </div>
                                                        </div>
                                    
                                                        <!--Features Item #3-->
                                                        <div class="features-item">
                                                            <div class="features-icon"> <i class="fa fa-tag"></i> </div>
                                                            <div class="features-info">
                                                               <h4>Awesome Theme</h4>
                                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                 </div>
                                           <!--End Features Left--> 
                                           
                                           <!--Start Features Image-->
                                           <div class="col-md-4 hidden-xs m-bot-30">
                                                <img src="{{asset('images/device.png" alt="Features Image')}}" />
                                           </div>
                                           <!--End Features Image-->
                                           
                                           <!--Start Features Right-->
                                           <div class="col-md-4">
                                               <div class="features-right m-bot-30">
                                                 <!--Features Item #1-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-eyedropper"></i> </div>
                                                    <div class="features-info">
                                                       <h4>Strategy Solutions</h4>
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                
                                                <!--Features Item #2-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-search-plus"></i> </div>
                                                    <div class="features-info">
                                                       <h4>App Development</h4>
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                
                                                <!--Features Item #3-->
                                                <div class="features-item">
                                                    <div class="features-icon"> <i class="fa fa-send-o"></i> </div>
                                                    <div class="features-info">
                                                       <h4>HTML5 & CSS3</h4>
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                                  
                                               </div>
                                           </div>
                                           <!--End Features Right -->
                                        </div> 
                                                
									</div>
                                        
										<div class="tab-pane" id="tab-content-4">
												
											<div class="tab-content-4">
                                                
                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-bolt"></i> </div>
                                                        <div class="info">
                                                            <h4>Simple and Clean Codes</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-fire"></i> </div>
                                                        <div class="info">
                                                            <h4>Responsive Layout Design</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-chain"></i> </div>
                                                        <div class="info">
                                                            <h4>Unlimited Support</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="tab4-services-box">
                                                        <div class="icon"><i class="fa fa-shopping-cart"></i> </div>
                                                        <div class="info">
                                                            <h4>multipurpose theme</h4>
                                                            <p>Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis
viverra purus tristique.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>	
                                                
										</div>
                                        
                                        
										<div class="tab-pane" id="tab-content-5">
										    
                                            <div class="tab-content-5">
                                                
                                                <div class="col-md-6">
                                                     <div class="core-features">
                                                         
                                                   <ul class="list">
                                                        <li>Decouvrir Oumshouse</li>
                                                        <li>Regarder des tuto sur comment ca marche</li>
                                                        <li>Lancez vous!!!</li>
                                                        <li>Creer votre boutique sur Oumshouse.</li>
                                                        <li>Commencez a vendre</li>
                                                        <li>bimmmmmmmmmm augmentez vos visibiliter er chiffre d'affaire en un clin d'oeil.</li>
                                                    </ul>
                                                         
                                               </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-6">
                                                    <div class="devices-image">
                                                        <img src="{{asset('images/logo.png')}}" alt=""/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
										</div>
                                        
									</div>
								</div>
						  </div>
                        <!--/.tab-content-main-->  
					</div>
				</div>
              
            </div> <!--/.row-->  
      </div> <!--/.container-->
  </section>
  <!--End Section-->


 
    <!--Start video-->
  <section id="video" class="section parallax">
        <div class="overlay"></div>
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">Video</h2>
                 </div>
             
             <div class="col-md-6">
                 <div class="video-caption-main">
                      <!--Video caption #1-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-briefcase"></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>Regarder ce video et decouvrir .</h4>
                              
                          </div>
                      </div>
                      
                       <!--Video caption #2-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-glass"></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>Comment ca marcher</h4>
                              
                          </div>
                      </div>

                      <!--Video caption #3-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-rocket "></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>Maintenant avez vous une id??e sur Marketplace et comment ca marche .</h4>
                              
                          </div>
                      </div>
                      
                 </div>
             </div>
            <!-- End Video caption-->
             
            <div class="col-md-6">
                <video controls src="{{asset('images/video.mp4')}}" type="video/mp4" width="600px" autoplay muted></video>
            </div> 
               
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section>
  <!--End video-->


   
 
  
   
   
   <!--Start Footer-->
   <footer>
       <div class="container">
           <div class="row">
               <!--Start copyright-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="copyright"><p>Copyright ?? 2022 All Rights reserved by: <a href="https://www.oumshouse.ml/">Oum'shouse</a>
                 </p></div>
               </div>
               <!--End copyright-->
               
               <!--start social icons-->
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="social-icons">
                       <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                       </ul>
                    </div>
               </div>
               <!--End social icons-->
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
 </body>
</html>

