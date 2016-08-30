<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");?>
       
        <!-- End header -->
 <?php	 	
  $sql="select * from faq where faq_id='$faqid'";
  $res=mysql_query($sql);
 if(mysql_num_rows($res)>0)
  {
  $faqques=mysql_result($res,0,"faq_ques"); 
  $faqans=mysql_result($res,0,"faq_ans");
  }
  ?>

        <section>
       
            <div class="second-page-container">
                <div class="container">
                    <div class="row">
						<? include("left_link.php"); ?>
                        
                        <div class="col-md-9">
                             <div class="row" style="height:20px;">
                             &nbsp;
                              </div>
                            <div class="header-for-light">
                                        <h1 class="wow fadeInRight animated" data-wow-duration="1s"><?php	 	 echo "FAQS";?></h1>

                                    </div>
							<div class="row">
                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-unlock"></i><?php	 	 echo $faqques;?></h3>
                                    <p><?php	 	 echo $faqans;?></p>
                                    <hr>
                                    <a href="<?=$wwwroot;?>faq.php" class="btn-default-1">Back</a>
                                </div>
                            </article>
                           
                        </div>
                           
                            
                            <!--end code-->
                        </div>
                        

                    </div>
                </div>  
            </div>

        </section>
<!-- start footer--->
   
   <?php include("footer.php");?>  
  