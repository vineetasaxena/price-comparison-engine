<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");?>
        <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Customer Login</span> or <span>Register</span></h1>
                        </div>
                        <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <?php include("customer_login.php");?>
                            </article>
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-pencil"></i>Create new account</h3>
                                    <p>Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website.</p>
                                    <hr>
                                    <a href="<?=$wwwroot;?>registration.php" class="btn-default-1">Register</a>
                                </div>
                                

                            </article>
                        </div>
                    </div>
                </div>
            </div> 
        </section>






 <!-- start footer--->
   
   <?php include("footer.php");?>  