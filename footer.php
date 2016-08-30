 <footer id="footer-block">
            <div class="block color-scheme-white-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="safepayments.php">
                            <article class="payment-service">
                                
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active">Safe Payments</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </article></a>
                        </div>
                        <div class="col-md-4">
                            <a href="freeshipping.php">
                            <article class="payment-service">
                                
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active">Free shipping</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </article></a>
                        </div>
                        <div class="col-md-4">
                             <a href="24-7support.php"><article class="payment-service">
                               
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-fax"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active">24/7 Support</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </article></a>
                        </div>
                    </div>



                </div>
            </div>

            <div class="social">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="socials">
                                <a href="#"><i class="fa fa-skype"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>   
                        </div>
                        <script>
						function checknewletter() {
						
							if(document.newsletter.email.value==""){
								alert("please enter email to subscribe to email");
								document.newsletter.email.focus();
								return false;
							}
							if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(window.document.newsletter.email.value))

							{
						
								alert("please enter your valid Email Address!");
						
								window.document.newsletter.email.focus();
						
								return false;
						
							}
						
							
						}
                        </script>
                        <div class="col-md-6"><? if($msg!="") {?>

							  <?php echo "<font style=\"color:#fff;\">$msg</font>";?>
                            
                              <? }?> 
                            <form name="newsletter" action="news_letter_submit.php" method="post" onsubmit="return checknewletter();" class="form-horizontal">
                            
                                <input type="email" name="email" class="input form-control" placeholder="Email">
                                <button type="submit"> Sign up <i class="fa fa-angle-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-information">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Customers</h3>
                            </div>
                           <ul class="footer-categories list-unstyled">
                                <li><a href="<?=$wwwroot;?>login.php">Customer Login</a></li>
                                <li><a href="<?=$wwwroot;?>registration.php">Customer Register</a></li>
                                <li><a href="<?=$wwwroot;?>visitors_guide.php">Visitors guide</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Merchants</h3>
                            </div>
                            <ul class="footer-categories list-unstyled">
                                <li><a href="<?=$wwwroot;?>step1.php">Merchant Register</a>></li>
                                <li><a href="<?=$wwwroot;?>merchant_login.php">Merchant Login</a></li>
                                <li><a href="<?=$wwwroot;?>merchants_guide.php">Merchant guide</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                            <h3>Help</h3>
                                <!--h3>Poll</h3-->
                            </div>
                            <ul class="footer-categories list-unstyled">
                               
                                <li><a href="<?=$wwwroot;?>recommondation.php" class="bottomlinks">Recommendations</a></li>
                                <li><a href="<?=$wwwroot;?>categories.php">Category</a></li>
                                <li><a href="<?=$wwwroot;?>brands_index.php" class="bottomlinks">Brands index</a></li>
                                <li><a href="<?=$wwwroot;?>buying_guide1.php" class="bottomlinks">Buying guides</a></li>
                                <li><a href="<?=$wwwroot;?>rebates.php" class="bottomlinks"> 
                  Rebates                  </a></li>
                  <li><a href="<?=$wwwroot;?>coupons.php" class="bottomlinks"> 
                  Coupons                  </a></li><li><a href="top_store1.php" class="bottomlinks">Top stores</a></li>
                            </ul>
                            <!--div class="want">
                            
                                <iframe  scrolling="no" frameborder="0" src="ajax-poller.php"  height="220px" width="100%"></iframe>
                            </div-->



                        </div>
                        <div class="col-md-3">
                            <div class="header-footer">
                                <h3>Information</h3>
                            </div>
                            <ul class="footer-categories list-unstyled">
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="<?=$wwwroot;?>faq.php">FAQ</a></li>
                                <li><a href="termsofuse.php">Terms & Conditions</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copy color-scheme-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="index.html" class="logo-copy pull-left"></a>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                Copyright HiFiBrands.com © <?php echo date("Y");?> | All rights reserved.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <ul class="footer-payments pull-right">
                                <li><img src="img/payment-maestro.jpg" alt="payment" /></li>
                                <li><img src="img/payment-discover.jpg" alt="payment" /></li>
                                <li><img src="img/payment-visa.jpg" alt="payment" /></li>
                                <li><img src="img/payment-american-express.jpg" alt="payment" /></li>
                                <li><img src="img/payment-paypal.jpg" alt="payment" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Section footer -->
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/jquery.easing.1.3.js"></script>
        <script src="js/vendor/bootstrap.js"></script>

        <script src="js/vendor/jquery.flexisel.js"></script>
        <script src="js/vendor/wow.min.js"></script>
        <script src="js/vendor/jquery.transit.js"></script>
        <script src="js/vendor/jquery.jcountdown.js"></script>
        <script src="js/vendor/jquery.jPages.js"></script>
        <script src="js/vendor/owl.carousel.js"></script>

        <script src="js/vendor/responsiveslides.min.js"></script>
        <script src="js/vendor/jquery.elevateZoom-3.0.8.min.js"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="js/vendor/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery.scrollTo-1.4.2-min.js"></script>
		 $.noConflict();
        <!-- Lightbox2 Author by Lokesh Dhakar  
        [lokeshdhakar.com](http://www.lokeshdhakar.com)  
        [twitter.com/lokesh](http://twitter.com/lokesh)  
            * Free for use in both personal and commercial projects.
            * Attribution requires leaving author name, author homepage link, and the license info intact-->
        <script type="text/javascript" src="js/vendor/lightbox.js"></script>
        <!-- Custome Slider  -->
        <script src="js/main.js"></script>

        <!--Here will be Google Analytics code from BoilerPlate-->
    </body>
</html>