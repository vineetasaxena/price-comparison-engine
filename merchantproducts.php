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
<?php	 	
if(isset($_POST['send']))
{
 $sql="insert into propose_products(product_cat,product_name,detail, merchant_id,status,sdate)values('$product_cat','$pro_name','$detail','".$_SESSION['CI_valid_merchant_id']."','N',now())";
$ress=mysql_query($sql) or print("Sorry".mysql_error());

header("location:proposed_products.php");
die;
}
?>

<script language="JavaScript">
function checkifvalid(){


if (window.document.myfrm.product_cat.value=="")
{
alert("please select product category!");
window.document.myfrm.product_cat.focus();
return false;
}
if(window.document.myfrm.pro_name.value=="")
{
alert("Please enter product name!")
window.document.myfrm.pro_name.focus();
return false;
}


}

</script>
        <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                    
            <?php include("merchant_left_link.php"); ?>
                            <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                <div class="header-for-light">
                                    
                                    <a href="addproducts.php" class="btn-default-1">Add Product</a>
                                
                                    
                                    <hr>
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">My <span> Products</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                    <thead>
                                        <tr>
                                            <th class="card_product_image">Image</th>
                                            <th class="card_product_name">Product</th>
                                            <th class="card_product_name">Description</th>
                                            <th class="card_product_name">Detail</th>
                                            <th class="card_product_name">Price</th>
                                            <th class="card_product_quantity">Actions</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php	 
                                      $shopid=$_SESSION['CI_valid_merchant_id'];	
	      $sql="select * from products_pz where shops='".$_SESSION['CI_valid_merchant_id']."'";
		   
			$res=mysql_query($sql);
			 $rows = mysql_num_rows($res);
		  //This is the number of results displayed per page 
		 $page_rows = 10; 
		 
		 //This tells us the page number of our last page 
		 $last = ceil($rows/$page_rows); 
		 
		 //this makes sure the page number isn't below one, or more than our maximum pages 
		 if ($pagenum < 1) 
		 { 
		 $pagenum = 1; 
		 } 
		 elseif ($pagenum > $last) 
		 { 
		 $pagenum = $last; 
		 } 
		 
		 //This sets the range to display in our query 
		 $max = 'limit ' .($pagenum - 1) * $page_rows .',' .$page_rows; 
		 $sqldd1="select * from products_pz where shops='".$_SESSION['CI_valid_merchant_id']."' $max";
		   
			$resdd=mysql_query($sqldd1);
			//echo mysql_num_rows($resdd);
			for($i=0;$i<mysql_num_rows($resdd);$i++)
			{
			//print_r($resdd);
			$product_id=mysql_result($resdd,$i,"product_id");
			$shops=mysql_result($resdd,$i,"shops");
			 $detail_url=mysql_result($resdd,$i,"detail_url");
			$buy_url=mysql_result($resdd,$i,"buy_url");
				$pics=$product_id.".jpg"; 
				$catid=GetProdCatid($product_id);
				
	   ?>
                                 <tr>
                                            <td class="card_product_image" data-th="Image" ><?php	 	 echo GetShopName($shops);?><br /><?php 
											if(file_exists("uploadimages/$pics"))
											{
										?> <a href="uploadimages/<?php echo $pics;?>" data-lightbox="product" data-title="<?php	 	 echo GetProduct_Name($product_id);?>" data-image="uploadimages/<?php echo $pics;?>" data-zoom-image="uploadimages/<?php echo $pics;?>" >
                                                    <img id="img_01" src="uploadimages/<?php echo $pics;?>" alt="" width="400">
                                                </a>
                                            
                                                <?php } 
                                                
                                                    else
                                                
                                                    {
                                                
                                                    ?>

	&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/icon_image_not_available_b.gif"><? }?></td>
                                            <td class="card_product_name" data-th="Product"><?php	 	 echo GetProduct_Name($product_id);?></td>
                                            <td class="card_product_model" data-th="Desc."><?php	 	 echo ucwords(getPartialDesc( GetProductdescription($product_id),200, "")); ?></td>
                                            <td class="card_product_quantity" data-th="Detail"><a href="products.php?catiid=<?=$catid;?>&amp;productid=<?=$product_id;?>" class="mid_cata">Details</a></td>
                                            <td class="card_product_quantity" data-th="Price"><?php	 	 echo GetProductPrice($product_id);?></td>
                   <td class="card_product_quantity" data-th="Actions"><a href="edit_propose_products.php?id=<?=$propose_id;?>">Edit</a> | <a href="delete_propose_product.php?id=<?=$propose_id;?>">Delete</a></td>                         
                                            
                                            
                                        </tr>
                                        
										 <? }
                                       ?>
                                        
                                      <tr><td class="mid_cata" colspan="5">
<?php	 	 // This shows the user what page they are on, and the total number of pages
 echo " --Page $pagenum of $last-- <p>";
 // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.
 if ($pagenum == 1) 
 {
 } 
 else 
 {
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1&shopid=$shopid'> <<-First</a> ";
 echo " ";
 $previous = $pagenum-1;
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous&shopid=$shopid'> <-Previous</a> ";
 } 
 //just a spacer
 echo " ---- ";
 //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
 if ($pagenum == $last) 
 {
 } 
 else {
 $next = $pagenum+1;
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next&shopid=$shopid'>Next -></a> ";
 echo " ";
 echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last&shopid=$shopid'>Last ->></a> ";
 } ?>
</td></tr>
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