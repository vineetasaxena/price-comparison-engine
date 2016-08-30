<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
		include("config.php");
	
		include("connection.php");
	
		include("functions.php");
		include("header.php");?>
        <!-- End header -->
        

        <section>
            <div class="revolution-container">
                <div class="revolution">
                    <ul class="list-unstyled">	<!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $wwwroot;?>slider/3_bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="160"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1.png" alt="">
                            </div>
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="224"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1-2.png" alt="">
                            </div>
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="335"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1-1.png" alt="">
                            </div>
                            <div class="tp-caption customin customout hidden-xs"
                                 data-x="20"
                                 data-y="430"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="1000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 2">
                                <a href="#" class="btn-home">Shop All</a>
                            </div>
                            <div class="tp-caption customin customout hidden-xs"
                                 data-x="145"
                                 data-y="430"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 2">
                                <a href="#" class="btn-home">Read more</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $wwwroot;?>slider/1_bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="204"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 2">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1-2.png" alt="">
                            </div>
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="315"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 2">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1-1.png" alt="">
                            </div>
                            <div class="tp-caption customin customout hidden-xs"
                                 data-x="20"
                                 data-y="410"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="1000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 3">
                                <a href="#" class="btn-home">Shop All</a>
                            </div>
                            <div class="tp-caption customin customout hidden-xs"
                                 data-x="145"
                                 data-y="410"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4">
                                <a href="#" class="btn-home">Read more</a>
                            </div>


                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $wwwroot;?>slider/2_bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="160"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1.png" alt="">
                            </div>
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="224"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1-2.png" alt="">
                            </div>
                            <div class="tp-caption skewfromrightshort customout"
                                 data-x="20"
                                 data-y="335"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4">
                                <img src="<?php echo $wwwroot;?>img/preview/slider/1-1.png" alt="">
                            </div>
                            <div class="tp-caption customin customout hidden-xs"
                                 data-x="20"
                                 data-y="430"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="1000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 2">
                                <a href="#" class="btn-home">Shop All</a>
                            </div>
                            <div class="tp-caption customin customout hidden-xs"
                                 data-x="145"
                                 data-y="430"
                                 data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 2">
                                <a href="#" class="btn-home">Read more</a>
                            </div>
                        </li>

                    </ul>
                    <div class="revolutiontimer"></div>
                </div>
            </div>
        </section>

        <section>
            <div>
                <div class="container">
                    
                            <div class="row">
                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="widget-title">
                                    <i class="fa fa-tag"></i> Browse Categories
                                </div>
                            </article> 
                           </div>
                            <?php ##Display Main Categories 

							$sqlarray="Select * from product_categories where parent='0' and homepage_dispaly='Y' limit 0,100";
							
							   $resarray=mysql_query($sqlarray);
							
							   for($s=0;$s<mysql_num_rows($resarray); $s++)
							
							   {
							
									$catIdarray[$s]=mysql_result($resarray,$s,"id");
							
									$catnamearray[$s]=mysql_result($resarray,$s,"name");
							
							
							
							   }
							  
							   
							
							   ?>
                                <? $totcol=0;
								?>
                                <div class="row">
                                <?php
							
									for($x=0;$x<sizeof($catIdarray);$x++)
							
									{
							
											 $totcol=$totcol+1;
							
											$catid=$catIdarray[$x];?>
                           <?

			    

				## display Subcategories 

				$res=mysql_query("Select id,name,picture from product_categories where parent='0' AND id='$catid' and  homepage_dispaly='Y'");

				$trows=mysql_num_rows($res);

				if(mysql_num_rows($res)>0)

				{

					$catiid=mysql_result($res,0,"id");

					$catname=mysql_result($res,0,"name");

					$catname=str_replace("&","&amp;",$catname);

					$picture=mysql_result($res,0,"picture")

					?> 

								<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <h3><div class="widget-block">
                                    <ul class="list-unstyled catalog">
                                        <li><a href="more_cats.php?catiid=<?=$catiid;?>">
                                        <i class="fa <?php if($catname=="Auto..."){?>fa-automobile<?php }
										else if($catname=="Clothing & Accessories..."){?>fa-male<?php } 
										else if($catname=="Entertainment..."){?>fa-music<?php } 
										else if($catname=="Food/Beverage"){?>fa-glass<?php } 
										else if($catname=="Computer &amp; Accessories"){?>fa-desktop<?php } 
										else if($catname=="Financial Services"){?>fa-money<?php } 
										else if($catname=="Games &amp; Toys..."){?>fa-gamepad<?php }
										else if($catname=="Hobbies &amp; Collectibles"){?>fa-pagelines<?php }
										else if($catname=="Home Furniture"){?>fa-gear<?php } 
										else if($catname=="Internet &amp; Online"){?>fa-laptop<?php } 
										else if($catname=="Miscellaneous"){?>fa-ge<?php } 
										else if($catname=="Office"){?>fa-pencil<?php } 
										else if($catname=="Health &amp; Beauty"){?>fa-female<?php } 
										else if($catname=="Home &amp; Living"){?>fa-home<?php }
										else if($catname=="Household Appliances"){?>fa-star<?php } 
										else if($catname=="Jewelry"){?>fa-female<?php } 
										else if($catname=="Mobile Phones"){?>fa-mobile<?php } 
										else if($catname=="Pets Accessories"){?>fa-paw<?php } 
										else if($catname=="Sports &amp; Fitness"){?>fa-star<?php } 
										else if($catname=="Telecommunications"){?>fa-phone<?php }
										else if($catname=="Travel"){?>fa-plane<?php }
										else {?>fa-male<?php }?>"></i><?=$catname;?>&nbsp;[<?=Pa($catid);?>]</a></li></ul></div></h3>
                                <p>
                                     <? $sqlcats="select * from product_categories where parent='$catiid' limit 0,3";

									$rescats=mysql_query($sqlcats);

									if(mysql_num_rows($rescats)>0)

									{

										while($rowcats=mysql_fetch_array($rescats))

										{

										$rowcats['name'];

										   ?> <a href="more_cats.php?catiid=<?=$rowcats['id']?>"><?=str_replace("&","&amp;",$rowcats['name']);?>&nbsp;[<?=Pa($rowcats['id']);?>]</a>&nbsp;&nbsp;|

           <?

										}

									}?>
                                </p>

                            </article>
                         <? if($totcol=="2"){

						echo "</div><div class=\"row\">";

						$totcol=0;

						}?>

       					<? }?>

        			     <? }?> 
                             <? if($totcol=="1"){

						echo "</div><div class=\"row\">";

						$totcol=0;

						}?>
                        <div class="header-with-icon">
                                <i class="fa fa-tags"></i> Popular Products
                                
                        </div>
                        <div class="block-product-tab">
                                <div class="tab-bg"></div>
                                <div class="toolbar-for-light" id="nav-tabs2">
                               
                                    <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                                </div>  
                                <ul class="nav nav-pills">
                                    <!--tabs for popular products-->
                                <?php /* Storing the query in a variable */

								$query = "SELECT distinct categories, product_categories.name, product_categories.id FROM product_categories, products where product_categories.id=categories limit 0,3";
								
														

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

								}//end while

							}	//end if	
?>
                                </ul>
                                <div class="tab-content">
                                <?php //first category or default category
								
								for($t=0; $t<sizeof($catprod);$t++){
								 $query1 = "SELECT name,  product_id FROM products WHERE  categories='" . $catprod[$t]."' order by rand() limit 0,6" ;
							
								
							
								$resultSet1 = mysql_query($query1);
							
							
								?>
                                    <div class="tab-pane <?php if($t==0){?>active<?php }?> animated fadeIn" id="<?php echo $t;?>">
                                        <div id="owl-<?php echo $t;?>"  class="owl-carousel">
                                        <? $s=0;

									 
										 while($row1 = mysql_fetch_array($resultSet1))
							
										{
							
										$s=$s+1;
							
										$PublisherName = $row1["name"];
							
										$BookPic = $row1["product_id"].".jpg";?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">                                                                        
                                                        <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>"  class="figure-href"></a>
                                                        <!--div class="product-sale">11% <br> off</div-->
                                                        <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-compare"><i class="fa fa-random"></i></a>
                                                        <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <?php if(file_exists("uploadimages/".$BookPic))//check if image exists
														{?><img src="uploadimages/<?=$BookPic;?>" class="img-overlay img-responsive" alt="<?=$PublisherName;?>" width="400" height="500">
																											<img src="uploadimages/<?=$BookPic;?>" class="img-responsive" alt="<?=$PublisherName;?>" width="400" height="500"><?php } else {?>
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-responsive"  width="400" height="500">
														<?php }?>
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-name"><?=$PublisherName;?></a>
                                                            <!--p class="product-price"><span>$330</span> $320.99</p-->

                                                        </div>
                                                        <div class="product-cart">
                                                            <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                                        </div>
														<div style="height:20px; width:100%;"></div>

                                                    </div>

                                                </div>
                                            </div>
                                            <?php

											}//end while for first category
								
											?>
                                            
                                        </div>
                                    </div>
							<?php } //end of for

							?>	
                                    
                                    
                                </div>

                            </div>
                            <!--second carousel-->
                            <div class="header-with-icon">
                                <i class="fa fa-tags"></i> Hot Products
                                
                        </div>
                            <div class="block-product-tab">
                                <div class="tab-bg"></div>
                                <div class="toolbar-for-light" id="nav-tabs2">
                               
                                    <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                                </div>  
                                <ul class="nav nav-pills">
                                    <!--tabs for popular products-->
                                <li class="active"><a href="#<?php echo $i++;?>" data-toggle="tab">Newest Products</a><div class="header-bottom-line"></div></li>
                  
                                    <li><a href="#<?php echo $i++;?>" data-toggle="tab" class="disabled">Coming Soon</a><div class="header-bottom-line"></div></li>
                                     <li><a href="#<?php echo $i++;?>" data-toggle="tab" class="disabled">Hot Products</a><div class="header-bottom-line"></div></li>
                                   
                                </ul>
                                <div class="tab-content">
                                <!--start newest products-->
                               			<div class="tab-pane active animated fadeIn" id="3">
                                          <div id="owl-3"  class="owl-carousel">
										  <?php	 	 
                                    //newest Products
                                            $sqlfeatured="select * from products ORDER BY pro_date desc  LIMIT 0 , 6 ";
                                    
                                            // echo $sqlfeatured; 
                                    
                                            $resfeatured=mysql_query($sqlfeatured);
                                    
                                       if(mysql_num_rows($resfeatured)>0)
                                    
                                       {  //------------If Start-------------------
                                    
                                            for($f=0;$f<mysql_num_rows($resfeatured);$f++)
                                    
                                            { //-------------For Start-------------------
                                    
                                                 $catiid1=mysql_result($resfeatured, $f, "categories");
                                    
                                                 //echo $catiid1;
                                    
                                                 $catname1=GetProductCatName($catiid1);
                                    
                                                 //echo $catname1.'rajesh Checked Function';
                                    
                                                 $productid=mysql_result($resfeatured, $f, "product_id"); 
                                    
                                                 $name=mysql_result($resfeatured,$f,"name");
                                    
                                                 $picture=$productid.".jpg";
                                    
                                                 $explode=explode(".",$picture);
                                    
                                                
                                    
                                                 $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";
                                    
                                                 $resmax=mysql_query($sqlmax) or die(mysql_error());
                                    
                                                 if(mysql_num_rows($resmax)>0)
                                    
                                                 {   //-------If stsrt---------
                                    
                                                    $max=mysql_result($resmax,0,"maxprice");
                                    
                                                 }   //---------End If----------
                                    
                                                 $sqlmin="select min(prices) as minprice from products_pz where product_id='$productid'";
                                    
                                                 $resmin=mysql_query($sqlmin)or die(mysql_error());
                                    
                                                 if(mysql_num_rows($resmin)>0)
                                    
                                                 { //----------------If Start----------------------
                                    
                                                    $min=mysql_result($resmin,0,"minprice");
                                    
                                                 }  //-------------- End If-------------------------
                                    
                                                 #######find in how many stores
                                    
                                    
                                    
                                                $totnumberofratings=GetProductNumberOfRatingById($productid);
                                    
                                                
                                    
                                                $totalrating=GetProductTotalOfRatingById($productid);
                                    
                                             if($totalrating!=0 && $totnumberofratings!=0)
                                    
                                             { //-------------If Start----------
                                    
                                                 $avgrating=GetProductAverageRatingById ($totalrating, $totnumberofratings);
                                    
                                             }  //-------------End If------------
                                    
                                             else
                                    
                                             {  //----------Else Start---------
                                    
                                                $avgrating="";
                                    
                                             }   //------------Else End------------
                                    
                                             #######find in how many stores
                                    
                                     $sqlprod="select distinct shops from products_pz where (description like '%$name%' or short_desc like '%$name%')";
                                    
                                            //echo $sqlprod;
                                    
                                            $resprod=mysql_query($sqlprod);
                                    
                                            $countshops=mysql_num_rows($resprod);
                                    
                                            
                                    
                                        ?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">                                                                        
                                                        <a href="products.php?catiid=<?=$catiid1;?>&amp;productid=<?=$productid;?>"  class="figure-href"></a>
                                                        <div class="product-new">new</div>
                                                        
                                                        <a href="products.php?catiid=<?=$catiid1;?>&amp;productid=<?=$productid;?>" class="product-compare"><i class="fa fa-random"></i></a>
                                                        <a href="products.php?catiid=<?=$catiid1;?>&amp;productid=<?=$productid;?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <?php if(file_exists("uploadimages/".$productid.".jpg"))
														{?><img src="uploadimages/<?=$productid;?>.jpg" alt="<?=$name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/<?=$productid;?>.jpg" alt="<?=$name;?>" class="img-responsive"  width="400" height="500"><?php } else {?>
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-responsive"  width="400" height="500">
														<?php }?>
                                                      
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <a href="products.php?catiid=<?=$catiid1;?>&amp;productid=<?=$productid;?>" class="product-name"><?php	 	 echo $name;?></a>
                                                            

                                                        </div>
                                                        <div class="product-cart">
                                                            <a href="products.php?catiid=<?=$catiid1;?>&amp;productid=<?=$productid;?>"><i class="fa fa-shopping-cart"></i> </a>
                                                        </div>
														<div style="height:20px; width:100%;"></div>

                                                    </div>

                                                </div>
                                            </div>
                                           <?php

											}
											
											}
											
											?>
                                            
                                        </div>
                                    </div>
							
                                    
                                    
                                
								<!--end newest product-->
                                <!-- start coming soon-->
                               
                               			<div class="tab-pane animated fadeIn" id="4">
                                          <div id="owl-4"  class="owl-carousel">
										  <?php	 //coming soon	 
											$sqlfeatured="select * from comingsoon LIMIT 0 ,6";
											
											$resfeatured=mysql_query($sqlfeatured);
										   if(mysql_num_rows($resfeatured)>0)
										   { //-----------If Start-------------------
												for($f=0;$f<mysql_num_rows($resfeatured);$f++)
												{  //------------For loop start----------------
													 $coming_soon_id=mysql_result($resfeatured, $f, "coming_soon_id");
													 $product_name=mysql_result($resfeatured,$f,"product_name");
													 $image=mysql_result($resfeatured,$f,"image");
													 $dated=mysql_result($resfeatured,$f,"dated");
										
											
										?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">                                                                        
                                                        
                                                        <?
													  if(file_exists("uploadimages/".$image))
													  {
													  ?><img src="uploadimages/<?=$image;?>" alt="<?=$product_name;?>" class="img-overlay img-responsive"  width="400" height="500">
                                                        <img src="uploadimages/<?=$image;?>" alt="<?=$product_name;?>" class="img-responsive"  width="400" height="500">				<?php } else {?>
														<img src="uploadimages/1007.jpg" alt="<?=$product_name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/1007.jpg" alt="<?=$product_name;?>" class="img-responsive"  width="400" height="500">
														<?php }?>
                                                      
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <?php	 	 echo $product_name;?><br/><?=$dated;?>

                                                        </div>
                                                        <div class="product-cart">
                                                           
                                                        </div>
														<div style="height:20px; width:100%;"></div>

                                                    </div>

                                                </div>
                                            </div>
                                           <?php

											}
											
											}
											
											?>
                                            
                                        </div>
                                    </div>
							
                                    
                                    
                                
                                <!--end coming soon-->
                                 <!-- start hot products-->
                               
                               			<div class="tab-pane animated fadeIn" id="5">
                                          <div id="owl-5"  class="owl-carousel">
										  <?php	 //hot products	 
											
										   $rowcount=0;
										   $gg="select * from hitcounter_product ORDER BY no_of_count desc limit 0,6";//check how many hits of the product
										   $fd=mysql_query($gg);
										  
										   while($ee=mysql_fetch_array($fd))
										   {
										   $no_of_count=$ee['no_of_count'];
										   
										   $product_id=$ee['product_id'];
										  
									   $sqlarray="select * from products where  product_id='$product_id' limit 0,6";
									   $resarray=mysql_query($sqlarray);
									   for($s=0;$s<mysql_num_rows($resarray); $s++)
									   {
											$prod_id=mysql_result($resarray,$s,"product_id");
											$cat_id=mysql_result($resarray,$s,"categories");
											$catname=GetProductCatName($cat_id);
											
											$product_name=mysql_result($resarray,$s,"name");
											$product_picture=$prod_id.".jpg";
									 $sqlmin="select min(prices) as minprice from products_pz where product_id='$prod_id'";
									 $resmin=mysql_query($sqlmin);
									 if(mysql_num_rows($resmin)>0)
									 {
										$min=mysql_result($resmin,0,"minprice");
									 }
									 $rowcount=$rowcount+1;
								
									?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">                                                                        
                                                        <a href="products.php?catiid=<?=$cat_id;?>&productid=<?=$prod_id;?>"  class="figure-href"></a>
                                                        <!--div class="product-sale">11% <br> off</div-->
                                                        <a href="products.php?catiid=<?=$cat_id;?>&productid=<?=$prod_id;?>" class="product-compare"><i class="fa fa-random"></i></a>
                                                        <a href="products.php?catiid=<?=$cat_id;?>&productid=<?=$prod_id;?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <?php if(file_exists("uploadimages/".$product_picture))
														{?><img src="uploadimages/<?=$product_picture;?>" alt="<?=$product_name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/<?=$product_picture;?>" alt="<?=$product_name;?>" class="img-responsive"  width="400" height="500"><?php } else {?>
														<img src="uploadimages/1007.jpg" alt="<?=$product_name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/1007.jpg" alt="<?=$product_name;?>" class="img-responsive"  width="400" height="500">
														<?php }?>
                                                      
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <a href="products.php?catiid=<?=$cat_id;?>&productid=<?=$prod_id;?>" class="product-name"><?php	 	 echo $product_name;?></a>
                                                            <!--p class="product-price"><span>$330</span> $320.99</p-->

                                                        </div>
                                                        <div class="product-cart">
                                                            <a href="products.php?catiid=<?=$cat_id;?>&productid=<?=$prod_id;?>"><i class="fa fa-shopping-cart"></i> </a>
                                                        </div>
														<div style="height:20px; width:100%;"></div>

                                                    </div>

                                                </div>
                                            </div>
                                           <?php

											}
											
											}
											
											?>
                                            
                                        </div>
                                    </div>
							
                                    
                                    
                                
                                <!--end hot products-->
                                </div>
                            </div>
                            <!--second carousel end-->
                            <div class="header-with-icon">
                                <i class="fa fa-tags"></i> Women
                                <div class="toolbar-for-light" id="nav-summer-sale">
                                    <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div id="owl-summer-sale"  class="owl-carousel">
                                <?php $querywomen = "SELECT name,  product_id FROM products WHERE  categories='271' order by rand() limit 0,6" ;
							
								//echo $query1;
							
								$resultwomen = mysql_query($querywomen);?>
                                <? $s=0;

									  //echo mysql_num_rows($resultSet);
							
										 while($row1 = mysql_fetch_array($resultwomen))
							
										{
							
										$s=$s+1;
							
										$PublisherName = $row1["name"];
							
										$BookPic = $row1["product_id"].".jpg";?>
                                        <div class="text-center">
                                
                                    <article class="product light wow fadeInUp">
                                        <figure class="figure-hover-overlay">                                                                        
                                            <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>"  class="figure-href"></a>
                                                        <!--div class="product-sale">11% <br> off</div-->
                                                        <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-compare"><i class="fa fa-random"></i></a>
                                                        <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <?php if(file_exists("uploadimages/".$BookPic))//check if image exists
														{?><img src="uploadimages/<?=$BookPic;?>" class="img-overlay img-responsive" alt="<?=$PublisherName;?>" width="400" height="500">
																											<img src="uploadimages/<?=$BookPic;?>" class="img-responsive" alt="<?=$PublisherName;?>" width="400" height="500"><?php } else {?>
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-responsive"  width="400" height="500">
														<?php }?>
                                        </figure>
                                        <div class="product-caption">
                                            <div class="block-name">
                                                <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-name"><?=$PublisherName;?></a>
                                                <!--p class="product-price"><span>$330</span> $320.99</p-->

                                            </div>
                                            <div class="product-cart">
                                                <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                               <?php

											}//end while for first category
								
											?>
                                
                                
                            </div>

                            <div class="header-with-icon">
                                <i class="fa fa-male"></i> Man
                                <div class="toolbar-for-light" id="nav-child">
                                    <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div id="owl-child"  class="owl-carousel">
                                <?php $querywomen = "SELECT name,  product_id FROM products WHERE  categories='269' order by rand() limit 0,6" ;
							
								
							
								$resultwomen = mysql_query($querywomen);?>
                                <? $s=0;

									  
										 while($row1 = mysql_fetch_array($resultwomen))
							
										{
							
										$s=$s+1;
							
										$PublisherName = $row1["name"];
							
										$BookPic = $row1["product_id"].".jpg";?>
                                        <div class="text-center">
                                
                                    <article class="product light wow fadeInUp">
                                        <figure class="figure-hover-overlay">                                                                        
                                            <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>"  class="figure-href"></a>
                                                        <!--div class="product-sale">11% <br> off</div-->
                                                        <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-compare"><i class="fa fa-random"></i></a>
                                                        <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <?php if(file_exists("uploadimages/".$BookPic))//check if image exists
														{?><img src="uploadimages/<?=$BookPic;?>" class="img-overlay img-responsive" alt="<?=$PublisherName;?>" width="400" height="500">
																											<img src="uploadimages/<?=$BookPic;?>" class="img-responsive" alt="<?=$PublisherName;?>" width="400" height="500"><?php } else {?>
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/1007.jpg" alt="<?=$name;?>" class="img-responsive"  width="400" height="500">
														<?php }?>
                                        </figure>
                                        <div class="product-caption">
                                            <div class="block-name">
                                                <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>" class="product-name"><?=$PublisherName;?></a>
                                                

                                            </div>
                                            <div class="product-cart">
                                                <a href="products.php?catiid=<?=$_GET['BkID'];?>&amp;productid=<?=$row1['product_id'];?>"><i class="fa fa-shopping-cart"></i> </a>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                               <?php

											}//end while for first category
								
											?>
                            </div>

							
                            
                            
                            <div class="row">
                            <div class="col-md-2"></div>
                                 <div class="col-md-4">
                            <a href="rebates.php">
                            <article class="payment-service">
                                
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active" style="font-size:44px !important;">Rebates</h3>
                                        <p>Click for Rebates</p>
                                    </div>
                                </div>
                            </article></a>
                        </div>
                               
                                <div class="col-md-4">
                            <a href="coupons.php">
                            <article class="payment-service">
                                
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active" style="font-size:44px !important;">Coupons</h3>
                                        <p>Click for Coupons</p>
                                    </div>
                                </div>
                            </article></a>
                        </div><div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

        </section>

       
   <!-- start footer--->
   <?php include("footer.php");?>    
   <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
<script src="jquery.rwdImageMaps.min.js"></script>
<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
	$('area').on('click', function() {
		alert($(this).attr('alt') + ' clicked');
	});
});
</script>