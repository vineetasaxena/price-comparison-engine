<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");?>
        
        <!-- Header-->
        
        <!-- End header -->


        <section>
            <div class="second-page-container">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                        
                           <?php $productid=$_REQUEST['productid'];
						   		if($_REQUEST['productid'])
								{
								$productid=$_REQUEST['productid'];
								$ressql2=mysql_query("select * from hitcounter_product where product_id='".$productid."'") or print("Sorry".mysql_error());
								
										if(mysql_num_rows($ressql2)>0)
								
										{
								
										$dd="select no_of_count from hitcounter_product where product_id='$productid'";
								
										$rr=mysql_query($dd);
								
										$rt=mysql_fetch_array($rr);
								
										$cont=$rt['no_of_count'];
								
										$conter=$cont+1;
								
										$yy="update hitcounter_product set no_of_count='$conter' where product_id='$productid'";
								
										$ff=mysql_query($yy) or print("sorry".mysql_error());
								
										}
								
										else
								
										{
								
									   $sql="insert into hitcounter_product(hit_id, no_of_count,product_id)values('','1','$productid')";
								
									   $res=mysql_query($sql) or print("Sorry".mysql_error());
								
									}
								
								}

								?>


								<? 
                                
                                $sqlfeatured="select * from products where product_id='$productid'";
                                
                                   $resfeatured=mysql_query($sqlfeatured) or print("Sorry3".mysql_query());
                                
                                   if(mysql_num_rows($resfeatured)>0)
                                
                                   {
                                
                                        for($f=0;$f<mysql_num_rows($resfeatured);$f++)
                                
                                        {
                                
                                             $catiid=mysql_result($resfeatured, $f, "categories");
                                
                                             /****************************Get Main Categoty***************************/
                                
                                             
                                
                                             $sqllw="select * from product_categories where id='$catiid'";
                                
                                             $resdw=mysql_query($sqllw);
                                
                                             while($rrw=mysql_fetch_array($resdw))
                                
                                             {
                                
                                             $parent=$rrw['parent'];
                                
                                            // print  "parent===$parent<br>";
                                
                                             $sqll="select * from product_categories where id='$parent'";
                                
                                             $resd=mysql_query($sqll);
                                
                                             while($rr=mysql_fetch_array($resd))
                                
                                             {
                                
                                             $main_cat=$rr['name'];
                                
                                             $main_id=$rr['id'];
                                
                                             $parentw=$rr['parent'];
                                
                                             $sqlld="select * from product_categories where id='$parentw'";
                                
                                             $resdd=mysql_query($sqlld);
                                
                                             while($rrd=mysql_fetch_array($resdd))
                                
                                             {
                                
                                             $main_catd=$rrd['name'];
                                
                                             $main_idd=$rrd['id'];
                                
                                            
                                
                                             }
                                
                                             }
                                
                                             }
                                
                                            $desc=mysql_result($resfeatured, $f, "description");
                                
                                             $short_de=mysql_result($resfeatured, $f, "short_desc");
                                
                                             $category_name=GetProductCatName($catiid);
                                
                                             $productid=mysql_result($resfeatured, $f, "product_id"); 
                                
                                             $name_product=GetProdName($productid);
                                
                                             $pics=$productid.".jpg";
                                
                                             $explode=explode(".",$picture);
                                
                                             }
                                
                                         }
                                
                                $productid=$_REQUEST['productid'];
                                
                                $sqlfeatured="select * from products_pz where id='$productid'";
                                
                                   $resfeatured=mysql_query($sqlfeatured) or print("Sorry".mysql_query());
                                
                                   if(mysql_num_rows($resfeatured)>0)
                                
                                   {
                                
                                        for($f=0;$f<mysql_num_rows($resfeatured);$f++)
                                
                                        {
                                
                                            
                                             $shop_id=mysql_result($resfeatured, $f, "shops");
                                
                                            
                                             $description=$desc;
                                
                                             $short_desc=mysql_result($resfeatured, $f, "short_desc");
                                
                                             $catname=GetProductCatName($catiid);
                                
                                             $productid=mysql_result($resfeatured, $f, "id"); 
                                
                                             $explode=explode(".",$picture);
                                
                                            $totnumberofratings=GetProductNumberOfRatingById($productid);
                                
                                            $totalrating=GetProductTotalOfRatingById($productid);
                                
                                      
                                         if($totalrating!=0 && $totnumberofratings!=0){
											$avgrating=GetProductAverageRatingById ($totalrating, $totnumberofratings);
										 }
										 else
										 {
											$avgrating="<img src=\"images/rating_0.png\" border=0>";
											$totalrating=0;
										 }
                                
                                         
                                
                                         /***********************************functionality***********************************************/
                                
                                        
                                
                                        $totnumberofratingsadmin=GetProductNumberOfRatingByIdadmin($productid);
                                
                                         $totalratingadmin=GetProductTotalOfRatingByIdadmin($productid);
                                
                                        if($totalratingadmin!=0 && $totnumberofratingsadmin!=0){
                                
                                             $avgratingadmin=AverageRatingByIdadmin($totalratingadmin, $totnumberofratingsadmin);
                                
                                          }
                                
                                         else
                                
                                         {
                                
                                            $avgratingadmin="";
                                
                                            
                                
                                         }
                                
                                         
                                
                                         /*****************************************Store Review*****************************************************/
                                
                                         
                                
                                         
                                
                                         }
                                
                                         
                                
                                    }?>
							<div class="block-breadcrumb">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo $wwwroot;?>index.php">Home</a></li>
                                    <li><? if($main_catd!="")	{
							
									?><a href="more_cats.php?catiid=<?=$main_idd;?>"><?=$main_catd?></a><?php }						
									?></li>
                                    <li><a href="more_cats.php?catiid=<?=$main_id;?>"><?=$main_cat?></a></li>
                                    <li><a href="more_cats.php?catiid=<?=$catiid;?>"><?=$category_name;?></a></li>
                                    <li class="active"><?=$name_product;?></li>
                                </ul>
                            </div>
                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s"><?=$name_product;?></h1>

                            </div>

                            <div class="block-product-detail">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="product-image">
                                           <?php 
											if(file_exists("uploadimages/$pics"))
											{
										?> <a href="uploadimages/<?php echo $pics;?>" data-lightbox="product" data-title="Product name" data-image="uploadimages/<?php echo $pics;?>" data-zoom-image="uploadimages/<?php echo $pics;?>" >
                                                    <img id="img_01" src="uploadimages/<?php echo $pics;?>" alt="" width="400">
                                                </a>
                                            <div id="gal1">

                                                <a href="uploadimages/<?php echo $pics;?>" data-lightbox="product" data-title="Product name" data-image="uploadimages/<?php echo $pics;?>" data-zoom-image="uploadimages/<?php echo $pics;?>" style="width:100px;">
                                                    <img id="img_01" src="uploadimages/<?php echo $pics;?>" alt="" width="100" height="120">
                                                </a>
                                                </div>
                                                <?php } 
                                                
                                                    else
                                                
                                                    {
                                                
                                                    ?>

	&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/icon_image_not_available_b.gif"><? }?>
                                               
                                            </div>
                                        </div>

                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">


                                        <div class="product-detail-section">
                                            <h3><?=$name_product;?></h3>
                                           <div class="product-rating">
                                                <div class="stars">
                                                   <?=$avgrating;?> 
                                                </div>
                                                <a href="#write" class="review"><?php echo $totnumberofratings;?> reviews</a> 
                                            </div>

                                            <div class="product-information">
                                                
                                                
                                                <div class="clearfix">
                                                    <label class="pull-left">Description:</label>
                                                    <p class="description"> <?php	 	 echo ucwords(getPartialDesc($desc,600, $link="more_detail_product.php?catiid=".$catiid."&productid=".$productid."")); ?></p>
                                                </div>
                                                <?php //calculate max min price range and store count

											   $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";
								
											 $resmax=mysql_query($sqlmax);
								
											 if(mysql_num_rows($resmax)>0)
								
											 {
								
												$max=mysql_result($resmax,0,"maxprice");
								
											 }
								
											 
								
											 $sqlmin="select min(prices) as minprice from products_pz where product_id='$productid'";
								
											 $resmin=mysql_query($sqlmin);
								
											 if(mysql_num_rows($resmin)>0)
								
											 {
								
												$min=mysql_result($resmin,0,"minprice");
								
											 }
								
											 #######find in how many stores
								
											$sqlprod="select distinct shops from products_pz where  product_id='$productid'";
								
											$resprod=mysql_query($sqlprod);
								
											$countshops=mysql_num_rows($resprod);
								
											  ?>
                                                <div class="clearfix">
                                                    <label class="pull-left">Price Range:</label>
                                                    <p class="product-price">$	<?=$min;?>  to $ <?=$max;?> stores(<?=$countshops;?>)</p>
                                                </div>
                                                
                                                <div class="shopping-cart-buttons">

                                                    <a href="price_alert.php?producidtalert=<?php echo $productid;?>&price=<?php	 	 echo $min;?>" class="shoping"><i class="fa fa-shopping-cart"></i>  Add Alert</a>
                                                    <a href="save_list.php?pro_id1=<?=$productid;?>" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="writereview.php?product=<?=$productid;?>" title="Review"><i class="fa fa-comment"></i></a>
                                                    <a href="main_discussions.php?productid=<?=$productid;?>" title="Discussions"><i class="fa fa-users"></i></a>
                                                </div>
                                                <div class="shopping-cart-buttons">

                                                    <a href="price_alert.php?producidtalert=<?php echo $productid;?>&price=<?php	 	 echo $min;?>" class="shoping">Instant Cash</a>
                                                     <a href="coupons.php?merchantid=<?php echo $shop_id;?>&product_id=<?php echo $productid;?>" class="shoping">Search Coupons</a>
                                                      <a href="rebates.php?merchantid=<?php echo $shop_id;?>&product_id=<?php echo $productid;?>" class="shoping">Search Rebates</a>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-border block-form">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills  nav-justified">
                                    <li class="active"><a href="#additional" data-toggle="tab" class="disabled">Compare Price</a></li>
                                    <li><a href="#description" data-toggle="tab">Description</a></li>
                                    <li><a href="#review" data-toggle="tab">Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane" id="description">
                                        <br>
                                        <h3>Product Details</h3>
                                        <hr>
                                        <p>
                                            <?php echo $desc;?>
                                        </p>
                                    </div>
                                    <div class="tab-pane active" id="additional">
                                    <? 

 $sqlprod1="select distinct shops,product_id,id from products_pz where  product_id='$productid'";

		$resprod1=mysql_query($sqlprod1) or die(mysql_error());

		if(mysql_num_rows($resprod1)>0)

		{

			for($s=0;$s<mysql_num_rows($resprod1);$s++)

			{

				 $shopid=mysql_result($resprod1, $s,"shops");

				$shopurl=GetShopUrlFromId($shopid);

				$prodid=mysql_result($resprod1, $s,"product_id");

				$shopname=GetShopName($shopid);

				$shoplogo=GetShopLogo($shopid);

				$shopzip=GetShopZip($shopid);

				$shopdesc=GetShopDesc($shopid);

				$price=GetShopProductPrice($prodid,$shopid);

				$p_date=GetShopProductdate($prodid, $shopid);

				$key_features=GetProductUrl($prodid);

				$would_shop_again=round(GetShopReviewWouldShopAgain($shopid));

				

			$member="select  member_id from store_rating where shop_id='$shopid'";

			$resp=mysql_query($member);

			$countmeber=mysql_num_rows($resp);

				

				$totnumberofratingsshop=GetProductNumberOfRatingByIShop($shopid);

		$totalratingshop=GetProductTotalOfRatingByIdShop($shopid);

		  if($totalratingshop!=0 && $totnumberofratingsshop!=0){

			 $avgratingshop=AverageRatingByIdshop($totalratingshop, $totnumberofratingsshop);

		 }

		 else

		 {

		 	print $avgratingshop="";

			

		 }

				if($would_shop_again>=9)

					{

						$would_shop_again1="<img src=\"images/smiley_sparkle_24x23.gif\" alt=\"Outstanding\" border=0>";

					}

					elseif($would_shop_again>=7 and $would_shop_again<=8)

					{	

						$would_shop_again1="<img src=\"images/smiley_green_24x23.gif\" alt=\"Good\" border=0>";

					}

					elseif($would_shop_again==6 )

					{	

						$would_shop_again1="<img src=\"images/smiley_yellow_24x23.gif\" alt=\"Satisfactory\" border=0>";

					}

					elseif($would_shop_again>=1 and $would_shop_again<=5 )

					{	

						$would_shop_again1="<img src=\"images/smiley_red_24x23.gif\" alt=\"Poor\" border=0>";

					}

					else

					{

					$would_shop_again1="n/a";

					}

					$ontime_delivery=round(GetShopReviewontime_delivery($shopid));

					if($ontime_delivery>=9)

					{

					$ontime_delivery1="<img src=\"images/smiley_sparkle_24x23.gif\" alt=\"Outstanding\" border=0>";

					}

					elseif($ontime_delivery>=7 and $ontime_delivery<=8)

					{	

						$ontime_delivery1="<img src=\"images/smiley_green_24x23.gif\" alt=\"Good\" border=0>";

					}

					elseif($ontime_delivery==6 )

					{	

						$ontime_delivery1="<img src=\"images/smiley_yellow_24x23.gif\" alt=\"Satisfactory\" border=0>";

					}

					elseif($ontime_delivery>=1 and $ontime_delivery<=5 )

					{	

						$ontime_delivery1="<img src=\"images/smiley_red_24x23.gif\" alt=\"Poor\" border=0>";

					}

					else

					{

						$ontime_delivery1="n/a";

					}

					$customer_support=round(GetShopReviewcustomer_support($shopid));

					if($customer_support>=9)

					{

						$customer_support1="<img src=\"images/smiley_sparkle_24x23.gif\" alt=\"Outstanding\" border=0>";

					}

					elseif($customer_support>=7 and $customer_support<=8)

					{	

						$customer_support1="<img src=\"images/smiley_green_24x23.gif\" alt=\"Good\" border=0>";

					}

					elseif($customer_support==6 )

					{	

						$customer_support1="<img src=\"images/smiley_yellow_24x23.gif\" alt=\"Satisfactory\" border=0>";

					}

					elseif($customer_support>=1 and $customer_support<=5 )

					{	

						$customer_support1="<img src=\"images/smiley_red_24x23.gif\" alt=\"Poor\" border=0>";

					}

					else

					{

						$customer_support1="n/a";

					}

					$product_met_expectations=round(GetShopReviewproduct_met_expectations($shopid));

					if($product_met_expectations>=9)

					{

						$product_met_expectations1="<img src=\"images/smiley_sparkle_24x23.gif\" alt=\"Outstanding\" border=0>";

					}

					elseif($product_met_expectations>=7 and $product_met_expectations<=8)

					{	

						$product_met_expectations1="<img src=\"images/smiley_green_24x23.gif\" alt=\"Good\" border=0>";

					}

					elseif($product_met_expectations==6 )

					{	

						$product_met_expectations1="<img src=\"images/smiley_yellow_24x23.gif\" alt=\"Satisfactory\" border=0>";

					}

					elseif($product_met_expectations>=1 and $product_met_expectations<=5 )

					{	

						$product_met_expectations1="<img src=\"images/smiley_red_24x23.gif\" alt=\"Poor\" border=0>";

					}

					else

					{

						$product_met_expectations1="n/a";

					}

					

			   

		?>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h3>Shop</h3>
                                                <hr>
                                                <p>
                                                    <?php if(file_exists("uploadimages/$shoplogo"))

                                                	{

                                                	

                                                ?>

                                                        <img src="uploadimages/<?=$shoplogo;?>" width="100" height="120" />

                                                		<?

                                                		}

                                                		else

                                                		{

                                                		?>

                                                		   <img src="images/icon_image_not_available_b.gif" width="100" height="120"  />

                                                <?

                                                }

                                            ?>
                                            <h3>Price
                                            </h3>
                                            $<?=$price;?>
                                            <?   if($_GET['zip']!="")

                                            { 

                                            ?>



                                            <? $service = '03';

                                            $length = '5';

                                            $width = '5';

                                            $height = '5';

                                            $weight = '5';

                                            $dest_zip = $_GET['zip'];//'90210';

                                            $PostalCode=$shopzip;



                                            $rate = ups($dest_zip,$service,$weight,$length,$width,$height, $PostalCode);

                                             $total = number_format(($ratess*$rate),2);

                                            echo "$".$total;
                                            ?>
                                            $<?php	 	 echo $price + $total;?>
                                            <?php
                                            }

                                            ?>  
                                                </p>

                                            </div>
                                            <div class="col-md-4 block-color">
                                                <h3>Description</h3>
                                                <hr>
                                               <?php	 	 echo ucwords(getPartialString($shopdesc,60, $link='#.php')); ?>
                                               <h3>Rating</h3>
                                              <?php  if($avgratingshop=='')

                        					  {

                        					  

                        					  echo "<img src='images/rating_0.png' />";

                        					 

                        					  }

                        					  else

                        					  {

                        					  print $avgratingshop;

                        					  }

                        					  ?>
                                                 <a href="shopreviewdetail.php?shopid=<?=$shopid;?>">(<?=$countmeber;?>) Reviews</a>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <h3>Goto Shop</h3>
                                                                <hr>
                                                                <p>
                                                                    <a href="#"><img src="images/Gotostore.gif" alt="compare price" height="26" width="103" /></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                                                     <?

                                            }

                                            }

                                            ?>

                                    </div>
                                    <?php include("user_review.php");?>

                                </div>



                            </div>
							<!--discussion-->
                            
                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                    Discussions
                                                </a>
                                            </h4>
                                        </div>
                                        <?php include("discussions.php");?>
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
        