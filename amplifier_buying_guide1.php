<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage

$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";

$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";



include("config.php");

include("connection.php");


include("functions.php");

include("header.php");?>



       

         

         ?>

        

        <!-- Header-->

        

        <!-- End header -->


<style>
.myheading {padding-top: 130px;}

</style>


        <section>

            <div class="second-page-container">

                <div class="container">

                    <div class="row">



                        <div class="col-md-12">

                        

                           

              <div class="row">&nbsp;</div>

                            <div class="header-for-light">

                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Product  <span>Guide</span>             
        >>> Buying Guide</h1><br>
<a href="buying_guide1.php"> Go Back to Buying Guide</a>



                            </div>



                            

                            

              <!--discussion-->

                            

                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                               <div class="row">
 <?php //-------------------------Value of term and conditions-----------

                         
                         $sqlarray="select * from buying_guide where cat_id='".$_REQUEST['cat_id']."' and active='1'";

                         $resarray=mysql_query($sqlarray) or die();  
                       for($s=0;$s<mysql_num_rows($resarray); $s++)

                                     {

                                      $picture=mysql_result($resarray,$s,"picture");

                                      $main_details=mysql_result($resarray,$s,"main_details");
                                      ?>
										
                                      <?php

                                     }
                                     if($s>0){ ?>
                                     	<div class="col-md-3">
                                                   <?php if ($picture==""){?><img
                                          src="images/icon_image_not_available_b.gif" border=0 alt="<?=$name;?>"><?php }
                                          else {?><img src="admin/images/<?php echo $picture;?>" alt="Amplifier Buying
                                          Guide" align="left" border="0"> <?php }?>  

				  

                                          </div>
                                          <div class="col-md-9">    <?=$main_details;?></div>
                                    <?php }
         
         
         // print_r ($val);           ?>

                         
                                
                      </div>
                      <div class="row"> <h4 class="text-center"><strong><?php $sql1=mysql_query("select headline from buying_guide where cat_id='".$_REQUEST['cat_id']."' and active='1'")or die(mysql_error());
				  while($vall=mysql_fetch_array($sql1))
				 {
				 // print_r ($vall);
				  ?>
				  <a  href="#<?=$vall[headline];?>"><?=$vall[headline];?></a>&nbsp;|&nbsp; 
				 <?
				 }
				 ?> </strong></h4>  </div>
				 <div class="row">  <?php	 	
				  $sql1=mysql_query("select * from buying_guide where cat_id='$cat_id' and active='1'")or die(mysql_error());
				  while($vall=mysql_fetch_array($sql1))
				 {
				  //print_r ($vall);
				  ?><div class="col-md-12 myheading"  id="<?=$vall[headline];?>">&nbsp;</div>
				  
								  <div class="col-md-12">  <h2   align="center"><?=$vall[headline];?></h2></div>
								  <div class="col-md-12"><?=$vall[details];?></div>
										<div class="col-md-12 align-right"><a  class="links" href="#top">Back to Top</a>                          </div>
										
				 <?
				 }
				 ?></div>
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

        