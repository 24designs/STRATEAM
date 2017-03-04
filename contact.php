<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
      
    <title>Strateam - Contact</title>
  </head>
  <body class="contact-page">
    <div class="main-body">
      <div class="container">
        <a href="index.html"><img height="85px" width="270px"class="logo" src="images/logo3.png"></a>
        <div class="row">
          <div class="main-page">
            <aside class="main-navigation">
              <div class="main-menu">
                <div class="menu-container">
                  <div class="block-keep-ratio block-keep-ratio-2-1 block-width-full home">                                    
                    <a href="index.html" class="block-keep-ratio__content  main-menu-link">
                    <span class="main-menu-link-text">
                    HOME    
                    </span>                                        
                    </a>
                  </div>
                </div>
                <div class="menu-container">
                  <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                    <a href="our-strengths.html" class="main-menu-link contact block-keep-ratio__content flexbox-center">
                    <i class="fa fa-hand-rock-o fa-4x main-menu-link-icon"></i>
                    OUR STRENGTHS
                    </a>                                
                  </div>
                  <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">                                    
                    <a href="about.html" class="main-menu-link about block-keep-ratio__content flexbox-center">
                    <i class="fa fa-font fa-4x main-menu-link-icon"></i>
                    ABOUT
                    </a>                                    
                  </div>
                </div>
                <div class="menu-container">
                  <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                    <a href="services.html" class="main-menu-link contact block-keep-ratio__content flexbox-center">
                    <i class="fa fa-cogs fa-4x main-menu-link-icon"></i>
                    SERVICES
                    </a>                                
                  </div>
                  <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">                                    
                    <a href="products.html" class="main-menu-link about block-keep-ratio__content flexbox-center">
                    <i class="fa fa-shopping-cart fa-4x main-menu-link-icon"></i>
                    PRODUCTS
                    </a>                                    
                  </div>
                </div>
                <div class="menu-container">
                  <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">                                    
                    <a href="industries.html" class="main-menu-link about block-keep-ratio__content flexbox-center">
                    <i class="fa fa-industry fa-4x main-menu-link-icon"></i>
                    INDUSTRIES WE SERVE
                    </a>                                    
                  </div>
                  <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                    <a href="contact.php" class="main-menu-link contact block-keep-ratio__content flexbox-center">
                    <i class="fa fa-envelope-o fa-4x main-menu-link-icon"></i>
                    CONTACT
                    </a>                                
                  </div>
                </div>
                <div class="menu-container">
                  <div class="mauris">
                    <div id="carousel-menu" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="images/slider-1.png" alt="slider">
                          <div class="carousel-caption menu-caption">
                            Industry Analysis
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/slider-2.png" alt="slider">
                          <div class="carousel-caption menu-caption">
                            Engineering Solutions
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/asset.png" alt="slider">
                          <div class="carousel-caption menu-caption">
                            Asset Management
                          </div>
                        </div>
                        <div class="item">
                          <img src="images/aerospace.png" alt="slider">
                          <div class="carousel-caption menu-caption">
                            Aerospace Industry
                          </div>
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-menu" role="button" data-slide="prev">
                      <span class="fa fa-caret-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-menu" role="button" data-slide="next">
                      <span class="fa fa-caret-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <div class="content-main contact-content">
              <div class="contact-content-upper">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="gallery_title">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-6 contact_left">
                    <form class="form-horizontal" method="post" action="mail.php">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="NAME..." value="<?php echo $name; ?>"> 
                        <div class="error"><?php echo $nameError;?></div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL..." value="<?php echo $email; ?>">   
                        <div class="error"><?php echo $emailError;?></div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="SUBJECT..." value="">        
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" name="message" placeholder="MESSAGE..." val=""><?php echo $message; ?></textarea>
                        <div class="error"><?php echo $messageError;?></div>
                      </div>
                      <div class="form-group">
                        <input name="submit" type="submit" value="submit" class="btn view_more btn-submit">
                        <div style="background-color:green"><?php echo $successMessage;?></div>
                      </div>
                    </form>
                  </div>
                  <div class="col-sm-12 col-md-6 contact_right">
                    <div class="col-md-12 contact_title">
                      CONTACT
                    </div>
                    <hr>
                    <hr>
                    <div class="col-md-12 contact_sub_title">
                      <b>Headquarter – Main Office</b>
                    </div>
                    <div class="col-md-12 contact_text">
                      ADDRESS:<br>
                      PASEO DE LA CASTELLANA, <br>
                      17F/216 EDIFICIO PUERTA DE EUROPA, TORRE ESTATE, 28046 
                      <br>
                      MADRID, SPAIN
                    </div>
                    <div class="col-md-12 contact_sub_title">
                      <b>Branch – Hong Kong Office</b>
                    </div>
                    <div class="col-md-12 contact_text">
                      ADDRESS:<br>
                      21F LAI ON ESTATE, <br>
                      420 LAI CHI KOK ROAD, SHAM SUI PO, HONG KONG
                    </div>
                    <div class="col-md-12 contact_info">
                      <a href="mailto:info@company.net" class="contact-info-link">
                      <i class="fa fa-envelope contact-fa"></i>info@strateam.net
                      </a><br/>
                      <a href="www.strateam.net" class="contact-info-link">
                      <i class="fa fa-globe contact-fa"></i>www.strateam.net
                      </a><br>
                      <br/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.953119804325!2d-3.6921475852450185!3d40.454174561286486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42291dff6d2725%3A0x12578dfb6ee28ceb!2sPaseo+de+la+Castellana%2C+28046+Madrid%2C+Spain!5e0!3m2!1sen!2sin!4v1487740974367" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
            <p class="copyright">Copyright &copy; 2017 <a href="www.strateam.net">STRATEAM</a></p>
          </div>
        </footer>
      </div>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      var map = '';
      var center;
      
      function initialize() {
          var mapOptions = {
                              zoom: 16,
                              center: new google.maps.LatLng(13.758468,100.567481),
                              scrollwheel: false
                          };  
      
          map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);
      
          google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });
      
          google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
      } 
      
      function calculateCenter() {
          center = map.getCenter();
      }
      
      function loadGoogleMap(){
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
          document.body.appendChild(script);
      }
      
      
      $(document).ready(function(){
          loadGoogleMap();
      });
    </script>
  </body>
</html>