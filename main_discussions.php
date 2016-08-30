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

                        <div class="col-md-9">
                             
                            <div class="block">
                            <?php include("include_product.php");?>
                                <div class="header-for-light">
                                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">Discussions</h1>

                                </div>
                                <div class="row">
                              <?php   $productid=$_REQUEST['productid'];	 	
                            if($productid!="")
                            {
                            $sql="SELECT * FROM discussions_question where productid='$productid' ORDER BY  d_datetime DESC";
                            }
                            else
                            {
                            $sql="SELECT * FROM discussions_question ORDER BY  d_datetime DESC";
                            
                            }
                            // OREDER BY id DESC is order result by descending 
                            $result=mysql_query($sql) or print("Sorry".mysql_error());
                            ?><?php	 	
								$counter=0;
								for($i=0;$i<mysql_num_rows($result);$i++)
								{
									$discid=mysql_result($result,$i,"disc_id");
									$productid=mysql_result($result,$i,"productid");
									$counter=$counter+1; ?>
                                    <article class="col-md-6 text-center">
                                        <div class="blog">
                                            <figure class="figure-hover-overlay">                                                                        
                                                <a href="#"  class="figure-href"></a>

                                               

                                                <span class="bar"></span>
                                            </figure>
                                            <div class="blog-caption">
                                                <h3><a href="dview_topic.php?productid=<?=$productid?>&discid=<?=$discid;?>" class="blog-name"><?php	 	 echo mysql_result($result,$i,"disc_topic"); ?></a></h3>
                                                <p class="post-information">
                                                    <span><strong>Views:&nbsp;</strong><?php	 	 echo mysql_result($result,$i,"disc_view"); ?></span>
                                                    <span><i class="fa fa-clock-o"></i><?php	 	 echo mysql_result($result,$i,"d_datetime"); ?></span>
                                                </p>
                                                <p><strong>Replies:&nbsp;</strong><?php	 	 echo mysql_result($result,$i,"disc_reply"); ?>
                                                   
                                                </p>
                                                <a <a href="dview_topic.php?productid=<?=$productid?>&discid=<?=$discid;?>" class="btn-read">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                 <?
	}
	?> 
                                    
                                   

                                </div>
                            </div>
                            
                            <div class="block">
                                <div class="header-for-light">
                                    <h5 class="wow fadeInRight animated" data-wow-duration="1s"><a href="create_topics.php?productid=<?=$productid;?>">Create Topic</a></h5>
									 <h5 class="wow fadeInRight animated" data-wow-duration="1s"><a href="products.php?productid=<?php echo $productid;?>">Go Back to Product</a></h5>
                                </div>
                                
                            </div>
                        </div>
                        
                        <?php include("left_link.php");?>

                    </div>
                </div>  
            </div>

        </section>
<!-- start footer--->
   
   <?php include("footer.php");?>  
  