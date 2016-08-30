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
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Rebates</h1>

                            </div>
							<div class="widget-block">
                            <div class="row">
                            <div style="width:33%; float:left;" ><strong>MANUFACTURER</strong></div><div style="width:33%; float:left;" ><strong>PRODUCT</strong></div><div style="width:33%; float:left;" ><strong>REBATES</strong></div>							</div>
                            <hr>
                             
                                <!--begin reabtes-->
                                <?  if($_REQUEST['merchantid']!="" || $_REQUEST['product_id']!=""){ 
								$sql="select * from rebates where shops_id='".$_REQUEST['merchantid']."' or product_id='".$_REQUEST['product_id']."'";
						
								 
						
								  $shops1=mysql_query($sql); //echo "----".mysql_num_rows($shops1);
								  if(mysql_num_rows($shops1)==0){
									$sql="select * from rebates";
									$shops1=mysql_query($sql);
										}
										}
										else {
								   $sql="select * from rebates";
								   $shops1=mysql_query($sql);
								   }
								   
						
								   $count=0;
						
								  while($rowres=mysql_fetch_array($shops1))
						
								{
								
						
									$brand=$rowres['brand'];
						
									$mnfr_rebate=$rowres['mnfr_rebate'];
						
									$product_id=$rowres['product_id'];
						
									$manufacturer_name=GetBrandName($brand);
									$product_name=GetProduct_Name($product_id);
						
									
						
							 ?>
                             <div class="row">
                                
                                        <div style="width:30%; float:left; padding-left:10px;" ><?php echo $manufacturer_name;?></div>
                                        <div style="width:33%; float:left;" ><?php if($product_name!="" || $product_name!=0){?><?php echo $product_name;?><?php }?>&nbsp;</div>
                                        <div style="width:33%; float:left;" ><?php echo $mnfr_rebate;?></div>
                                      
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
  