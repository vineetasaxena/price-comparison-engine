<?php  ob_start();

   include("config.php");

   include("connection.php");

   include("functions.php");
   $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";

   include("header.php"); 

?>
<script>
function checklogin()
{
	if(document.test.email.value=="")
	{
		alert("User email cannot be left blank");
		document.test.email.focus();
		return false;
	}
	else if(!IsEmail (document.test.email))
			{
				return false;
			}
	else if(document.test.pass.value=="")
	{
		alert("User password cannot be left blank");
		document.test.pass.focus();
		return false;
	}
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
        <!-- End header -->
        <section>
            <div class="second-page-container">
            <?php ; if(isset($_REQUEST['login']))
								{
								$email=$_REQUEST['email'];
								$pass=$_REQUEST['pass'];
								$sqlfind="select email,password,member_id from members_profile where email='$email' and password='$pass'";
									$resfind=mysql_query($sqlfind);
									
									if(mysql_num_rows($resfind)>0)
									{ 
										$email=mysql_result($resfind,0,"email");
										$member_id=mysql_result($resfind,0,"member_id");
										$CI_valid_user=$email;
										$CI_valid_id=$member_id;
										if(!$_SESSION['CI_valid_user'])
										{
											$_SESSION['CI_valid_user']=$CI_valid_user=$email;
											$_SESSION['CI_valid_id']=$CI_valid_id;
											
										}
									
									}
									else
									{
										$msg= "<div style=\"color:red\">This email and password combination does not exist</div>";
										
									}
									}
									?>
           
                <div class="block">
                    <div class="container">
                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Price  <span>ALert</span></h1>
                        </div>
                        <?php if($_REQUEST['producidtalert']!="")
						$product_id=$_REQUEST['producidtalert'];
						if($_REQUEST['price']!="")
							$c_price=$_REQUEST['price'];
							
							if($_REQUEST['submit']=="Submit")
							{
							$store=mysql_query("insert into product_alert(product_id,visiter_email,price_drops,price_drops_below,price_reduces,new_stores,new_reviews,current_price )values('$product_id','$_SESSION[CI_valid_user]','$price_drops','$price_drops_below','$price_reduces','$new_stores','$new_reviews','$c_price')") or print mysql_error();
							header("location:products.php?productid=$product_id");
							die;
							}
						?>
                       <?php if(!isset($_SESSION['CI_valid_user'])){?> 
                           <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-unlock"></i>Login</h3>
                                    <p>Please login using your existing account</p>
                                    <form name="test" action="price_alert.php" method="post" onsubmit="return checklogin();">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="pass" placeholder="Password">
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <input type="submit" name="login" value="Login"  class="btn-default-1">
                                                <input type="reset" value="Reset password" class="btn-default-1">
                                                <input type="hidden" name="producidtalert" value="<?php echo $_REQUEST['producidtalert'];?>" />
                                                <input type="hidden" name="price" value="<?php echo $_REQUEST['price'];?>" />
                                            </div>
                                        </div>                                    
                                    </form>
                                </div>
                            </article>
                            
                        </div><?php } else {?> <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <script>
									function checkprice()
									{
										if(document.prc.the_price.checked == true)
										{
											if(document.prc.price_drops.value=="")
											{
											alert("please enter drop price");
											document.prc.price_drops.focus();
											return false;
											}
										}
										else if(document.prc.prices.checked == true)
										{
											if(document.prc.price_drops_below.value=="")
											{
											alert("please enter price drops below");
											document.prc.price_drops_below.focus();
											return false;
											}
										}
										else if(document.prc.the_price.checked == false && document.prc.prices.checked == false && document.prc.price_reduces.checked == false && document.prc.new_stores.checked == false && document.prc.new_reviews.checked == false){
										alert ('You didn\'t choose any of the checkboxes!');
											return false;
										} 
										
									}
                                    </script>
                                    <form name="prc"  method="post" action="price_alert.php"  onsubmit="return checkprice();">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div style="float:left; width:10%;"><input type="checkbox" name="the_price" value="Yes" <? if($the_price=="Yes") echo "checked";?>></div> <div style="float:left; width:40%;">Tell me when the price "drops by" $</div>
                                                 <div style="float:left; width:40%;"><input type="text" class="form-control" placeholder="Price Drop" name="price_drops"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div style="float:left; width:10%;"><input type="checkbox" name="prices" value="Yes" <? if($prices=="Yes") echo "checked";?>></div> <div style="float:left; width:40%;">Tell me when price drops below</div>
                                                 <div style="float:left; width:40%;"><input type="text" class="form-control" placeholder="Price Drops Below" name="price_drops_below"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div style="float:left; width:10%;"><input type="checkbox" name="price_reduces" value="Yes" <? if($price_reduces=="Yes") echo "checked";?>></div> <div style="float:left; width:40%;">Tell me when price reduce</div>
                                                 <div style="float:left; width:40%;"></div>
                                            </div>
                                             <div class="col-md-12">
                                                <div style="float:left; width:10%;"><input type="checkbox" name="new_stores" value="Yes" <? if($new_stores=="Yes") echo "checked";?>></div> <div style="float:left; width:40%;">Tell me know when new stores appear that sell the same product</div>
                                                 <div style="float:left; width:40%;"></div>
                                            </div>
                                             <div class="col-md-12">
                                                <div style="float:left; width:10%;"><input type="checkbox" name="new_reviews" value="Yes" <? if($new_reviews=="Yes") echo "checked";?>></div> <div style="float:left; width:40%;">Let me know when new reviews appear for this product</div>
                                                 <div style="float:left; width:40%;"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <input type="submit"  value="Submit" name="submit"  class="btn-default-1">
                                                
                                            </div>
                                        </div>                                    
                                    <input type="hidden" name="producidtalert" value="<?=$producidtalert;?>">
                                  <input type="hidden" name="price" value="<?=$price;?>"></table>
                                
                                </form>

                                </div>
                            </article><?php }?>
                            <? if(isset($_REQUEST['producidtalert'])){
								$producidtalert=$_REQUEST['producidtalert'];
								$productid=$_REQUEST['producidtalert'];
								
								
								
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
                            <article class="product list">
                                <div class="row"> 
                                    <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                                        <figure class="figure-hover-overlay text-center">
                                                                                                               
                                            <a href="products.php?catiid=<?=$catiid;?>&amp;productid=<?=$productid;?>"  class="figure-href"></a>
                                           
                                            <a href="products.php?catiid=<?=$catiid;?>&amp;productid=<?=$productid;?>" class="product-compare"><i class="fa fa-random"></i></a>
                                            <a href="save_list.php?pro_id1=<?=$productid;?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="products.php?catiid=<?=$catiid;?>&amp;productid=<?=$productid;?>" ><?php if(file_exists("uploadimages/".$productid.".jpg"))
											{?><img src="uploadimages/<?=$productid;?>.jpg" class="img-overlay img-responsive" alt="<?=$name;?>">
                                            <img src="uploadimages/<?=$productid;?>.jpg" class="img-responsive" alt="<?=$name;?>">
                                             <?php } else {?>
                                            <img src="uploadimages/1007.jpg" class="img-overlay img-responsive" alt="<?=$name;?>">
                                            <img src="uploadimages/1007.jpg" class="img-responsive" alt="<?=$name;?>">
                                            <?php }?>
                                           </a>
                                        </figure>
                                    </div>
                                    <? $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";

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

												 }?>
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <div class="product-caption">
                                             <div class="block-name">
                                             <a href="products.php?catiid=<?=$catiid;?>&amp;productid=<?=$productid;?>" class="product-name"> <?=$name;?></a>
                                            </div>
                                            <div class="clearfix">
                                                    <label class="pull-left">Price Range:</label>
                                                    <?  #######find in how many stores

												$sqlprod="select distinct shops from products_pz where  product_id='$productid'";

												$resprod=mysql_query($sqlprod);

												$countshops=mysql_num_rows($resprod);

												?>
                                                    <p class="product-price">$	<?=$min;?>  to $ <?=$max;?> stores(<?=$countshops;?>)</p>
                                                </div>

                                            <div class="product-rating">
                                                <div class="stars">
                                                     <?=$avgrating;?> 
                                                </div>
                                               <?php echo $totnumberofratings;?> Reviews
                                            </div>
                                            <p class="description">

                                                 <?php	 	 echo ucwords(getPartialDesc($description,600, $link="more_detail_product.php?catiid=".$catiid."&productid=".$productid."")); ?>

                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </article><?php }?>
                        </div>
                    </div>
                </div>
            </div> 
        </section>






        

<!-- start footer--->
   
   <?php include("footer.php");?>  