<?php ob_start();
session_start();

include "lang/left_link_lang.php";
//$_SESSION['CI_valid_user'];
?>
					<aside class="col-md-3">
                    <? 
					if(isset($_SESSION['CI_valid_user']))
					{
					?>
                    <div class="main-category-block ">
                                <div class="main-category-title">
                                    <i class="fa fa-list"></i> Member's Area

                                </div>
                    </div>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                    <?=$lang['ll_My_Acount']?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                
                                                        <ul class="list-unstyled catalog"> 
                                                            <li>
                                                                <a href="<?=$wwwroot;?>Account_info.php"><i class="fa fa-user"></i> <?=$lang['ll_Ainformation']?></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?=$wwwroot;?>setting_profiles.php"><i class="fa fa-unlock-alt"></i> <?=$lang['ll_Psettings']?></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?=$wwwroot;?>logout_vv.php"><i class="fa fa-sign-out"></i> Logout</a>
                                                            </li>
                        
                                                        </ul>
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                                    <?=$lang['ll_Sist']?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                 <?php //saved items or wishlist
					$sql="select * from saved_list where username='".$_SESSION['CI_valid_user']."'";
					$res=mysql_query($sql) or print("Sorry".mysql_error());
					for($i=0;$i<mysql_num_rows($res);$i++)
					{
					$productid=mysql_result($res,$i,"product_id");
					$username=mysql_result($res,$i,"username");
					$sql2="select * from products where  product_id='$productid'";
					$res2=mysql_query($sql2);
					for($r=0;$r<mysql_num_rows($res2);$r++)
					{
					$pro_id=mysql_result($res2,$r,"product_id");
					$pics=$pro_id.".jpg";
					$product_name=GetProductNameById ($pro_id);
					$description=mysql_result($res2,$r,"description");
					$description=ucwords(getPartialString($description,30));
					?>  
                    		<div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-3">
                                        <?php if(file_exists("uploadimages/".$pics))	{
					
										?>
                    				<img class="img-responsive" src="uploadimages/<?=$pics;?>" alt="" title=""> 
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
                            <?php

						}
					}
					?> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                                 <?=$lang['ll_MyReceViewed']?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body"> 
                                            <ul class="list-unstyled catalog"> 
                                                <?
												$sqlmem="select * from members_profile where email='".$_SESSION['CI_valid_user']."'";
												$resm=mysql_query($sqlmem);
												while($val=mysql_fetch_array($resm))
												{
												$member_id=$val['member_id'];
												}
												$sqlr="select * from my_recent_view where user_id='$member_id' ORDER BY recent_id desc limit 0,2";
												$resdd=mysql_query($sqlr);
												while($count=mysql_fetch_array($resdd))
												{
												$mem_id=$count['user_id'];
												$productid=$count['product_id'];
												$pro_name=GetProdName($productid);
												
												?>
                                                
                                                            <li>
                                                                <a href="products.php?productid=<?=$productid;?>" class="product-name" ><?=$pro_name;?></a>
                                                            </li>
                                                           
                        
                                                        
                                                <?php }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--start recent searches-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
                                                 <?=$lang['ll_MyReSearches']?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body"> 
                                            <ul class="list-unstyled catalog"> 
												 <?php	 	
                                                  $sql="select distinct catiid from popular_products ORDER BY id desc limit 0,2";
                                                  $catiid1=mysql_query("$sql");
                                                  $name1=array();
                                                  while($catiid2=mysql_fetch_array($catiid1,MYSQL_ASSOC))
                                                  {
                                                     $categories=$catiid2['catiid'];
                                                     $sql="select * from product_categories where id=$categories";
                                                     $product_categories1=mysql_query("$sql");
                                                     $row=mysql_num_rows($product_categories1);
                                                      $total[]=$row;
                                                      $product_categories2=mysql_fetch_array($product_categories1,MYSQL_ASSOC);
                                                      $name1[]=($product_categories2['name']);
													  $cat[]=($product_categories2['id']);
                                                  }
                                                     arsort($total);
                                                     ?>
                                                     <?
                                                                                        
                                           ?>
                                           
                                           <?php		
                                                while(list($key,$value)=each($total))
                                                    {
                                                                                   
                                           ?>
                                                
                                                            <li>
                                                                <a href="more_cats.php?catiid=<?=$cat[$key];?>"><?=$name1[$key];?></a>
                                                            </li>
                                                           
                        						
                                                        
                                                <?php }?>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end recent seraches-->
                                </div>
                   
                   
                  
                    <?php } elseif(isset($_SESSION['CI_valid_merchant']))
  					  {?>Merchant Area<?php 
					  
					  include"lang/merchant_lang.php";
						$sql="select * from shops where email='".$_SESSION['CI_valid_merchant']."'";
						$res=mysql_query($sql);
						while($row=mysql_fetch_array($res))
						{
						$shopid=$row['shops_id'];
						$store_name=$row['store_name'];
						}
						$totnumberofratingsshop=GetProductNumberOfRatingByIShop($shopid);
						$totalratingshop=GetProductTotalOfRatingByIdShop($shopid);
						 if($totalratingshop!=0 && $totnumberofratingsshop!=0){
						 $avgratingshop=AverageRatingByIdshop($totalratingshop, $totnumberofratingsshop);
						 }
						 else
						 {
							
							 print $avgratingshop="";
									
						}
						?>
                        <div class="main-category-block ">
                                <div class="main-category-title">
                                    <i class="fa fa-list"></i> Member's Area

                                </div>
                    </div>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                    <?=$lang['mleft_Acount']?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                
                                                        <ul class="list-unstyled catalog"> 
                                                            <li>
                                                                <a href="<?=$wwwroot;?>merchant_info.php"><i class="fa fa-user"></i> <?=$lang['mleft_Ainformation']?></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?=$wwwroot;?>merchant_edit_info.php"><i class="fa fa-unlock-alt"></i> <?=$lang['mleft_Psettings']?></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?=$wwwroot;?>merchantproducts.php"><i class="fa fa-unlock-alt"></i> Products</a>
                                                            </li>
                                                             <li>
                                                                <a href="<?=$wwwroot;?>proposed_products.php"><i class="fa fa-unlock-alt"></i> Proposed Products</a>
                                                            </li>
                                                             <li>
                                                                <a href="<?=$wwwroot;?>productclick.php"><i class="fa fa-unlock-alt"></i> Total Click[<?php	 	 echo TotalClick($_SESSION['CI_valid_merchant_id']);?>]</a>
                                                            </li>
                                                             
                                                            <li>
                                                                <a href="<?=$wwwroot;?>logout_vv.php"><i class="fa fa-sign-out"></i> Logout</a>
                                                            </li>
                        
                                                        </ul>
                        
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        
                        <?php
					  
					  
					  
					  
					  
					  
					  } else {?>
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
                          <?php }?>  
                           
                            
                            
                            

                        </aside>