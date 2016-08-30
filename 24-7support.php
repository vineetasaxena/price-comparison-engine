<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage

$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";

$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";

include("config.php");



include("connection.php");



include("functions.php");

include("header.php");?>

<? //-------------------------Value of term and conditions-----------

			  $sqlarray="select * from support24-7";

			   $resarray=mysql_query($sqlarray);

			   for($s=0;$s<mysql_num_rows($resarray); $s++)

			   {

					$id=mysql_result($resarray,$s,"id");

					$termname=mysql_result($resarray,$s,"termname");

			   }

			   

			   ?>

        

        <!-- Header-->

        

        <!-- End header -->





        <section>

            <div class="second-page-container">

                <div class="container">

                    <div class="row">



                        <div class="col-md-12">

                        

                           

							<div class="row">&nbsp;</div>

                            <div class="header-for-light">

                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">24/7 <span>Support</span></h1>



                            </div>



                            

                            

							<!--discussion-->

                            

                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                               

                                

                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">

                                        <div class="panel-heading">

                                            <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">

                                                    24/7 Support

                                                </a>

                                            </h4>

                                        </div>

                                        <div id="collapseOne" class="panel-collapse collapse">

                                            <div class="panel-body">

                                                <?php echo nl2br($termname);?>

                                            </div>

                                        </div>

								</div>

                               

                            </article>

                            

                            <!--end discussion-->





                        </div>

                        



                    </div>

                </div>  

            </div>



        </section>

   <!-- start footer--->

   

   <?php include("footer.php");?>   

        