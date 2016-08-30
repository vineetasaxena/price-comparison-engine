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
                <div class="block">
                    <div class="container">
                    <? include("left_link.php"); ?>
                        
                        <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                <div class="header-for-light">
                                    
                                   
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Top <span> Stores</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                    <thead>
                                        <tr>
                                            <th class="card_product_image">Logo</th>
                                            <th class="card_product_name">Retailer</th>
                                            <th class="card_product_model">Store Info.</th>
                                            <th class="card_product_quantity">Reviews</th>
                                            <th class="card_product_quantity">Prices</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                         <?php	 	  if (!(isset($pagenum))) 
									 { 
									 $pagenum = 1; 
									 } 
									  $sql2="select * from shops ";
									  //echo $sql;
									  $shops2=mysql_query("$sql2");
									   $rows = mysql_num_rows($shops2);
									  //This is the number of results displayed per page 
									 $page_rows = 4; 
									 
									 //This tells us the page number of our last page 
									 $last = ceil($rows/$page_rows); 
									 
									 //this makes sure the page number isn't below one, or more than our maximum pages 
									 if ($pagenum < 1) 
									 { 
									 $pagenum = 1; 
									 } 
									 elseif ($pagenum > $last) 
									 { 
									 $pagenum = $last; 
									 } 
									 
									 //This sets the range to display in our query 
									 $max = 'limit ' .($pagenum - 1) * $page_rows .',' .$page_rows; 
									 //echo "SELECT * FROM shops $max";
									   $count=0;
									   $shops1 = mysql_query("SELECT * FROM shops $max") or die(mysql_error());
									  while($shops2=mysql_fetch_array($shops1,MYSQL_ASSOC))
									 { 
										
										$shops_id=$shops2['shops_id'];
										$pDetail=$shops2['overviews'];
										$picture=$shops2['logo'];	   
										$explode=explode(".",$picture);
										$count=$count+1;
								 ?>
                                 <tr>
                                            <td class="card_product_image" data-th="Logo" ><?php	 	
											if($picture=="")
											{  //---------If start-----------
											?>
													  <img src="images/icon_image_not_available_b.gif" width="100" height="120" alt="<?php	 	 echo $shops2['store_name'];?>" />
													  <?php	 	 } //-------------End If----------------
											 else 
											 {  //-----------Else Start-----------
											   
										  ?>
													  <img src="logo/<?php	 	 echo $picture;?>" width="100" alt="<?php	 	 echo $shops2['store_name'];?>" />
													  <?php	 	 
											 }    //-----------Else End------------------
										   ?> </td>
                                            <td class="card_product_name" data-th="Retailer"><?php	 	 echo '<b>'.$shops2['store_name'].'</b>';?><br/><?php	 	 echo $pDetail;?></td>
                                            <td class="card_product_model" data-th="Store Info."><a href="merchant_shop.php?shopid=<?php	 	 echo $shops_id;?>" class="mid_cata"><? echo $shops2['store_name'];?> store Info.</a> </td>
                                            <td class="card_product_quantity" data-th="Reviews"><a href="review.php?shopid=<?php	 	 echo $shops_id;?>" class="mid_cata">Consumer Reviews</a></td>
                                            <td class="card_product_quantity" data-th="Prices"><a href="individual_prod.php?shopid=<?php	 	 echo $shops_id;?>" class="cata_txt">Products</a></td>
                                            
                                            
                                        </tr>
                                        
										 <? }
                                       ?>
                                        
                                      <tr><td class="mid_cata" colspan="5">
<?php	 	 // This shows the user what page they are on, and the total number of pages
 echo " --Page $pagenum of $last-- <p>";
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.
 if ($pagenum == 1) 
 {
 } 
 else 
 {
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1'> <<-First</a> ";
 echo " ";
 $previous = $pagenum-1;
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'> <-Previous</a> ";
 } 
 //just a spacer
 echo " ---- ";
 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
 if ($pagenum == $last) 
 {
 } 
 else {
 $next = $pagenum+1;
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Next -></a> ";
 echo " ";
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last ->></a> ";
 } ?>
</td></tr>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                            </div>
                            </article>

                    </div>
                </div>
            </div> 
        </section>

<!-- start footer--->
   
   <?php include("footer.php");?>  