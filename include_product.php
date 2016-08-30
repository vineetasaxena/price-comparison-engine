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
                                
                                         }?>
										 <?php $productid=$_REQUEST['productid'];
                                
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
            <div class="header-for-light">
           					 <h1 class="wow fadeInRight animated" data-wow-duration="1s"><a href="products.php?catiid=<?=$catiid;?>&amp;productid=<?=$productid;?>"><?=$name_product;?></a></h1>
            
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
