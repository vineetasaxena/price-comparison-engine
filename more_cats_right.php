<aside class="col-md-3">
                            <div class="main-category-block ">
                                <div class="main-category-title">
                                    <i class="fa fa-list"></i> Category

                                </div>
                            </div>
                            <div class="widget-block">
                                <ul class="list-unstyled ul-side-category">
                                    <li><a href=""><i class="fa fa-angle-right"></i> Man / 2</a>
                                        <ul class="sub-category">
                                            <li><a href="">Dress / 2</a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Dress 1</a></li>
                                                    <li><a href="#">Dress 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Shirt / 2</a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Shirt 1</a></li>
                                                    <li><a href="#">Shirt 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=""><i class="fa fa-angle-right"></i> Woman / 2</a>
                                        <ul class="sub-category">
                                            <li><a href="">Dress / 2 </a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Dress 1</a></li>
                                                    <li><a href="#">Dress 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Shirt / 2</a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Shirt 1</a></li>
                                                    <li><a href="#">Shirt 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i> Tablet / 0</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i> Laptop / 0</a>
                                    </li>

                                </ul>

                            </div>
                            <div class="product light last-sale">
                                <figure class="figure-hover-overlay">                                                                        
                                    <a href="#"  class="figure-href"></a>
                                    <div class="product-sale">Save <br> 7%</div>
                                    <div class="product-sale-time"><p class="time"></p></div>
                                    <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                    <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                    <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                    <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                </figure>
                                <div class="product-caption">
                                    <div class="block-name">
                                        <a href="#" class="product-name">Product name</a>
                                        <p class="product-price"><span>$330</span> $320.99</p>

                                    </div>
                                    <div class="product-cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                    </div>
                                </div>

                            </div>
                            <div class="widget-title">
                                <i class="fa fa-money"></i> Price range

                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" id="price-from" class="form-control" value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" id="price-to" class="form-control" value="500">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="widget-title">
                                <i class="fa fa-dashboard"></i> Colors

                            </div>
                            <div class="widget-block">
                                <ul class="colors clearfix list-unstyled">
                                    <li><a href="" rel="003d71"></a></li>
                                    <li><a href="" rel="c42c39"></a></li>
                                    <li><a href="" rel="f4bc08"></a></li>
                                    <li><a href="" rel="02882c"></a></li>
                                    <li><a href="" rel="000000"></a></li>
                                    <li><a href="" rel="caccce"></a></li>
                                    <li><a href="" rel="ffffff"></a></li>
                                    <li><a href="" rel="f9e7b6"></a></li>
                                    <li><a href="" rel="ef8a07"></a></li>
                                    <li><a href="" rel="5a433f"></a></li>
                                </ul>
                            </div>
                            <div class="widget-title">
                                <i class="fa fa-thumbs-up"></i> Bestseller
                            </div>
                            <?php //Best seller products
							$cats[]=$catiid; 
				
						   $cate="select * from product_categories where parent='$catiid'";
				
						   $rescate=mysql_query($cate);
				
						   if(mysql_num_rows($rescate)>0)
				
						   {
				
								while($rowcate=mysql_fetch_array($rescate))
				
								{
				
									$cats[]=$rowcate['id'];
				
									$catesub="select * from product_categories where parent='".$rowcate['id']."'";
				
									$rescatesub=mysql_query($catesub);
				
									if(mysql_num_rows($rescatesub)>0)
				
									{
				
										while($rowcatesub=mysql_fetch_array($rescatesub))
				
										{
				
											$cats[]=$rowcatesub['id'];
				
											$catesubsub="select * from product_categories where parent='".$rowcatesub['id']."'";
				
											$rescatesubsub=mysql_query($catesubsub);
				
											if(mysql_num_rows($rescatesubsub)>0)
				
											{
				
												while($rowcatesubsub=mysql_fetch_array($rescatesubsub))
				
												{
				
													$cats[]=$rowcatesubsub['id'];
				
												}
				
											}
				
										}
				
									}
				
								}
				
								
				
								
				
						   }
				
								 if(sizeof($cats)>0)
				
								{
				
									$categories=implode(",",$cats);
				
									 $sqlarray="select * from products where categories in ($categories)  limit 0,10";
				
							   $resarray=mysql_query($sqlarray);
				
							   for($s=0;$s<mysql_num_rows($resarray); $s++)
				
							   {
				
									$prod_id=mysql_result($resarray,$s,"product_id");
				
									$cat_iid=mysql_result($resarray,$s,"categories");
				
									$catname=GetProductCatName($catiid);
				
									$product_name=mysql_result($resarray,$s,"name");
				
									$product_picture=$prod_id.".jpg";
				
							 		$description=mysql_result($resarray,$s,"description"); 
				
							$description=ucwords(getPartialString($description,30));
				
							?>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-3">
                                        <?php if(file_exists("uploadimages/".$product_picture))	{
					
										?>
                    				<img class="img-responsive" src="uploadimages/<?=$product_picture;?>" alt="" title=""> 
                                     <?php } else {?>
                                            
                                            <img src="uploadimages/1007.jpg" class="img-responsive" alt="<?=$product_name;?>">
                                            <?php }?>     
                                    </div>
                                    <div class="col-md-8  col-sm-10 col-xs-9">
                                        <div class="block-name">
                                            <a href="products.php?productid=<?=$prod_id;?>" class="product-name"><?=$product_name;?></a>
                                           

                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                            </div>
                                            <a href="" class="review hidden-md">8 Reviews</a>
                                        </div>
                                        <p class="description"><?php echo $description;?></p>
                                    </div>
                                </div>
                            </div>
                            <?

		  		}

		  

		  

				}

		   

		  ?>

                        </aside>