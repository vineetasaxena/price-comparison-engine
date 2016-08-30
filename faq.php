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
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">FAQS</h1>

                            </div>
							<div class="widget-block">
                            
                            
                             
                                <!--begin faq-->
                              <?php	 	
							  $counter=0;
							  $sql="select * from faq";
							  $res=mysql_query($sql);
							  for($i=0;$i<mysql_num_rows($res);$i++)
							  {
							  $faqid=mysql_result($res,$i,"faq_id");
							  $faqques=mysql_result($res,$i,"faq_ques");
							  $counter=$counter+1;
							  ?>
                             <div class="row">
                                
                                        
                                        <div style="width:5%; float:left;" ><?php	 	 echo $counter;?> </div>
                                        <div style="width:95%; float:left;" ><a href="faqview.php?faqid=<?php	 	 echo $faqid;?>" class="mid_cata"><?php	 	 echo $faqques;?></a></div></div>
                                      <hr> 
                               </div>         
                                  
								   
								   
								   <?  

								 }

							
								

									

								?>
                                   
                              <div class="row"></div>     

                                

                            </div>
                            
                            <!--end code-->
                        </div>
                        

                    </div>
                </div>  
            </div>

        </section>
<!-- start footer--->
   
   <?php include("footer.php");?>  
  