

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Store One page Bootstrap theme</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/main.css">
        <link rel="stylesheet" href="public/css/animate.css">
        <link rel="stylesheet" href="public/css/responsive.css">
        <script src="public/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/plugins.js"></script>
        <script src="public/js/main.js"></script>
        <script src="public/js/wow.min.js"></script>
        <script>
         new WOW(
            ).init();
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-57708809-1', 'auto');
          ga('send', 'pageview');

        </script>


    </head>
    <body>


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-6 col-sm-3">
                    <a href="#" class="logo">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#services">Services</a></li>
                                        <li><a href="#products">Products</a></li>
                                        <li><a href="#testimonials">Testimonials</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                  
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-3">
                    <ul class="social-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <section id="products">
        <div class="container">

            <h1 class="title">Products</h1>
            <hr class="divider" style="width:50%;">

            <style>
                .hide-text {

                    white-space: nowrap;
                    overflow: auto;
                }
            </style>

            <div class="row">

            <?php
        //  print_r($products);

            foreach($products as $product)
            {
                ?>
                <div class="col-sm-4 clearfix wow fadeInLeft product" data-wow-delay=".8s" >
                    <img src="<?=$product['image_path']?>"  style="height: 230px; width:80%; margin: 0 auto;" alt="iPhone 6" class="img-responsive">
                    <div class="product-info">
                        <div class="col-sm-8" style=" position:static;">
                            <h4><?= $product['title']; ?></h4>
                            <p class="hide-text"><?= $product['description'];?></p>
                        </div>
                        <div class="col-sm-4 price"><?=$product['price'];?> $</div>
                        <div class="clear"></div>
                        <ul class="product-btns">
                            <!-- <li>
                                <a href="#" class="btn btn-default btn-grey"> <i class="fa fa-list"></i> Details</a>
                            </li> -->
                            <li>
                                <a href="product/<?=$product['product_id']?>" class="btn btn-default btn-red-o"><i class="fa fa-shopping-cart"></i> BUY NOW</a>
                            </li>
                        </ul>
                    </div>
                </div>

           <?php
            }
            ?>
            </div>
            
             
           
               
             
           

            </div>
        </div>
    </section>




    <section id="home">
        <div class="container">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>


            <div class="carousel-inner" role="listbox">

                <div class="item active">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block">
                                        <img class="app-img img-responsive" src="images/slider/1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-1 col-sm-6">
                                    <div class="block">
                                        <h1>
                                            NEW in our store,<br> iPhone 6.
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nemo, corporis ipsum soluta nobis ea!
                                        </p>

                                        <ul class="download-btn">
                                            <li>
                                                <a href="#" class="btn btn-default btn-grey"> <i class="fa fa-list"></i>Details</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default btn-red"><i class="fa fa-shopping-cart"></i>BUY NOW</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>


                <div class="item">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block">
                                        <img class="app-img img-responsive"  src="images/slider/2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-1 col-sm-6">
                                    <div class="block">
                                        <h1>
                                            Samsung Galaxy S6 edge <br> designed to be perfect.
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nemo, corporis ipsum soluta nobis ea!
                                        </p>

                                        <ul class="download-btn">
                                            <li>
                                                <a href="#" class="btn btn-default btn-grey"> <i class="fa fa-list"></i>Details</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default btn-red"><i class="fa fa-shopping-cart"></i>BUY NOW</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
        </div>
    </section>




    <section id="services">
        <div class="container">
            <h1 class="title">Services</h1>
            <hr class="divider" style="width:50%;border-color:#CCC;">
            <p class="text-center">Lorem ipsum dolor sit amet</p>
            <div class="service-wrapper">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1s">
                            <div class="icon">
                               <i class="fa fa-truck"></i>
                            </div>
                            
                            <h3>Delivery service</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, amet.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.3s">
                            <div class="icon">
                                <i class="fa  fa-list"></i>
                            </div>
                            <h3>200+ Products</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, amet.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.6s">
                            <div class="icon">
                                <i class="fa  fa-shopping-cart"></i>
                            </div>
                            <h3>Online shopping</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, amet.</p>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay="1.9s">
                            <div class="icon">
                                <i class="fa  fa-cc-visa"></i>
                            </div>
                            <h3>All Cards accepted</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   
    





   





    <section id="testimonials">
        <div id="carousel-example-generict" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generict" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generict" data-slide-to="1"></li>
            </ol>


            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="block text-center">
                                    <img class="img-responsive img-circle center-block" src="images/testimonials/1.jpg" alt="" style="height:100px;">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="block">
                                    <h3 style="color:#ff0f37;" class="text-center">Absolutely Brilliant - Julia Doe</h3>
                                    <p style="color:#111;font-size:14px;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisqua
                                        lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisqua
                                        lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisqua
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="block text-center">
                                    <img class="img-responsive img-circle center-block" src="images/testimonials/1.jpg" alt="" style="height:100px;">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="block">
                                    <h3 style="color:#ff0f37;" class="text-center">Amazing Service! - John Doe</h3>
                                    <p style="color:#111;font-size:14px;">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisqua
                                        lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisqua
                                        lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisqua
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>




    <section id="contact" class="wow fadeInUp bgc-one-top mts-section-wrapper mts-contact-section" data-wow-delay=".8s" style="margin-top:50px;margin-bottom:50px;">
        <div class="container">
            <div class="row">
                <h1 class="title">Contact us</h1>
                <hr class="divider" style="width:50%;">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <!-- Section Header End -->

                <div class="mts-contact-details" style="margin-top:30px;">

                    <!-- Address Area End -->

                    <!-- Contact Form -->
                    <div class="col-md-6 col-sm-6 col-xs-12 mts-contact-form wow bounceInRight">
                        <div id="contact-result"></div>
                        <div id="contact-form">
                            <div class="mts-input-name mts-input-fields">
                                <input type="text" name="name" id="name" placeholder="Name">
                            </div>

                            <div class="mts-input-email mts-input-fields">
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>

                            <div class="mts-input-message mts-input-fields">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>

                            <input type="submit" value="SEND MESSAGE" id="submit-btn">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ducimus in rerum fugiat deserunt laboriosam tempore velit, eaque provident incidunt quisquam. Qui soluta accusantium pariatur obcaecati, harum molestiae eum, repellendus.</p>
                        <ul>
                            <li><i class="fa fa-home"></i>01011 Road ave.</li>
                            <li><i class="fa fa-phone"></i>(+1) 012 3456</li>
                            <li><i class="fa fa-envelope-o"></i>john@store.com</li>
                        </ul>
                    </div>
                    <!-- Contact Form End -->

                </div>
            </div>
        </div>
    </section>

    <footer class="wow fadeInUp" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                        <a class="footer-logo" href="#">
                            <img class="img-responsive" src="images/footer-logo.png" alt="">
                        </a>
                    <p>Copyright ?? 2016 <a href="http://gridgum.com">Gridgum</a></p>
                    
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
