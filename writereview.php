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
											 //$name=mysql_result($resfeatured,$f,"name");
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
											if(file_exists("uploadimages/$picture"))//if there is a picture
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
                                                //if picture for this product not available
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
                                
                                
                                
                               
                               
                            
                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                             <script>
							function checkform()
							{
								var flag=0;
									for(i=0;i<document.frm.elements.length;i++)
									{
											if(document.frm.elements[i].name.indexOf("functionality")!=-1)
											{
													var chk=document.frm.elements[i].checked;
													if(chk==false)
													   continue;
													if(chk==true)
													   flag=1;
											}
									}
									if(flag==0)
									{
											alert("Please, select atleast one functionality rating.");
											return false;
									}
									
									var flag=0;
									for(i=0;i<document.frm.elements.length;i++)
									{
											if(document.frm.elements[i].name.indexOf("quality")!=-1)
											{
													var chk=document.frm.elements[i].checked;
													if(chk==false)
													   continue;
													if(chk==true)
													   flag=1;
											}
									}
									if(flag==0)
									{
											alert("Please, select atleast one quality rating.");
											return false;
									}
									
									var flag=0;
									for(i=0;i<document.frm.elements.length;i++)
									{
									if(document.frm.elements[i].name.indexOf("product_rating_score")!=-1)
											{
													var chk=document.frm.elements[i].checked;
													if(chk==false)
													   continue;
													if(chk==true)
													   flag=1;
											}
									}
									if(flag==0)
									{
											alert("Please, select atleast one product rating score");
											return false;
									}
									
									var flag=0;
									for(i=0;i<document.frm.elements.length;i++)
									{
									if(document.frm.elements[i].name.indexOf("value_for_money")!=-1)
											{
													var chk=document.frm.elements[i].checked;
													if(chk==false)
													   continue;
													if(chk==true)
													   flag=1;
											}
									}
									if(flag==0)
									{
											alert("Please, select atleast one value for money score");
											return false;
									}
									
									var flag=0;
									for(i=0;i<document.frm.elements.length;i++)
									{
									if(document.frm.elements[i].name.indexOf("product_recommend")!=-1)
											{
													var chk=document.frm.elements[i].checked;
													if(chk==false)
													   continue;
													if(chk==true)
													   flag=1;
											}
									}
									if(flag==0)
									{
											alert("Please, select atleast one product_recommend score");
											return false;
									}
									
									if(document.frm.how_to_have_you_used.value=="")
									{
										alert("Fill How Long Have you Used the product");
										return false;
									}
									if(document.frm.similar_product.value=="")
									{
										alert("Give atleast one similar product you have used or write not used");
										return false;
									}
									if(document.frm.review_title.value=="")
									{
										alert("Give  review title");
										return false;
									}
									if(document.frm.strength.value=="")
									{
										alert("Give strength or pros of the product");
										return false;
									}
									if(document.frm.weakness.value=="")
									{
										alert("Give weakness or cons of the product");
										return false;
									}
									if(document.frm.summary.value=="")
									{
										alert("Give summary of the product");
										return false;
									}
									if(document.frm.summary.value.length<50)
									{
										alert("Give summary of the product of atleast 50 chars");
										return false;
									}
									var flag=0;
									for(i=0;i<document.frm.elements.length;i++)
									{
											if(document.frm.elements[i].name.indexOf("easeofuse")!=-1)
											{
													var chk=document.frm.elements[i].checked;
													if(chk==false)
													   continue;
													if(chk==true)
													   flag=1;
											}
									}
									if(flag==0)
									{
											alert("Please, select atleast one ease of use record.");
											return false;
									}
									 <?
										 if(!isset($_SESSION['CI_valid_user']))
										{
										?>
									
									if(document.frm.email.value=="")
									{
										alert("Email cannot be left blank");
											document.frm.email.focus();
											return false;
										}
										
									
										if(!IsEmail (document.frm.email))
										{
											return false;
										}
										if(document.frm.password.value=="")
										{
											alert("Password cannot be left blank");
											document.frm.password.focus();
											return false;
										}
										
										
									
									
									<?php }?>
									
							}
							
							function IsEmail(oObject) {
							var emailStr=oObject.value;
							var emailPat=/^(.+)@(.+)$/;
							var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]";
							var validChars="\[^\\s" + specialChars + "\]";
							var quotedUser="(\"[^\"]*\")";
							var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
							var atom=validChars + '+';
							var word="(" + atom + "|" + quotedUser + ")";
							var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
							var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
							
							var matchArray=emailStr.match(emailPat)
							if (matchArray==null) {
								alert("Email address seems incorrect (check @ and .'s)");
								oObject.focus();
								oObject.select();
								return false;
							}
							var user=matchArray[1];
							var domain=matchArray[2];
							
							if (user.match(userPat)==null) {
								alert("The username doesn't seem to be valid. Please check or register fresh");
								oObject.focus();
								oObject.select();
								return false;
							}
							var IPArray=domain.match(ipDomainPat);
							if (IPArray!=null) {
								  for (var i=1;i<=4;i++) {
									if (IPArray[i]>255) {
										alert("Destination IP address is invalid!");
										oObject.focus();
										oObject.select();
									return false;
									}
								}
								return true;
							}
							
							var domainArray=domain.match(domainPat);
							if (domainArray==null) {
								alert("The domain name doesn't seem to be valid.");
								oObject.focus();
								oObject.select();
								return false;
							}
							var atomPat=new RegExp(atom,"g");
							var domArr=domain.match(atomPat);
							var len=domArr.length;
							if (domArr[domArr.length-1].length<2 || 
								domArr[domArr.length-1].length>3) {
							   alert("The address must end in a three-letter domain, or two letter country.");
								oObject.focus();
								oObject.select();
							   return false;
							}
							
							if (len<2) {
							   var errStr="This address is missing a hostname!";
							   alert(errStr);
							   oObject.focus();
								oObject.select();
							   return false;
							}
							return true;
							}
							</script>
							 <form name="frm" method="post" action="writereviews_action_main.php" method="post" onSubmit="return checkform();">
                             
                                <input type="Hidden" name="review_id" value="0">
                                <input type="Hidden" name="member_id" value="<?=$member_id;?>">
                                <input type="Hidden" name="productid" value="<?=$productid;?>">
                                <input type="Hidden" name="oid" value="">
                                <input type="Hidden" name="mid" value="">
                                <input type="Hidden" name="prod_id_next" value="">
                                <input type="Hidden" name="catiid" value="<?=$catiid;?>">
                                <input type="Hidden" name="format" value="">
                                <input type="Hidden" name="cs_id" value="">
                                <input type="Hidden" name="edit" value="">
                                <input type="Hidden" name="src" value="">
                                <input type="Hidden" name="rate_num" value="1">
                                <input type="Hidden" name="inc" value="">
                                <input type="Hidden" name="aud" value="">
                                <input type="Hidden" name="login_review" value="1">
                                            <div class="row">
                                            <!--functionality start-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Functionality :<span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left; width:33%;">
                                                   
                                                   
                                                        <input type="Radio" name="functionality" value="5" <? if ($functionality=="5") echo "checked";?>> 
                                                   
                    
                                                </div>
                                               <div style="float:left; width:33%;">
                                                   
                                                        <img src="images/rating_5.png" width="73" height="11" />
                                                   
                                                </div>
                                                <div style="float:left; width:33%;">
                                                    
                                                        Excellent
                                                   
                                                </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left; width:33%;">
                                                        <input type="Radio" name="functionality" value="4" <? if ($functionality=="4") echo "checked";?>> 
                                                    </div>
                                                    <div style="float:left; width:33%;">
                                                        <img src="images/rating_4.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Very Good
                                                    </div></p>
                                                </article>
                                               
                            					
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="functionality" value="3" <? if ($functionality=="3") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                    
                                                        <img src="images/rating_3.png" width="73" height="11" />
                                                   </div>
                                                <div style="float:left;width:33%;">
                                                        Average
                                                   </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="functionality" value="2" <? if ($functionality=="2") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_2.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Poor
                                                    </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="functionality" value="1" <? if ($functionality=="1") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_1.png" width="73" height="11" />
                                                   </div>
                                                <div style="float:left;width:33%;">
                                                        Awful
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
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="quality" value="5" <? if ($quality=="5") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_5.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Excellent
                                                    </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="quality" value="4" <? if ($quality=="4") echo "checked";?>> 
                                                    </div>
                                               <div style="float:left;width:33%;">
                                                        <img src="images/rating_4.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Very Good
                                                   </div> </p>
                                                </article>
                                               
                            					
                                                 
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="quality" value="3" <? if ($quality=="3") echo "checked";?>> 
                                                   </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_3.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Average
                                                    </div></p>
                                               
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							
                                                   
                                                    <p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="quality" value="2" <? if ($quality=="2") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_2.png" width="73" height="11" />
                                                   </div>
                                                   <div style="float:left;width:33%;">
                                                        Poor
                                                   </div> </p>
                                                </article>
                                               
                            					
                                                
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							
                                                   
                                                    <p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="quality" value="1" <? if ($quality=="1") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_1.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Awful
                                                   </div> </p>
                                                
                                               
                            					
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
                           							<p><div style="float:left; width:33%;">
                                                   
                                                   
                                                        <input type="Radio" name="product_rating_score" value="5" <? if ($product_rating_score=="5") echo "checked";?>> 
                                                   
                    
                                                </div>
                                               <div style="float:left; width:33%;">
                                                   
                                                        <img src="images/rating_5.png" width="73" height="11" />
                                                   
                                                </div>
                                                <div style="float:left; width:33%;">
                                                    
                                                        Excellent
                                                   
                                                </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left; width:33%;">
                                                        <input type="Radio" name="product_rating_score" value="4" <? if ($product_rating_score=="4") echo "checked";?>> 
                                                    </div>
                                                    <div style="float:left; width:33%;">
                                                        <img src="images/rating_4.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Very Good
                                                    </div></p>
                                                </article>
                                               
                            					
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="product_rating_score" value="3" <? if ($product_rating_score=="3") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                    
                                                        <img src="images/rating_3.png" width="73" height="11" />
                                                   </div>
                                                <div style="float:left;width:33%;">
                                                        Average
                                                   </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="product_rating_score" value="2" <? if ($product_rating_score=="2") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_2.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Poor
                                                    </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="product_rating_score" value="1" <? if ($product_rating_score=="1") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_1.png" width="73" height="11" />
                                                   </div>
                                                <div style="float:left;width:33%;">
                                                        Awful
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
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="value_for_money" value="5" <? if ($value_for_money=="5") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_5.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Excellent
                                                    </div></p>
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="value_for_money" value="4" <? if ($value_for_money=="4") echo "checked";?>> 
                                                    </div>
                                               <div style="float:left;width:33%;">
                                                        <img src="images/rating_4.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Very Good
                                                   </div> </p>
                                                </article>
                                               
                            					
                                                 
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							<p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="value_for_money" value="3" <? if ($value_for_money=="3") echo "checked";?>> 
                                                   </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_3.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Average
                                                    </div></p>
                                               
                                               
                            					
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							
                                                   
                                                    <p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="value_for_money" value="2" <? if ($value_for_money=="2") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_2.png" width="73" height="11" />
                                                   </div>
                                                   <div style="float:left;width:33%;">
                                                        Poor
                                                   </div> </p>
                                                </article>
                                               
                            					
                                                
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           							
                                                   
                                                    <p><div style="float:left;width:33%;">
                                                        <input type="Radio" name="value_for_money" value="1" <? if ($value_for_money=="1") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        <img src="images/rating_1.png" width="73" height="11" />
                                                    </div>
                                                <div style="float:left;width:33%;">
                                                        Awful
                                                   </div> </p>
                                                
                                               
                            					
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
                                                        <input type="Radio" name="product_recommend" value="Yes" <? if ($product_recommend=="Yes") echo "checked";?>> Yes
                                                        </article>
                                                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="Radio" name="product_recommend" value="No"  <? if ($product_recommend=="No") echo "checked";?> > No
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">How Long have you used the product? (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="text" size="50" name="how_to_have_you_used" value="<?=$how_to_have_you_used;?>"class="form-control" />
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Which similar products have you used ?(60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="text" size="50" name="similar_product" value="<?=$similar_product;?>" class="form-control"/>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Title of review: (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="text" size="50" name="review_title" value="<?=$review_title;?>" class="form-control"/>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">What are the strengths? (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="text" size="50" name="strength" value="<?=$strength;?>" class="form-control"/>
                                                     </article>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">What are the weakness? (60 characters or less) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="text" size="50" name="weakness" value="<?=$weakness;?>" class="form-control" />
                                                     </article>
                                                    </div>
                                                </div>
                                                
													 <div class="col-md-12">
                                                    <div class="form-group">
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <label for="inputFirstName" class="control-label">Summary: (Minimum 50 words) <span class="text-error">*</span></label>
                                                    </article>
                                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                     <textarea class="form-control" name="summary" cols="40" rows="10" wrap="on"><?=$summary;?></textarea>
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
                                          
                           							<p><div style="float:left;width:10%;">
                                                        <input type="Radio" name="easeofuse" value="1" <? if ($easeofuse=="1") echo "checked";?>> 
                                                    </div>
                                                <div style="float:left;width:30%;">
                                                        Excellent -
                                                    </div>
                                                <div style="float:left;width:60%;">
                                                        It is easy to use right out of the box
                                                    </div></p>
                                               
                            					</article>
                                                 </article>
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                  <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           							<p><div style="float:left;width:10%;">
                                                        <input type="Radio" name="easeofuse" value="2" <? if ($easeofuse=="2") echo "checked";?>> 
                                                    </div>
                                               <div style="float:left;width:30%;">
                                                        Very Good -
                                                    </div>
                                                <div style="float:left;width:60%;">
                                                        Fairly easy to learn and use
                                                   </div> </p>
                                                </article></article>
                                               
                            					
                                                 
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                  <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           							<p><div style="float:left;width:10%;">
                                                        <input type="Radio" name="easeofuse" value="3" <? if ($easeofuse=="3") echo "checked";?>> 
                                                    </div>
                                               <div style="float:left;width:30%;">
                                                        Average -
                                                    </div>
                                                <div style="float:left;width:60%;">
                                                        Steep learning curve, but manageable
                                                   </div> </p>
                                                   </article>
                                                </article>
                                               
                                                 <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                  <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           							<p><div style="float:left;width:10%;">
                                                        <input type="Radio" name="easeofuse" value="4" <? if ($easeofuse=="4") echo "checked";?>> 
                                                    </div>
                                               <div style="float:left;width:30%;">
                                                        Poor -
                                                    </div>
                                                <div style="float:left;width:60%;">
                                                        Hard to use even after learning
                                                   </div> </p>
                                                </article>
                                               </article>
                            					
                                                
                                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           							<p><div style="float:left;width:10%;">
                                                        <input type="Radio" name="easeofuse" value="3" <? if ($easeofuse=="5") echo "checked";?>> 
                                                    </div>
                                               <div style="float:left;width:30%;">
                                                        Awful -
                                                    </div>
                                                <div style="float:left;width:60%;">
                                                        Virtually impossible to use
                                                   </div> </p>
                                                </article></article>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label  class="control-label">Submit Your Review</label>
                                                        <div class="product-rating">
                                                            <div class="stars">
                                                                <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?
										 if(!isset($_SESSION['CI_valid_user']))
										{
										?>
                                        <div class="header-for-light">
                                            <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Members, please sign in</span> </h1>
                                        </div>
                                        <div class="row">
                                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                                <h3><i class="fa fa-unlock"></i>Login</h3>
                                                <p>Please login using your existing account</p>
                                                
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email;?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                            <input type="submit"  value="Login"  class="btn-default-1">
                                                           <a href="memberforgotpassword.php"> <input type="button" value="Reset password" class="btn-default-1"></a>
                                                        </div>
                                                    </div>                                    
                                                
                                            </div>
                                        </article>
                                       
                                    </div>
                                        <?
										}
										else
										{
										
										?>
                                           <div class="row">
                                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                             <input type="submit"  class="btn-default-1" value="Add Review">
                                             </div>
                                        </article>
                                       
                                    </div>
                                            <?php }?>
                                        </form>
                            </article>
                            
                            

                        </div>
                        

                    </div>
                </div>  
            </div>

        </section>
 <!-- start footer--->
   <?php include("footer.php");?>    