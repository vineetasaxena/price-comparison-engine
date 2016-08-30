<?php  ob_start();

   include("config.php");

   include("connection.php");

   include("functions.php");
   $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";

   include("header.php"); 

?>
        <!-- End header -->

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
        <section>
            <div class="second-page-container">
                <div class="container">
                    <div class="row"><?php if(isset($_REQUEST['login']))
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
						 <?php include("left_link.php");?>
                        <div class="col-md-9">
                            

                            <div class="header-for-light">
                          
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">My <span>WishList</span> </h1>

                            </div>
                                    <?php echo $msg;?>
                             <?php if(!isset($_SESSION['CI_valid_user'])){?> 
                           <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-unlock"></i>Login</h3>
                                    <p>Please login using your existing account</p>
                                    <form name="test" action="save_list.php" method="post" onsubmit="return checklogin();">
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
                                                <input type="hidden" name="pro_id1" value="<?php echo $_REQUEST['pro_id1'];?>" />
                                            </div>
                                        </div>                                    
                                    </form>
                                </div>
                            </article>
                            
                        </div><?php } else {?>
                       <?php if($_REQUEST['delete']=="Delete")

							{
							
								while (list($key, $val) = each ($_REQUEST['chk']))
							
								{
							
									$delid = $val; 
							
									$delres=mysql_query("delete from saved_list where product_id='$delid'");
							
									
							
								}
								header("location:save_list.php");
							
							}
							
							if($_REQUEST['pro_id1'])
							
							{
							
							$product_id=$_REQUEST['pro_id1'];
							
							$resultl=mysql_query("select * from saved_list where  product_id='".$product_id."' and username='".$_SESSION['CI_valid_user']."'") or print("Sorry".mysql_error());
							
							if(mysql_num_rows($resultl)>0)
							
							{
							
							//print "sorry sorry sorry sorry";
							
							}
							
							else
							
							{
							
							
							
							$sqlin="insert into saved_list(product_id,username,notes,s_date)values('$product_id','".$_SESSION['CI_valid_user']."','',now())";
							
							$resu=mysql_query($sqlin) or print("Sorry".mysql_error());
							header("location:save_list.php");
							
							}
							
							}
							
							?>
                            <?



$q1="select product_id from saved_list where username='".$_SESSION['CI_valid_user']."'";				

$query=mysql_query($q1);

$path="uploadimages/";

$chk;

$rec=mysql_num_rows($query);



if($rec>0)

{   
//print_r($res);
?><form method="post" action="<?php	 	 print $PHP_SELF;?>">
                            <div class="block-products-modes color-scheme-2">
                                <div class="row">
                                  
                                     <input type="submit" name="delete" value="Delete"  class="btn-default-1">
                                     
                                    
                                </div>
                            </div>
                            <?php 

 for($i=0;$i<$rec;$i++)

{

    $chk=mysql_result($query,$i,product_id);

    $qu=("select * from products where product_id='$chk' ");

	$query_pr=mysql_query($qu);

    if(mysql_num_rows($query_pr)>0)

     {

       //print 

	    $chk=mysql_result($query_pr,0,"product_id");

		$productcategory=mysql_result($query_pr,0,"categories");

		

		$name=mysql_result($query_pr,0,"name");

	   

       $img1=$chk.".jpg";

          if($img1==null)

          {

            $imgname=$path."icon_image_not_available_b[1].gif";

          }

          else

          {

           $imgname=$path.$img1;

          }

 		$description=mysql_result($query_pr,0, "description");

		$description=ucwords(getPartialString($description,30));

		$totnumberofratings=GetProductNumberOfRatingById($chk);

		$totalrating=GetProductTotalOfRatingById($chk);

		

		if($totalrating!=0 && $totnumberofratings!=0){
											$avgrating=GetProductAverageRatingById ($totalrating, $totnumberofratings);
		 }
		 else
		 {
			$avgrating="<img src=\"images/rating_0.png\" border=0>";
			$totalrating=0;
		 }

      

	}  

 

 

		$sqlmin="select min(prices) as minprice from products_pz where product_id='$chk'";

		   

		   $resmin=mysql_query($sqlmin);

		   if(mysql_num_rows($resmin)>0)

			{

			 	$min=mysql_result($resmin,$m,"minprice");

			 }

		 $sqlmax="select max(prices) as maxprice from products_pz where product_id='$chk'";

		 $resmax=mysql_query($sqlmax);

		 if(mysql_num_rows($resmax)>0)

		 {

			$max=mysql_result($resmax,0,"maxprice");

		 }



?>
                            <article class="product list">
                                <div class="row"> 
                                    <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                                        <figure class="figure-hover-overlay text-center">
                                                                                                               
                                            <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$chk;?>"  class="figure-href"></a>
                                           
                                            <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$chk;?>" class="product-compare"><i class="fa fa-random"></i></a>
                                            <a href="save_list.php?pro_id1=<?=$chk;?>" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$chk;?>"><?php if(file_exists($imgname))
											{?>
										
                                            <img src="<?=$imgname;?>" class="img-overlay img-responsive" alt="<?=$name;?>">
                                            <img src="<?=$imgname;?>" class="img-responsive" alt="<?=$name;?>">
											<?php } else {?>
											<img src="uploadimages/1007.jpg" class="img-overlay img-responsive" alt="<?=$name;?>">
                                            <img src="uploadimages/1007.jpg" class="img-responsive" alt="<?=$name;?>">
											<?php }?>
                                           </a>
                                        </figure>
                                    </div>
                                    <? $sqlmax="select max(prices) as maxprice from products_pz where product_id='$chk'";

												 $resmax=mysql_query($sqlmax);

												 if(mysql_num_rows($resmax)>0)

												 {

													$max=mysql_result($resmax,0,"maxprice");

												 }

												 

												 $sqlmin="select min(prices) as minprice from products_pz where product_id='$chk'";

												 $resmin=mysql_query($sqlmin);

												 if(mysql_num_rows($resmin)>0)

												 {

													$min=mysql_result($resmin,0,"minprice");

												 }?>
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <div class="product-caption">
                                            <div class="block-name">
                                            <input type="checkbox" name="chk[]" id="chk[]" value="<?=$chk?>" />Delete from WishList<a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$chk;?>" class="product-name"> <?=$name;?></a>
                                                <p class="product-cart">

												  <a href="price_alert.php?producidtalert=<?php echo $chk;?>&price=<?php	 	 echo $min;?>" class="shoping"><i class="fa fa-shopping-cart"></i>  Add Alert</a></p>

                                            </div>
                                            <div class="clearfix">
                                                    <label class="pull-left">Price Range:</label>
                                                    <?  #######find in how many stores

												$sqlprod="select distinct shops from products_pz where  product_id='$chk'";

												$resprod=mysql_query($sqlprod);

												$countshops=mysql_num_rows($resprod);

												?>
                                                    <p class="product-price">$	<?=$min;?>  to $ <?=$max;?> stores(<?=$countshops;?>)</p>
                                                </div>

                                            <div class="product-rating">
                                                <div class="stars">
                                                     <?=$avgrating;?> 
                                                </div>
                                                <a href="" class="review"><?php echo $totnumberofratings;?> Reviews</a>
                                            </div>
                                            <p class="description">

                                                 <?php	 	 echo ucwords(getPartialDesc($description,600, $link="more_detail_product.php?catiid=".$catiid."&productid=".$productid."")); ?>

                                            </p>
                                            <div class="product-cart">
                                                <a href="products.php?catiid=<?=$productcategory;?>&amp;productid=<?=$chk;?>"><i class="fa fa-shopping-cart"></i>Compare Price</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            
                            
                            
<? 





}
}
else
{
echo "No products in WishList";
}

}


 

 ?>

                        </div>
                       

                    </div>
                </div>  
            </div>

        </section>

<!-- start footer--->
   
   <?php include("footer.php");?>  