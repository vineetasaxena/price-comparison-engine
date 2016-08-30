<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage

$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";

$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";

include("config.php");



include("connection.php");



include("functions.php");

include("header.php");?>

<? //-------------------------Value of term and conditions-----------

			  $sqlarray="select * from term_cond";

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

                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">About <span>Us</span></h1>



                            </div>



                            

                            

							<!--discussion-->

                            

                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								 <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                               
 <? //-------------------------Value of term and conditions-----------

											  $sqlarray="select * from aboutus";

											   $resarray=mysql_query($sqlarray);

											   for($s=0;$s<mysql_num_rows($resarray); $s++)

											   {

													$id=mysql_result($resarray,$s,"id");

													$termname=mysql_result($resarray,$s,"termname");

											   }

											   echo nl2br($termname);

											   ?>
                                
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

        