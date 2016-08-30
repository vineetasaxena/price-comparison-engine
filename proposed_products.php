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
                                    
                                    <a href="propose_products.php" class="btn-default-1">Propose Product</a>
                                
                                    
                                    <hr>
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Proposed <span> Products</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                    <thead>
                                        <tr>
                                            <th class="card_product_image">Product Name</th>
                                            <th class="card_product_name">Product Category</th>
                                            <th class="card_product_model">Product Details</th>
                                            <th class="card_product_quantity">Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <? $sql="select * from propose_products where merchant_id='".$_SESSION['CI_valid_merchant_id']."'";
									   $res=mysql_query($sql);
									   if(mysql_num_rows($res)>0)
									   {
										   while($row=mysql_fetch_array($res))
										   {
												$propose_id=$row['propose_id'];
												$product_cat=$row['product_cat'];
									?><tr>
                                            <td class="card_product_image" data-th="Product Name"><?=$row['product_name'];?></td>
                                            <td class="card_product_name" data-th="Product Category"><?=GetProductCatName($product_cat);?></td>
                                            <td class="card_product_model" data-th="Product Details"> <?php	 	 echo ucwords(getPartialDesc($row['detail'],50,"")); ?></td>
                                            <td class="card_product_quantity" data-th="Actions"><a href="edit_propose_products.php?id=<?=$propose_id;?>">Edit</a> | <a href="delete_propose_product.php?id=<?=$propose_id;?>">Delete</a></td>
                                            
                                        </tr>
										 <? }
                                       }?>
                                        
                                      
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