<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");?>  
<? ob_start();
session_start();
 $member_id=$_SESSION['CI_valid_id'];
?>
 <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="container">
                    <div class="row">
						<?php include("left_link.php");?>
                        <? if(isset($_REQUEST['productid'])){
								$productsreviewid=$_REQUEST['productid'];
								$productid=$_REQUEST['productid'];
								}
								elseif(isset($_REQUEST['product'])){
								$productsreviewid=$_REQUEST['product'];
								$productid=$_REQUEST['product'];
								}
								
								  $sqlfeatured="select * from products where product_id='".$productid."'";
								 
								   $resfeatured=mysql_query($sqlfeatured);
								   if(mysql_num_rows($resfeatured)>0)
								   {
										for($f=0;$f<mysql_num_rows($resfeatured);$f++)
										{
											 $catiid=mysql_result($resfeatured, $f, "categories");
											 $description=mysql_result($resfeatured, $f, "description");
											 $short_desc=mysql_result($resfeatured, $f, "short_desc");
											 $catname=GetProductCatName($catiid);
											 $name=mysql_result($resfeatured, $f, "name");
											 
											 $productid=mysql_result($resfeatured, $f, "product_id"); 
											 
											 $picture=$productid.".jpg";
											 $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";
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
											 }
											 #######find in how many stores
											$sqlprod="select distinct shops from products_pz where  product_id='$productid'";
											$resprod=mysql_query($sqlprod);
											$countshops=mysql_num_rows($resprod);
											$totnumberofratings=GetProductNumberOfRatingById($productid,$member_id);
										 $totalrating=GetProductTotalOfRatingById ($productid,$member_id);
										 if($totalrating!=0 && $totnumberofratings!=0){
											$avgrating=GetProductAverageRatingById ($totalrating, $totnumberofratings);
										 }
										 else
										 {
											$avgrating="<img src=\"images/rating_0.png\" border=0>";
											$totalrating=0;
										 }
										 }
									}?>
                        <div class="col-md-9">
                            <div class="block-breadcrumb">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo $wwwroot;?>index.php">Home</a></li>
                                    <li><a href="products.php?productid=<?php echo $productid;?>"><?php echo $name;?></a></li>
                                    <li class="active">Write Review</li>
                                </ul>
                            </div>
							
                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Write <span>Reviews</span> For <?=$name;?> </h1>

                            </div>
                            
                           <div class="block-product-detail">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="product-image">
                                           <?php 
											if(file_exists("uploadimages/$picture"))
											{
										?> <a href="uploadimages/<?php echo $picture;?>" data-lightbox="product" data-title="Product name" data-image="uploadimages/<?php echo $picture;?>" data-zoom-image="uploadimages/<?php echo $picture;?>" >
                                                    <img id="img_01" src="uploadimages/<?php echo $picture;?>" alt="" width="400">
                                                </a>
                                            <div id="gal1">

                                                <a href="uploadimages/<?php echo $picture;?>" data-lightbox="product" data-title="Product name" data-image="uploadimages/<?php echo $picture;?>" data-zoom-image="uploadimages/<?php echo $picture;?>" style="width:100px;">
                                                    <img id="img_01" src="uploadimages/<?php echo $picture;?>" alt="" width="100" height="120">
                                                </a>
                                                </div>
                                                <?php } 
                                                
                                                    else
                                                
                                                    {
                                                
                                                    ?>

	&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/icon_image_not_available_b.gif"><? }?>
                                               
                                            </div>
                                        </div>

                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">


                                        <div class="product-detail-section">
                                            <h3><?=$name;?></h3>
                                            <div class="product-rating">
                                                <div class="stars">
                                                   <?=$avgrating;?> 
                                                </div>
                                                <a href="#write" class="review"><?php echo $totnumberofratings;?> reviews</a> 
                                            </div>

                                            <div class="product-information">
                                               
                                                
                                                <div class="clearfix">
                                                    <label class="pull-left">Description:</label>
                                                    <p class="description"> <?php	 	 echo ucwords(getPartialDesc($description,600, $link="more_detail_product.php?catiid=".$catiid."&productid=".$productid."")); ?></p>
                                                </div>
                                                <?php //calculate max min price range and store count

											   $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";
								
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
								
											 }
								
											 #######find in how many stores
								
											$sqlprod="select distinct shops from products_pz where  product_id='$productid'";
								
											$resprod=mysql_query($sqlprod);
								
											$countshops=mysql_num_rows($resprod);
								
											  ?>
                                                <div class="clearfix">
                                                    <label class="pull-left">Price Range:</label>
                                                    <p class="product-price">$	<?=$min;?>  to $ <?=$max;?> stores(<?=$countshops;?>)</p>
                                                </div>
                                                
                                                <div class="shopping-cart-buttons">

                                                    <a href="price_alert.php?producidtalert=<?php echo $productid;?>&price=<?php	 	 echo $min;?>" class="shoping"><i class="fa fa-shopping-cart"></i>  Add Alert</a>
                                                    <a href="save_list.php?pro_id1=<?=$productid;?>" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="writereview.php?product=<?=$productid;?>" title="Review"><i class="fa fa-comment"></i></a>
                                                    <a href="discussions/main_discussions.php?productid=<?=$productid;?>" title="Discussions"><i class="fa fa-users"></i></a>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                
                                
                                
                               
                               
                            
                            <?
session_start();
$productid=$_POST['productid'];
$how_to_have_you_used=$_POST['how_to_have_you_used'];
$similar_product=$_POST['similar_product'];
$functionality=$_POST['functionality'];
$quality=$_POST['quality'];
$value_of_memory=$_POST['value_for_money']; 
$strength=$_POST['strength']; 
$weakness=$_POST['weakness']; 
$review_id=$_POST['review_id'];
$member_id=$_POST['member_id'];
$oid=$_POST['oid'];
$mid=$_POST['mid'];
$prod_id_next=$_POST['prod_id_next'];
$catiid=$_POST['catiid'];
$format=$_POST['format'];
$cs_id=$_POST['cs_id'];
$edit=$_POST['edit'];
$rate_num=$_POST['rate_num'];
$inc=$_POST['inc'];
$aud=$_POST['aud'];
$login_review=$_POST['login_review'];
$product_rating_score=$_POST['product_rating_score'];
$product_recommend=$_POST['product_recommend'];
$review_pros=$_POST['review_pros'];
$review_cons=$_POST['review_cons'];
$review_title=$_POST['review_title'];
$body_text=$_POST['body_text'];
$easeofuse=$_POST['easeofuse'];
$submit_login_x=$_POST['submit_login_x'];

?>
<script language="JavaScript" type="text/javascript">var noads =0;</script>

<?
  $email=$_POST['email'];
  $pass=$_POST['password'];
  if(isset($_SESSION['CI_valid_user']))
  $email=$_SESSION['CI_valid_user'];
  
  $CI_valid_user=$_SESSION['CI_valid_user'];
  if($email!="" && $pass!="")
  {
  $sqlfind="select email,password,member_id from members_profile where email='$email' and password='$pass'";
	$resfind=mysql_query($sqlfind);
	
	if(mysql_num_rows($resfind)>0)
	{ 
		$email=mysql_result($resfind,0,"email");
		$member_id=mysql_result($resfind,0,"member_id");
		$CI_valid_user=$email;
		$CI_valid_id=$member_id;
		if(!($_SESSION['CI_valid_user']))
		{
			$_SESSION['CI_valid_user']=$CI_valid_user;
			$_SESSION['CI_valid_id']=$CI_valid_id;
			
		}

   }
   else
   {
   ?>
   <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                    <h3>Login Incorrect</h3>
                                    <p>This Email and Password Combination Does Not Exist</p>
                                    <hr>
   
						
				<form name="frm" action="writereview.php" method="post">
				<input type="hidden" name="how_to_have_you_used" value="<?=$how_to_have_you_used;?>">
				<input type="hidden" name="similar_product" value="<?=$similar_product;?>">
				<input type="hidden" name="functionality" value="<?=$functionality;?>">
				<input type="hidden" name="quality" value="<?=$quality;?>">
				<input type="hidden" name="value_for_money" value="<?=$value_for_money;?>">
				<input type="hidden" name="strength" value="<?=$strength;?>">
				<input type="hidden" name="weakness" value="<?=$weakness;?>">

				<input type="hidden" name="review_title" value="<?=$review_title;?>">
				
				<input type="hidden" name="easeofuse" value="<?=$easeofuse;?>">

				<input type="hidden" name="summary" value="<?=$summary;?>">

				<input type="hidden" name="productid" value="<?=$productid;?>">
				<input type="hidden" name="product_rating_score" value="<?=$product_rating_score;?>">
				<input type="hidden" name="product_recommend" value="<?=$product_recommend;?>">

				<input type="submit"  class="btn-default-1" value="Edit review" />
				</form>
     </div>
                                

                            </article>
	<?
		
   		
   }
  }
   else
   {
   		if(!isset($_SESSION['CI_valid_user'])){
			
				?>
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                    <h3>Email or Password Blank</h3>
                                    <p>You cannot leave email and password blank</p>
                                    <hr>
					<form name="edit_review_form" action="writereview.php" method="post">
					<input type="hidden" name="how_to_have_you_used" value="<?=$how_to_have_you_used;?>">
					<input type="hidden" name="similar_product" value="<?=$similar_product;?>">
					<input type="hidden" name="functionality" value="<?=$functionality;?>">
					<input type="hidden" name="quality" value="<?=$quality;?>">
					<input type="hidden" name="value_for_money" value="<?=$value_for_money;?>">
					<input type="hidden" name="strength" value="<?=$strength;?>">
					<input type="hidden" name="weakness" value="<?=$weakness;?>">
					<input type="hidden" name="review_title" value="<?=$review_title;?>">
					
					<input type="hidden" name="easeofuse" value="<?=$easeofuse;?>">

					<input type="hidden" name="summary" value="<?=$summary;?>">

					<input type="hidden" name="productid" value="<?=$productid;?>">
					<input type="hidden" name="product_rating_score" value="<?=$product_rating_score;?>">
					<input type="hidden" name="product_recommend" value="<?=$product_recommend;?>">

					<input type="submit"  class="btn-default-1" value="Edit review" />
					</form>
     </div>
                                

                            </article>
				<? }
			}
			 if(isset($_SESSION['CI_valid_user'])){
$sqlfeatured="select * from products where product_id='$productid'";
   $resfeatured=mysql_query($sqlfeatured);
   if(mysql_num_rows($resfeatured)>0)
   {
   		for($f=0;$f<mysql_num_rows($resfeatured);$f++)
		{
			 $catiid=mysql_result($resfeatured, $f, "categories");
			 $description=mysql_result($resfeatured, $f, "description");
			 $short_desc=mysql_result($resfeatured, $f, "short_desc");
			 $catname=GetProductCatName($catiid);
			 $productid=mysql_result($resfeatured, $f, "product_id"); 
		     $picture=mysql_result($resfeatured, $f, "picture");
			 $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";
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
			 }
			 #######find in how many stores
			
			$totnumberofratings=GetProductNumberOfRatingById($productid,$member_id);
		 $totalrating=GetProductTotalOfRatingById ($productid,$member_id);
		 if($totalrating!=0 && $totnumberofratings!=0){
			 $avgrating=GetProductAverageRatingById ($totalrating, $totnumberofratings);
		 }
		 else
		 {
		 	$avgrating="";
		 }
		 }
	}?>
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s"><article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                             				<div class="row"><a name="write"></a>
                                            <p>Write a Review of <?=$name;?>
                                            Note: As you write your review, please follow these guidelines *
                                            <ol><li>Focus your review on the product. Try to avoid comments that are off-topic.</li>
                                            <li>Explain why you do or don't recommend this product.</li>
											<li>Stick to the facts. We encourage your opinions but when stating a fact, try to be as accurate as possible.</li>
		<li>Please do not use offensive language.</li>
		<li>Be thorough and use proper grammar, spelling, capitalization, and punctuation.</li></ol>
		<div>*hi5brands.com reserves the right to remove an individual product review at any time.</div>
                                            
                                            
                                            </div>
                             
                                             <div class="row">
                                            <!--functionality start-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Functionality :<span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p>
                                               <div style="float:left; width:33%;">
                                                   
                                                        <img src="images/rating_<?php echo $functionality;?>.png" width="73" height="11" />
                                                   
                                                </div>
                                                <div style="float:left; width:33%;">
                                                    
                                                         <? if($functionality=="5")
														{
														echo "Excellent";
														}
														elseif($functionality=="4")
														{
														echo "Very Good";
														}
														elseif($functionality=="3")
														{
														echo "Average";
														}
														elseif($functionality=="2")
														{
														echo "Poor";
														}
														elseif($functionality=="1")
														{
														echo "Awful";
														}
														?>
                                                   
                                                </div></p>
                                                                         					
                                                 </article>
                                                 
                                               
                            					
                                                 
                                                    </div>


                                                </div>
                                                <!--functionality end-->
                                                <!--quality start-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Quality :<span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p>
                                               <div style="float:left; width:33%;">
                                                   
                                                        <img src="images/rating_<?php echo $quality;?>.png" width="73" height="11" />
                                                   
                                                </div>
                                                <div style="float:left; width:33%;">
                                                    
                                                         <? if($quality=="5")
														{
														echo "Excellent";
														}
														elseif($quality=="4")
														{
														echo "Very Good";
														}
														elseif($quality=="3")
														{
														echo "Average";
														}
														elseif($quality=="2")
														{
														echo "Poor";
														}
														elseif($quality=="1")
														{
														echo "Awful";
														}
														?>
                                                   
                                                </div></p>
                                                                         					
                                                 </article>
                                                    </div>


                                                </div><!--quality end-->
                                                </div>
                                                
                                                <div class="row">
                                            <!--rate start-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">How would you rate this product? <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p>
                                               <div style="float:left; width:33%;">
                                                   
                                                        <img src="images/rating_<?php echo $product_rating_score;?>.png" width="73" height="11" />
                                                   
                                                </div>
                                                <div style="float:left; width:33%;">
                                                    
                                                         <? if($product_rating_score=="5")
														{
														echo "Excellent";
														}
														elseif($product_rating_score=="4")
														{
														echo "Very Good";
														}
														elseif($product_rating_score=="3")
														{
														echo "Average";
														}
														elseif($product_rating_score=="2")
														{
														echo "Poor";
														}
														elseif($product_rating_score=="1")
														{
														echo "Awful";
														}
														?>
                                                   
                                                </div></p>
                                                                         					
                                                 </article>
                                               </div>


                                                </div>
                                                <!--rate end-->
                                                <!--Value for Money start-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Value for Money :<span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p>
                                               <div style="float:left; width:33%;">
                                                   
                                                        <img src="images/rating_<?php echo $value_for_money;?>.png" width="73" height="11" />
                                                   
                                                </div>
                                                <div style="float:left; width:33%;">
                                                    
                                                         <? if($value_for_money=="5")
														{
														echo "Excellent";
														}
														elseif($value_for_money=="4")
														{
														echo "Very Good";
														}
														elseif($value_for_money=="3")
														{
														echo "Average";
														}
														elseif($value_for_money=="2")
														{
														echo "Poor";
														}
														elseif($value_for_money=="1")
														{
														echo "Awful";
														}
														?>
                                                   
                                                </div></p>
                                                                         					
                                                 </article>
                                                </div>


                                                </div><!--value_for_money end-->
                                                </div>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Do You Recommend This Product? <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                       <?php echo $product_recommend;?>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">How Long have you used the product? (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                   <?=$how_to_have_you_used;?>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Which similar products have you used ?(60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <?=$similar_product;?>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Title of review: (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <?=$review_title;?>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">What are the strengths? (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <?=$strength;?>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">What are the weakness? (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <?=$weakness;?>
                                                     </article>
                                                    </div>
                                                </div>
                                                
													 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Summary: (Minimum 50 words) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                     <?=$summary;?>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Ease of Use:<span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                          
                           							<p><div style="float:left;width:100%;">
                                                         <? if($easeofuse==1)
														{ 
														echo "Excellent - It is easy to use right out of the box";
														}
														elseif($easeofuse==2)
														{
															echo "Very Good - Fairly easy to learn and use";
														}
														elseif($easeofuse==3)
														{
															echo "Average - Steep learning curve, but manageable";
														}
														elseif($easeofuse==4)
														{
															echo "Poor - Hard to use even after learning";
														}
														elseif($easeofuse==4)
														{
															echo "Awful - Virtually impossible to use";
														}?>
                                                    </div>
                                               </p>
                                               
                            					</article>
                                                 </article>
                                               
                                                    </div>


                                                </div>
                                            </div>
                                         
                                <div class="col-md-12">
                                                <hr />    
                                        <form name="edit_review_form" action="writereview.php" method="post">
         
		  
									  <input type="hidden" name="how_to_have_you_used" value="<?=$how_to_have_you_used;?>">
							        <input type="hidden" name="similar_product" value="<?=$similar_product;?>">
							        <input type="hidden" name="functionality" value="<?=$functionality;?>">
							        <input type="hidden" name="quality" value="<?=$quality;?>">
							        <input type="hidden" name="value_for_money" value="<?=$value_for_money;?>">
							        <input type="hidden" name="strength" value="<?=$strength;?>">
							        <input type="hidden" name="weakness" value="<?=$weakness;?>">
									  <input type="hidden" name="review_title" value="<?=$review_title;?>" />
							             
							              <input type="hidden" name="easeofuse" value="<?=$easeofuse;?>" />
							              <input type="hidden" name="summary" value="<?=$summary;?>" />
							             
							              <input type="hidden" name="productid" value="<?=$productid;?>" />
							              <input type="hidden" name="product_rating_score" value="<?=$product_rating_score;?>" />
							              <input type="hidden" name="product_recommend" value="<?=$product_recommend;?>" />
							             
							              <input type="submit"  class="btn-default-1" value="Edit review" />
							         
							        </form>
							        <form name="submit_review_form" action="writereviews_save.php" method="post">
							          
									  <input type="hidden" name="how_to_have_you_used" value="<?=$how_to_have_you_used;?>">
							        <input type="hidden" name="similar_product" value="<?=$similar_product;?>">
							        <input type="hidden" name="functionality" value="<?=$functionality;?>">
							        <input type="hidden" name="quality" value="<?=$quality;?>">
							        <input type="hidden" name="value_for_money" value="<?=$value_for_money;?>">
							        <input type="hidden" name="strength" value="<?=$strength;?>">
							        <input type="hidden" name="weakness" value="<?=$weakness;?>">
									  <input type="hidden" name="review_title" value="<?=$review_title;?>" />
							             
							              <input type="hidden" name="easeofuse" value="<?=$easeofuse;?>" />
							              <input type="hidden" name="summary" value="<?=$summary;?>" />
							             
							              <input type="hidden" name="productid" value="<?=$productid;?>" />
							              <input type="hidden" name="product_rating_score" value="<?=$product_rating_score;?>" />
							              <input type="hidden" name="product_recommend" value="<?=$product_recommend;?>" />
							             <input type="submit"  class="btn-default-1" value="Submit review" />
							        </form></article></div>
                                        </div></article><?php $_SESSION['saverecord']="saverecord";?>         
        All submissions are subject to the <a href="termsofuse.php">User Agreement</a> and hi5brands.com is granted all rights therein.
        <?php }?>
</div>
</div>

                            
                            

                        </div>
                        

                    </div>
                </div>  
            </div>

        </section>
 <!-- start footer--->
   <?php include("footer.php");?>    