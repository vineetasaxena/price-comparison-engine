<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
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
                    
                    <?php
					$sql="select * from shops where email='".$_SESSION['CI_valid_merchant']."'";
					$res=mysql_query($sql);
					while($rs=mysql_fetch_array($res))
					{
					$logo_store=$rs['logo'];
					$adressemail=$rs['email'];
					$firstname=$rs['firstname'];
					$lastname=$rs['lastname'];
					$phone=$rs['phone'];
					$mobile=$rs['mobile'];
					$fax=$rs['fax'];
					$website_name=$rs['website_name'];
					$address1=$rs['address1'];
					$email=$rs['address2'];
					$city=$rs['city'];
					$state=$rs['state'];
					$country=$rs['country'];
					$region=$rs['region'];
					$store_name=$rs['store_name'];
					$overviews=$rs['overviews'];
					$tip=$rs['tip'];
					$zipcode=$rs['zipcode'];
					$bankacc=$rs['bankacc'];
					$bankname=$rs['bankname'];
					$url=$rs['url'];
					$zipcode=$rs['zipcode'];
					$contact_info=$rs['contact_info'];
					$payment_methods=$rs['payment_methods'];
					$delivery_methods=$rs['delivery_methods'];
					$customer_service=$rs['customer_service'];
					$description=$rs['description'];
					}
					?>
					<?
					 $contact_inf=explode(",",$contact_info);
					 $payment_pay=explode(",",$payment_methods);
					 $delivery=explode(",",$delivery_methods);
					 $additional_service=explode(",",$customer_service);
					?>


                        <div class="row">
                        
                            <?php include("merchant_left_link.php"); ?>
                            <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                <div class="header-for-light">
                                    
                                    <a href="merchant_changepassword.php" class="btn-default-1">Change Password</a>
                                
                                    <a href="merchant_logo_edit.php" class="btn-default-1">Change Logo</a>
                                    <hr>
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Account  <span>Information</span></h1>
                        </div><div class="block-product-detail">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="product-image">
                                            <img id="product-zoom"  src='./logo/<?php echo $logo_store;?>' data-zoom-image="./logo/<?php echo $logo_store;?>" alt="<?=$store_name;?>">
                                            <div id="gal1">

                                                <a href="javascript:;" data-image="./logo/<?php echo $logo_store;?>" data-zoom-image="./logo/<?php echo $logo_store;?>">
                                                    <img id="img_01" src="./logo/<?php echo $logo_store;?>" alt="<?=$store_name;?>">
                                                </a>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">


                                        <div class="product-detail-section">
                                            
                                           

                                            <div class="product-information">
                                                <div class="clearfix">
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Addressss']?></label> <?=$adressemail;?>
                                                </div>
                                                    <label class="pull-left"><?=$lang['mi_FName']?></label> <?php echo $firstname;?><br>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_LName']?></label> <?php echo $lastname;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_PNo']?></label> <?php echo $phone;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_MNo']?></label> <?php echo $mobile;?><br>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Fax']?></label> <?php echo $fax;?>
                                                </div>
                                                
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_WebPage']?></label> <?php echo $website_name;?><br>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Address']?></label> <?php echo $address1;?>
                                                </div>
                                                
                                               <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Cityssss']?></label> <?=$city;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_State']?></label> <?=$state;?>
                                                </div>
                                                 <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Country']?></label> <?=$country;?>
                                                </div>
                                                
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Region']?></label> <?=$region;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_CName']?></label> <?=$store_name;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Overviews']?></label> <?=$overviews;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Tpjuridica']?></label> <?=$tip;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Codsunic']?></label> <?=$zipcode;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Baccount']?></label> <?=$bankacc;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Bname']?></label> <?=$bankname;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_URL']?></label> <?=$url;?>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_CInfo']?></label> <?
											  $count=0;
											 for($i=0;$i<count($contact_inf);$i++)
											 {
											 $count=$count+1;
											 $sqlc="select * from contact_table where contact_id='$contact_inf[$i]'";
											 $ressc=mysql_query($sqlc);
											 while($rscc=mysql_fetch_array($ressc))
											 {
											 $contact_time=$rscc['contact_time'];payment
											  ?><?=$contact_time;?>
                                              <?
												}
												?>
												<?
												if($count==2)
												{
												
												$count=0;
												}
												}
												?>
                                                </div>
                                                
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_POption']?></label> <?
											  $count1=0;
											 for($r=0;$r<count($payment_pay);$r++)
											 {
											 $count1=$count1+1;
											  $sqlu="select * from payment where pay_id='$payment_pay[$r]'";
														  $resu=mysql_query($sqlu)or print mysql_error();
														  while($ree=mysql_fetch_array($resu))
														  {
														  $payment_name=$ree['payment_name'];
														  
														   
														   ?><?=$payment_name;?>
                                              <?
												}
												?>
												<?
												if($count1==2)
												{
												
												$count1=0;
												}
												}
												?>
                                                </div>
                                                
												<div class="clearfix"> 
                                                <label class="pull-left"><?=$lang['mi_Delivery']?></label>   <?
                                                  $count2=0;
                                                 for($i=0;$i<count($delivery);$i++)
                                                 {
                                                 $count2=$count2+1;
                                                  ?><?=$delivery[$i];?>
                                              <?
												if($count2==2)
												{
												
												$count2=0;
												}
												}
												?>
                                                </div>

												
                                                <div class="clearfix"> 
                                                <label class="pull-left"><?=$lang['mi_AService']?></label>   <?
												  $count3=0;
												 for($i=0;$i<count($additional_service);$i++)
												 {
												 $count3=$count3+1;
												  ?><?=$additional_service[$i];?>
												 <?
                                                if($count3==2)
                                                {
                                                
                                                $count3=0;
                                                }
                                                }
                                                ?>
                                                </div>
                                                
                                                
                                                <div class="clearfix"> 
                                                    <label class="pull-left"><?=$lang['mi_Description']?></label> <?=$description;?>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </article>
                            
                        </div>
                       
                        
                    </div>
                </div>
            </div> 
        </section>


 <!-- start footer--->
   
   <?php include("footer.php");?>  