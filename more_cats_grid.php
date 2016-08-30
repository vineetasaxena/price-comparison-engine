<?php  ob_start();

   include("config.php");

   include("connection.php");

   include("functions.php");
   $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";

   include("header.php"); 

?>       <!-- Header-->
        
        <!-- End header -->


        <section>
            <div class="second-page-container">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                            <div class="block-breadcrumb">
                                     <? $catiid=$_REQUEST['catiid'];

								   $res=mysql_query("select * from product_categories where id='$catiid'") or print("".mysql_error());
								
												$trows=mysql_num_rows($res);
								
												if(mysql_num_rows($res)>0)
								
												{
								
													$catid=mysql_result($res,0,"id");
								
													$catname=mysql_result($res,0,"name");
								
												}
								
										?>
                                &nbsp;   
                            </div>
                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s"><a href="search1.php?catiid=<?=$catid;?>"><?=$catname;?>/[<?=Pa($catiid);?>] </a></h1>

                            </div>
							<div class="widget-block">
                                <ul class="list-unstyled ul-side-category">
                                <!--begin sub category-->
                                <?

								

							    $res11=mysql_query("select * from product_categories where parent='$catiid'") or print("".mysql_error());

								$trows11=mysql_num_rows($res11);

								if(mysql_num_rows($res11)>0)

								{

									

									while($rowsub=mysql_fetch_array($res11))

									{?>
                                    <li><a href="more_cats.php?catiid=<?=$rowsub['id'];?>"><i class="fa fa-angle-right"></i> <?=$rowsub['name'];?> / <?=Pa($rowsub['id']);?></a>
										<ul class="sub-category"><? 
    
                                        $res11s=mysql_query("select * from product_categories where parent='".$rowsub['id']."'") or print("".mysql_error());
    
                                        $trows11s=mysql_num_rows($res11s);
    
                                        if(mysql_num_rows($res11s)>0)
    
                                        {
    
											while($rowsubs=mysql_fetch_array($res11s))
		
											{?>
											
												<li><a href="more_cats.php?catiid=<?=$rowsubs['id'];?>"><?=$rowsubs['name'];?> / <?=Pa($rowsubs['id']);?></a></li>
											<? }

										}

									 ?>	</ul>							
                                     </li>
                                    <!-- end sub category-->	<?  

								 }

								}

								

									

								?>
                                    
                                    

                                </ul>

                            </div>
                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Popular <span>Products</span> </h1>

                            </div>
                            <div class="block-product-tab">
                                <div class="tab-bg"></div>
                                <div class="toolbar-for-light" id="nav-tabs2">
                               
                                    
                                </div>  
                                <ul class="nav nav-pills">
                                    <!--tabs for popular products-->
                                <?php /* Storing the query in a variable */
								$catslink=findsubcategories($catiid); 
								$query = "SELECT distinct categories, product_categories.name, product_categories.id FROM product_categories, products where product_categories.id=categories and product_categories.id in ($catslink) limit 0,3";
								
														

								/* Executing the SQL query */
			
								$resultSet = mysql_query($query) or die("Execution Of The SQL Query failed");
			
							/* Retrieving number of rows */
			
							 $numrows1 = mysql_num_rows($resultSet);
			
							/* Verifying if any rows available */
			
								

						/* Verifying if any rows available */
		
							if ($numrows1)
		
							{
		
							
		
							/* Initializing i to 0 */
		
								$i = 0;
		
							/* Setting up a loop */
		
								while($i<$numrows1)
		
								{
									
		
									$catiid=mysql_result($resultSet,$i,"id");
									$catprod[]=$catiid;
		
									if($i==0)
		
									{
		
									  $catfirst=mysql_result($resultSet,$i,"id");
		
									  $catfirstname=mysql_result($resultSet,$i,"name");
		
									 }

									$name=mysql_result($resultSet,$i,"name");
		
										
		
									if ($i%2)
		
									// if the row number is even
		
										$bgcolor = "#000000";
		
									else
		
									// if the row number is odd
		
										$bgcolor = "#FFFFFF";
		
										if($i==0)
		
										{

					?>	 <li class="active"><a href="#<?php echo $i;?>" data-toggle="tab"><?php	echo $catfirstname;?></a><div class="header-bottom-line"></div></li>
                    <?php	 	   }else{

								?>
                                    <li><a href="#<?php echo $i;?>" data-toggle="tab" class="disabled"><?php echo $name;?></a><div class="header-bottom-line"></div></li>
                                    <?

								}

								$i++;

					}

					}
?>
                                </ul>
                                <div class="tab-content">
                                <?php //first category or default category
								
								for($t=0; $t<sizeof($catprod);$t++){
								 $query1 = "SELECT * FROM products WHERE  categories='" . $catprod[$t]."' order by rand() limit 0,6" ;
														
								$resultSet1 = mysql_query($query1);
							
							
								?>
                                    <div class="tab-pane <?php if($t==0){?>active<?php }?> animated fadeIn" id="<?php echo $t;?>">
                                       
                            <!--tab start-->
                            <!--list view start-->
                            <!--select list or grid1-->
                            <div class="block-products-modes color-scheme-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="product-view-mode">
                                            <a href="more_cats_grid.php?catiid=<?php echo $_REQUEST['catiid'];?>" class="active"><i class="fa fa-th-large"></i></a>
                                            <a href="more_cats.php?catiid=<?php echo $_REQUEST['catiid'];?>"><i class="fa fa-th-list"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        
                                    </div>
                                </div>
                            </div>
                            <!--end select list or grid1-->
                            <!--product list-->
                             
                             <? $s=0;

								 
							
							 while($row1 = mysql_fetch_array($resultSet1))
				
							{
				
							$productid=$row1['product_id']; 
				
							$productcategory=$row1['categories']; 
				
							$productname=$row1['name']; 
				
							$description=$row1['description']; 
				
							$description=ucwords(getPartialString($description,30));
				
							$totnumberofratings=GetProductNumberOfRatingById($productid);
				
							$totalrating=GetProductTotalOfRatingById($productid);
				
						
				
						 if($totalrating!=0 && $totnumberofratings!=0){
				
						 $avgrating=GetProductAverageRatingById($totalrating, $totnumberofratings);
				
						
						 }
				
						 else
				
						 {
				
							$avgrating="";
				
						 }?>
                        <?php if($s==0){?> <div class="row"><?php }?>
                            <div class="col-xs-12 col-sm-6 col-md-4 text-center mb-25">
                                    <article class="product light">
                                        <figure class="figure-hover-overlay">                                                                        
                                            <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$productid;?>"  class="figure-href"></a>
                                            <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$productid;?>" class="product-compare"><i class="fa fa-random"></i></a>
                                            <a href="save_list.php?pro_id1=<?=$productid;?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                            <?php if(file_exists("uploadimages/".$productid.".jpg"))
											{?><img src="uploadimages/<?=$productid;?>.jpg" class="img-overlay img-responsive" alt="<?=$productname;?>">
                                            <img src="uploadimages/<?=$productid;?>.jpg" class="img-responsive" alt="<?=$productname;?>">
                                             <?php } else {?>
                                            <img src="uploadimages/1007.jpg" class="img-overlay img-responsive" alt="<?=$productname;?>">
                                            <img src="uploadimages/1007.jpg" class="img-responsive" alt="<?=$productname;?>">
                                            <?php }?>
                                        </figure>
                                        <div class="product-caption">
                                            <div class="block-name">
                                            <? $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";

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

												 }?>
                                                <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$productid;?>" class="product-name"><?=$productname;?></a>
                                                <p class="product-price"><?="$".$min."-"."$".$max;?></p>

                                            </div>
                                            <div class="product-cart">
                                                <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$productid;?>"><i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                            <div class="product-rating">
                                                <div class="stars">
                                                    <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                </div>
                                                <a href="" class="review">8 Reviews</a>
                                            </div>
                                            <p class="description"><?=$description;?></p>
                                        </div>

                                    </article> 
                                </div>
                                 <?php 
								 if($s==2){?></div><?php }
								 $s++;?>
							<!--product list end-->
                            <?php }?>
                           
                           
<!--tab end-->
						  
                                    </div>
							<?php } //end of for

							?>	
                                    
                                    
                                </div>

                            </div>
                            <!--end code-->
                        </div>
                        <?php include("more_cats_right.php");?>

                    </div>
                </div>  
            </div>

        </section>
 <!-- start footer--->
   <?php include("footer.php");?>  
