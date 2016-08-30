<aside class="col-md-3">
                            <div class="main-category-block ">
                                
                                <div class="main-category-items">
                                    <div class="widget-block">
                                        
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                    Category
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <ul class="list-unstyled ul-side-category">
                                            <li><a href="more_cats.php?catiid=120"><i class="fa fa-angle-right"></i> Audio</a></li>
                                            <li><a href="more_cats.php?catiid=118"><i class="fa fa-angle-right"></i> Digital Camera</a></li>
                                            <li>
                                                <a href="more_cats.php?catiid=73"><i class="fa fa-angle-right"></i> Top Cellphones</a>
                                            </li>
                                            <li>
                                                <a href="more_cats.php?catiid=119"><i class="fa fa-angle-right"></i> Flash Cards</a>
                                            </li>
                                            <li>
                                                <a href="more_cats.php?catiid=65"><i class="fa fa-angle-right"></i> Popular Furnitures</a>
                                            </li>
                                            <li>
                                                <a href="more_cats.php?catiid=62"><i class="fa fa-angle-right"></i> Top Kids Toys</a>
                                            </li>
                                             <li>
                                                <a href="categories.php"><i class="fa fa-angle-right"></i> More...</a>
                                            </li>

                                        </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>

                                    </div>
                                </div>
                            </div>



							<?php //Show any random product
							 $queryrand = "SELECT * FROM products order by rand() limit 0,1" ;
							 $resultrand = mysql_query($queryrand);
							 
                             while($rowrand = mysql_fetch_array($resultrand))
							
										{
							
																
										$prodname = $rowrand["name"];
										$prodcat=$rowrand["categories"];
										$product_id=$rowrand["product_id"];
										$prodpic = $rowrand["product_id"].".jpg";?>
                            <article class="product light last-sale">
                                <figure class="figure-hover-overlay">                                                                        
                                    <a href="products.php?catiid=<?=$prodcat;?>&amp;productid=<?=$rowrand["product_id"];?>"  class="figure-href"></a>
                                                        <!--div class="product-sale">11% <br> off</div-->
                                                        <a href="products.php?catiid=<?=$prodcat;?>&amp;productid=<?=$rowrand["product_id"];?>" class="product-compare"><i class="fa fa-random"></i></a>
                                                        <a href="products.php?catiid=<?=$prodcat;?>&amp;productid=<?=$rowrand["product_id"];?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <?php if(file_exists("uploadimages/".$prodpic))//check if image exists
														{?><img src="uploadimages/<?=$prodpic;?>" class="img-overlay img-responsive" alt="<?=$prodname;?>" width="400" height="500">
																											<img src="uploadimages/<?=$prodpic;?>" class="img-responsive" alt="<?=$prodname;?>" width="400" height="500"><?php } else {?>
														<img src="uploadimages/1007.jpg" alt="<?=$prodname;?>" class="img-overlay img-responsive"  width="400" height="500">
														<img src="uploadimages/1007.jpg" alt="<?=$prodname;?>" class="img-responsive"  width="400" height="500">
														<?php }?>
                                </figure>
                                <div class="product-caption">
                                    <div class="block-name">
                                        <a href="products.php?catiid=<?=$prodcat;?>&amp;productid=<?=$rowrand["product_id"];?>" class="product-name"><?php echo $prodname;?></a>
                                        <?php $sqlmax="select max(prices) as maxprice from products_pz where product_id='$product_id'";
                                    
                                                 $resmax=mysql_query($sqlmax) or die(mysql_error());
                                    
                                                 if(mysql_num_rows($resmax)>0)
                                    
                                                 {   //-------If stsrt---------
                                    
                                                    $max=mysql_result($resmax,0,"maxprice");
                                    
                                                 }   //---------End If----------
                                    
                                                 $sqlmin="select min(prices) as minprice from products_pz where product_id='$product_id'";
                                    
                                                 $resmin=mysql_query($sqlmin)or die(mysql_error());
                                    
                                                 if(mysql_num_rows($resmin)>0)
                                    
                                                 { //----------------If Start----------------------
                                    
                                                    $min=mysql_result($resmin,0,"minprice");
                                    
                                                 }  //-------------- End If-------------------------
												 ?>
                                        
                                        <p class="product-price">$<?php echo $min;?> - $<?php echo $max;?></p>

                                    </div>
                                    <div class="product-cart">
                                        <a href="products.php?catiid=<?=$prodcat;?>&amp;productid=<?=$rowrand["product_id"];?>"><i class="fa fa-shopping-cart"></i> </a>
                                    </div>
                                </div>

                            </article>
							<?php }?>

                            <div class="widget-title">
                                <i class="fa fa-thumbs-up"></i> Bestseller
                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-3">
                                        <img class="img-responsive" src="http://placehold.it/400x500.jpg" alt="" title="">   
                                    </div>
                                    <div class="col-md-8  col-sm-10 col-xs-9">
                                        <div class="block-name">
                                            <a href="#" class="product-name">Product name</a>
                                            <p class="product-price"><span>$330</span> $320.99</p>

                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                            </div>
                                            <a href="" class="review hidden-md">8 Reviews</a>
                                        </div>
                                        <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-3">
                                        <img class="img-responsive" src="http://placehold.it/400x500" alt="" title="">   
                                    </div>
                                    <div class="col-md-8 col-sm-10 col-xs-9">
                                        <div class="block-name">
                                            <a href="#" class="product-name">Product name</a>
                                            <p class="product-price"><span>$330</span> $320.99</p>

                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                            </div>
                                            <a href="" class="review hidden-md">8 Reviews</a>
                                        </div>
                                        <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>



                            <div class="widget-title">
                                <i class="fa fa-comments"></i> Latest Posts
                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4  col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="" title="">   
                                    </div>
                                    <div class="col-md-8  col-sm-10 col-xs-8">
                                        <div class="block-name">
                                            <a href="#" class="product-name">Summer sale</a>

                                        </div>
                                        <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="" title="">   
                                    </div>
                                    <div class="col-md-8 col-sm-10 col-xs-8">
                                        <div class="block-name">
                                            <a href="#" class="product-name">Call now</a>

                                        </div>
                                        <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="" title="">   
                                    </div>
                                    <div class="col-md-8 col-sm-10 col-xs-8">
                                        <div class="block-name">
                                            <a href="#" class="product-name">Good day</a>

                                        </div>
                                        <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-title">
                                <i class="fa fa-tags"></i> Tags
                            </div>
                            <div class="widget-block">
                                <ul class="list-unstyled tags">
                                    <li><a href="#">men</a></li>
                                    <li><a href="#">women</a></li>
                                    <li><a href="#">top</a></li>
                                    <li><a href="#">clothes</a></li>
                                    <li><a href="#">sale</a></li>
                                    <li><a href="#">short</a></li>
                                    <li><a href="#">dresses</a></li>
                                    <li><a href="#">skirt</a></li>
                                    <li><a href="#">top</a></li>
                                </ul>
                            </div>


                        </aside>