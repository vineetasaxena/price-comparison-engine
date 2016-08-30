<?php ob_start();
session_start();

include"lang/merchant_lang.php";

if($_SESSION['CI_valid_merchant']=="" || !$_SESSION['CI_valid_merchant'])
{
header("Location:merchant_login.php");
die;
}
?>
<?
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

					<aside class="col-md-3">
                   <?php if(isset($_SESSION['CI_valid_merchant']))
  					  {?><?php 
					  
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
                                    <i class="fa fa-list"></i> Merchant's Area

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
					  
					  
					  
					  
					  
					  
					  } ?>  
                           
                            
                            
                            

                        </aside>