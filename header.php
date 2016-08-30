<?php ob_start();
   session_start();
   $pagename=basename($_SERVER['PHP_SELF']);//finds the current pagename
   include("config.php");
   include("connection.php");
   include ("lang/eng/header.php");
 ?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">``
        <![endif]-->
        <title><?php echo $title;?></title>
        <meta name="description" content="<?php echo $description;?>">
       <meta name="keywords" content="<?php echo $keywords;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="<?php echo $wwwroot;?>css/theme-style.css">
        <link rel="stylesheet" href="<?php echo $wwwroot;?>css/ie.style.css">
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $wwwroot;?>css/font-awesome-ie7.css">
        <![endif]-->
        <script src="<?php echo $wwwroot;?>js/vendor/modernizr.js"></script>
        <!--[if IE 8]><script src="<?php echo $wwwroot;?>js/vendor/less-1.3.3.js"></script><![endif]-->
        <!--[if gt IE 8]><!--><script src="<?php echo $wwwroot;?>js/vendor/less.js"></script><!--<![endif]-->
       

    </head>
    <body>
    <?php include_once("analyticstracking.php") ?><!--google analytics-->
        <!-- Header-->
        <header id="header">
            <div class="header-top-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-welcome hidden-xs hidden-sm">
                                <p>Welcome to <?php echo $actualsitename;?> &nbsp;&nbsp;<i class="fa fa-phone"></i> <?php echo $phonenumber;?> &nbsp; <i class="fa fa-envelope"></i> <?php echo $emailsfrom;?></p> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <!-- header - language -->
                                <div id="lang" class="pull-right">
                                <?php if($_SESSION['language']=="eng"){?>
                                    <a href="<?php echo $pagename;?>?language=eng" class="lang-title"><img src="<?php echo $wwwroot;?>img/f-gb.png" alt="English" title="English"> English <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled lang-item">
                                        <li class="active"><a href="<?php echo $pagename;?>?language=esp"><img src="<?php echo $wwwroot;?>img/f-gb.png" alt="Spanish" title="Spanish"> Spanish</a></li>
                                        <li><a href="<?php echo $pagename;?>?language=fre"><img src="<?php echo $wwwroot;?>img/f-fr.png" alt="French" title="French"> French</a></li>
                                    </ul>
                                    <?php } else if($_SESSION['language']=="esp"){?>
                                    <a href="<?php echo $pagename;?>?language=esp" class="lang-title"><img src="<?php echo $wwwroot;?>img/f-gb.png" alt="Spanish" title="Spanish"> Spanish <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled lang-item">
                                        <li class="active"><a href="<?php echo $pagename;?>?language=eng"><img src="<?php echo $wwwroot;?>img/f-gb.png" alt="English" title="English"> English</a></li>
                                        <li><a href="<?php echo $pagename;?>?language=fre"><img src="<?php echo $wwwroot;?>img/f-fr.png" alt="French" title="French"> French</a></li>
                                    </ul>
                                     <?php } else if($_SESSION['language']=="fre"){?>
                                    <a href="<?php echo $pagename;?>?language=fre" class="lang-title"><img src="<?php echo $wwwroot;?>img/f-fr.png" alt="French" title="French"> French <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled lang-item">
                                        <li class="active"><a href="<?php echo $pagename;?>?language=eng"><img src="<?php echo $wwwroot;?>img/f-gb.png" alt="English" title="English"> English</a></li>
                                        <li><a href="<?php echo $pagename;?>?language=esp"><img src="<?php echo $wwwroot;?>img/f-gb.png" alt="Spanish" title="Spanish"> Spanish</a></li>
                                    </ul>
                                    <?php }?>
                                </div>
                                <!-- /header - language -->

                                <!-- header - currency -->
                                <div id="currency" class="pull-right">
                                    <a href="" class="currency-title">$ USD <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled currency-item">
                                        <li><a href="">€ EURO</a></li>
                                        <li><a href="">£ POUND</a></li>
                                    </ul>
                                </div>
                                <!-- /header - currency -->

                                <!-- header-account menu -->
                                <div id="account-menu" class="pull-right">
                                    <a href="" class="account-menu-title"><i class="fa fa-user"></i>&nbsp; Account <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled account-menu-item">
                                        <li><a href="top_store1.php"><i class="fa fa-heart"></i>&nbsp; Top Stores</a></li>
                                        <li><a href="gift.php"><i class="fa fa-check"></i>&nbsp; Gifts</a></li>
                                        <li><a href="buying_guide1.php"><i class="fa fa-shopping-cart"></i>&nbsp; Guides</a></li>
                                        <li><a href="brands_index.php"><i class="fa fa-heart"></i>&nbsp; Brands</a></li>
                                        <li><a href="login.php"><i class="fa fa-check"></i>&nbsp; Visitor Area</a></li>
                                    </ul>
                                </div>
                                <!-- /header-account menu -->

                                <!-- header - currency -->
                                <div class="socials-block pull-right">
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /header - currency -->
                            </div>

                        </div>
                    </div>




                </div>
            </div>
            <!-- /header-top-row -->
            <div class="header-bg">
                <div class="header-main" id="header-main-fixed">
                    <div class="header-main-block1">
                        <div class="container">
                            <div id="container-fixed">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!--a href="index.php" class="header-logo"> 
                               
                                
                                   
                                
                           <img src="<?php echo $wwwroot;?>img/logo-big-shop.png" alt=""></a-->        
                                    </div>

                                    <div class="col-md-5">
                                        <div class="top-search-form pull-left">
                                            <form action="search1.php" method="post">
                                                <input type="text" id="txtAutoSuggest" name="keyword" placeholder="Search ..." class="form-control">
                                                <select name="categoryiid" class="form-control">
                                                <option value="all">All</option>
                                                <?php 	$sqlcatmain="select * from product_categories where parent='0'";
                                                $rescatmain=mysqli_query($sqlcatmain);
                                    			if(mysql_num_rows($rescatmain)>0)
                                                { 
                                    				 while($rowcat=mysql_fetch_array($rescatmain))
                                                     {
														$catiiid=$rowcat['id'];
														$catname=$rowcat['name'];
														$catname=str_replace("&","&amp;",$catname);
														?>
														<option value="<?=$catiiid;?>" <? if($catiiid==$catiid) { echo "selected"; }?>>-
														<?=$catname;?>
														</option>
														<?php $sqlcatsub="select * from product_categories where parent='$catiiid'";
															  $rescatsub=mysql_query($sqlcatsub);
															  if(mysql_num_rows($rescatsub)>0)
															  { 
																	while($rowcatsub=mysql_fetch_array($rescatsub))
																	{
																		$catiidsub=$rowcatsub['id'];
																		$catnamesub=$rowcatsub['name'];
																		$catnamesub=str_replace("&","&amp;",$catnamesub);
																		?>
																			<option value="<?=$catiidsub;?>" <? if($catiidsub==$catiid) { echo "selected"; }?>>--
																			<?=$catnamesub;?>
																			</option>
																			<?php $sqlcatmicro="select * from product_categories where parent='$catiidsub'";
																				  $rescatmicro=mysql_query($sqlcatmicro);
																				  if(mysql_num_rows($rescatmicro)>0)
																				  { 
																						while($rowcatmicro=mysql_fetch_array($rescatmicro))
																						{
																							$catiidmicro=$rowcatmicro['id'];
																							$catnamemicro=$rowcatmicro['name'];
																							$catnamemicro=str_replace("&","&amp;",$catnamemicro);
																							?>
																								<option value="<?=$catiidmicro;?>" <? if($catiidmicro==$catiid) { echo "selected"; }?>>---
																								<?=$catnamemicro;?>
																								</option>
																				   <?php }//while($rowcatmicro=mysql_fetch_array($rescatmicro))
																				 }//if(mysql_num_rows($rescatmicro)>0)
																	}//while($rowcatsub=mysql_fetch_array($rescatsub))
											
															 }//if(mysql_num_rows($rescatsub)>0)
													 }//while($rowcat=mysql_fetch_array($rescatmain))
                                    			 }//if(mysql_num_rows($rescatmain)>0)?>
                                    
                                    
                                    
                                            </select>
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>  
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="header-mini-cart  pull-right">
                                            <a href="categories.php">
                                                All Categories
                                               
												
                                                <span><?php echo mysql_num_rows($rescatmain);?> categories</span>
                                            </a>
                                            <div class="dropdown-menu shopping-cart-content pull-right">
                                                <div class="shopping-cart-items">
                                                    <div class="item pull-left">
                                                        <img src="http://placehold.it/56x70" alt="Product Name" class="pull-left">
                                                        <div class="pull-left">
                                                            <p>Product Name</p>
                                                            <p>$251.00&nbsp;<strong>x 3</strong></p>
                                                        </div>
                                                        <a href="" class="trash"><i class="fa fa-trash-o pull-left"></i></a>
                                                    </div>
                                                    <div class="item pull-left">
                                                        <img src="http://placehold.it/56x70" alt="Product Name" class="pull-left">
                                                        <div class="pull-left">
                                                            <p>Product Name</p>
                                                            <p>$77.05&nbsp;<strong>x 1</strong></p>
                                                        </div>
                                                        <a href="" class="trash"><i class="fa fa-trash-o pull-left"></i></a>
                                                    </div>
                                                    <div class="item pull-left">
                                                        <img src="http://placehold.it/56x70" alt="Product Name" class="pull-left">
                                                        <div class="pull-left">
                                                            <p>Product Name</p>
                                                            <p>$50.10&nbsp;<strong>x 8</strong></p>
                                                        </div>
                                                        <a href="" class="trash"><i class="fa fa-trash-o pull-left"></i></a>
                                                    </div>
                                                    <div class="total pull-left">
                                                        <table>
                                                            <tbody class="pull-right">
                                                                <tr>
                                                                    <td><b>Sub-Total:</b></td>
                                                                    <td>$500.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Eco Tax (-1.00):</b></td>
                                                                    <td>$7.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>VAT (7.4%):</b></td>
                                                                    <td>$80.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr class="color-active">
                                                                    <td><b>Total:</b></td>
                                                                    <td><b>$575.99</b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="#" class="btn-read pull-right">Checkout</a>
                                                        <a href="#" class="btn-read pull-right">View Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /header-mini-cart -->
                                        <div class="top-icons">
                                            <div class="top-icon"><a href="save_list.php" title="Wishlist"><i class="fa fa-heart"></i></a></div>
                                            <div class="top-icon"><a href="" title="Notification"><i class="fa fa-bell"></i></a><span>12</span></div>
                                            <div class="top-icon"><a href="login.php" title="Login"><i class="fa fa-lock"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="header-main-block2">
                        <nav class="navbar yamm  navbar-main" role="navigation">

                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    <a href="index.php" class="navbar-brand"><i class="fa fa-home"></i></a>
                                </div>
                                <div id="navbar-collapse-1" class="navbar-collapse collapse ">
                                    <ul class="nav navbar-nav">
                                        <!-- Classic list -->
                                     
                      					<?php $sql="select * from product_categories where parent='0' and id='$catiid'";
									
									  $res=mysql_query($sql) or print("Sorry".mysql_error());
									
									  while($rs=mysql_fetch_array($res))
									
									  {
									
									  $selectname=$rs['name'];
									
									  $selectname=str_replace("&","&amp;",$selectname);
									
										
									
									  }
									
									  ?>
									
									  <?
									
									  $sql="select * from product_categories where parent='0' limit 0,3";
									
									  $res=mysql_query($sql) or print("Sorry".mysql_error());
									
									  while($rs=mysql_fetch_array($res))
									
									  {
									
									  $name=$rs['name'];
									
									  $name=str_replace("&","&amp;",$name);
									
									  $catiiid=$rs['id'];
									
									  if($name==$selectname)
									
									  {
									
									  
									
									  ?><li class="dropdown open"><a href="more_cats.php?catiid=<?=$catiiid;?>"><?=$name;?></a> </li>
                                      												<?

									  }
									
									  else
									
									  {
									
									  ?>
                                      <li class="dropdown"><a href="more_cats.php?catiid=<?=$catiiid;?>"><?=$name;?></a> </li>
                                      <?php }
									  } ?>
                                      <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Premium Stores <i class="fa fa-caret-right fa-rotate-45"></i></a>
                                            <ul class="dropdown-menu list-unstyled fadeInUp animated">
                                                <li>
                                                    <a  href="amazon_store.php"> Amazon Store </a>
                                                </li>
                                                <li>
                                                    <a  href="ebay_store.php"> Ebay Store</a>
                                                </li>
                                                <li>
                                                    <a  href="premium_stores.php">Super Stores</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        

                                        <!-- With content -->
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="contactus.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- /header-main-menu -->
            </div>
        </header>
