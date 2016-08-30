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

                <div class="container">

                    <div class="row">

						<? include("left_link.php"); ?>

                        

                        <div class="col-md-9">

                             <div class="row">

                             &nbsp;

                              </div>

                            <div class="header-for-light">

                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Coupons</h1>



                            </div>

							<div class="widget-block">

                            <div class="row">

                            <div style="width:25%; float:left;" ><strong>Logo</strong></div><div style="width:19%; float:left;" ><strong>Shop</strong></div><div style="width:17%; float:left;" ><strong>Code</strong></div>	<div style="width:25%; float:left;" ><strong>Link</strong></div>					</div>

                            <hr>

                             

                                <!--begin rebates-->

                               <?php	 	

								if($_REQUEST['merchantid']!="" || $_REQUEST['product_id']!=""){

										  $sql="select * from coupuns where shop_id='".$_REQUEST['merchantid']."' or product_id='".$_REQUEST['product_id']."'";

										$shops1=mysql_query("$sql");

										  if(mysql_num_rows($shops1)==0){

											$sql="select * from coupuns";

											$shops1=mysql_query("$sql");

								}

								}

								else {

										   $sql="select * from coupuns";

										   $shops1=mysql_query("$sql");

										   }

										  
										   $count=0;

								

										  while($rowres=mysql_fetch_array($shops1))

								

										{

											$shop_id=$rowres['shop_id'];

								

											$logo=GetShopLogo($shop_id);

								

											$s_name=GetShopName($shop_id);

											$pml_code=$rowres['pml_code'];

											$description=$rowres['description'];

											$link=$rowres['coupon_link'];

								

									 ?>

                             <div class="row">

                                

                                        <div style="width:25%; float:left; " ><? if($logo!="")

										  { if(file_exists("logo/$logo"))

										{

										

									?><img src="logo/<?php	 	 echo $logo;?>" />

									<? } else {?>

									<img src="images/icon_image_not_available_b.gif" />

									<? }

									} else {?>

									<img src="images/icon_image_not_available_b.gif" />

									<? }?></div>

                                        <div style="width:19%; float:left;" ><?php	 	 echo $s_name;?> </div>

                                        <div style="width:17%; float:left;" ><?php echo $pml_code;?></div>

                                        <div style="width:25%; float:left;" ><?php echo $link;?></div>

                                      

                               </div>         

                                <hr>   

								   

								   

								   <?  



								 }



							

								



									



								?>

                                   

                              <div class="row"></div>     



                                



                            </div>

                            <div class="header-for-light">

                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">STANDARD MERCHANT COUPONS & REBATES</span> </h1>



                            </div>

                            <div class="widget-block">

                                <ul class="list-unstyled ul-side-category">

                                <script type="text/javascript" language="javascript"

  src="http://si.goldencan.com/couponstore/display.aspx?SID=19fdb8bd-6eaf-4dbf-b2f0-241192489940">

</script>

                                    

                                   <div class="row">

                                   </div>  



                                </ul>



                            </div>

                            <!--end code-->

                        </div>

                        



                    </div>

                </div>  

            </div>



        </section>

<!-- start footer--->

   

   <?php include("footer.php");?>  

  