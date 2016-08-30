<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="Hi5Brands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");
include"lang/merchant_lang.php";
if($_SESSION['CI_valid_merchant']=="" || !$_SESSION['CI_valid_merchant'])
{
header("Location:merchant_login.php");
die;
}
?>


        <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                    <?php include("merchant_left_link.php"); ?>
                     


                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                <div class="header-for-light"><?php	 	 echo $_SESSION['CI_valid_merchant'];?> 
                                <hr>
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Search Customer  <span> Clickthroughs</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                    <thead>
                                        <tr>
                                            <th class="card_product_image"><?=CATEGORY?> </th>
                                            <th class="card_product_name"><?=PRODUCT?> </th>
                                             <th class="card_product_model"> <?=DATE?></th>
                                            <th class="card_product_quantity"><?=IP?> </th>
                                            <th class="card_product_price"><?=BROWSER?></th>
                                            <th class="card_product_total"><?=BUY?> </th>
                                            <th class="card_product_total"><?=PAID?> </th>
                                            
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                    
                                         <? $sqlss="select product_categories.name as catname, products.categories as catid, products_pz.product_id as productid, products.name as productname, REDIRECT_TIME, IP_ADDRESS, ISPAYED, ISBUY , BROWSER  from pc_clickthroughs, products_pz, products, product_categories where products_pz.product_id=products.product_id and products.categories=product_categories.id and products_pz.product_id=pc_clickthroughs.USER_PRODUCT_ID and  ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'";
			if($payment!="")
			{
				if($payment=="Y")
				{
					$sqlss.=" and ISPAYED='Y'";
				}
				else
				{
					$sqlss.=" and ISPAYED=''";
				}
			}
			if($Month!="")
			{
			  $sqlss.="and MONTH(REDIRECT_TIME)='$Month'";
			}
			if($Year!="")
			{
			  $sqlss.="and Year(REDIRECT_TIME)='$Year'";
			}
			$ressql=mysql_query($sqlss);
			if(mysql_num_rows($ressql)>0)
			{
				while($rowss=mysql_fetch_array($ressql))
				{
				?><tr>
                                            <td class="card_product_image" data-th="<?=CATEGORY?>"><a href="more_cats.php?catiid=<?=$rowss['catid'];?>"> 
                <?=$rowss['catname'];?>
                </a></td>
                                            <td class="card_product_name" data-th="<?=PRODUCT?>"><a href="products.php?catiid=<?=$rowss['catid'];?>&productid=<?=$rowss['productid'];?>"> 
                <?=$rowss['productname'];?>
                </a></td>
                							<td class="card_product_model" data-th="<?=DATE?>"><?=$rowss['REDIRECT_TIME'];?></td>
                                            <td class="card_product_quantity" data-th="<?=IP?>"><?=$rowss['IP_ADDRESS'];?></td>
                                            <td class="card_product_price" data-th="<?=BROWSER?>"><?=$rowss['BROWSER'];?></td>
                                            <td class="card_product_total" data-th="<?=BUY?>"><?=$rowss['ISBUY'];?></td>
                                            <td class="card_product_total" data-th="<?=PAID?>"><?=$rowss['ISPAYED'];?></td>
                                        </tr>
                                            
                                            
                                        </tr>
					<?php }
			} else {
			?>
            <tr> 
              <td class="card_product_image" data-th="<?=CATEGORY?>">No Records</td>
                                            
            </tr>
            <?
			}
			?>
                                        
                                      
                                    </tbody>
                                    
                                </table>
                                <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                    <thead>
                                        <tr>
                                            <th class="card_product_name">Paid Clicks</th>
                                            <th class="card_product_model">UnPaid Clicks</th>
                                            <th class="card_product_quantity">Clicks this month</th>
                                            <th class="card_product_price">Clicks last month</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td class="card_product_name" data-th="Paid Clicks"><? $sqlpaid="select * from pc_clickthroughs where ISPAYED='Y' and  ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'";
			     $respaid=mysql_query($sqlpaid);
				echo mysql_num_rows($respaid);
				
			  ?></td>
                                            <td class="card_product_model" data-th="UnPaid Clicks"><? $sqlpaidn="select * from pc_clickthroughs where ISPAYED='' and  ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'";
			     $respaidn=mysql_query($sqlpaidn);
				echo mysql_num_rows($respaidn);
				
			  ?></td>
                                            <td class="card_product_quantity" data-th="Clicks this month"><? $thismonth=date("m");
			  $sqlthismonth="select * from pc_clickthroughs where MONTH(REDIRECT_TIME)='$thismonth' and  ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'";
			     $resthismonth=mysql_query($sqlthismonth) or die(mysql_error());
				echo mysql_num_rows($resthismonth);
				
			  ?></td>
                                            <td class="card_product_price" data-th="Clicks last month"> <? $lastmonth=date("m")-1;
											if(strlen($lastmonth)<2)
											{
												$lastmonth="0".$lastmonth;
											}
										  $sqllastmonth="select * from pc_clickthroughs where MONTH(REDIRECT_TIME)='$lastmonth' and  ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'";
											 $reslastmonth=mysql_query($sqllastmonth);
											echo mysql_num_rows($reslastmonth);
											
										  ?></td>
                                           
                                        </tr>

                                        

                                        
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