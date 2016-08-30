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
$sql="insert into propose_products(product_cat,product_name,merchant_id,status,sdate)values('$product_cat','$pro_name','".$_SESSION['CI_valid_merchant_id']."','N',now())";
$ress=mysql_query($sql) or print("Soory".mysql_error());
header("location:merchant_info.php");
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
                     


                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                <div class="header-for-light">
                                    
                                   <?php	 	 echo $_SESSION['CI_valid_merchant'];?>&nbsp;|&nbsp;Total Clicks[<?php	 	 echo TotalClick($_SESSION['CI_valid_merchant_id']);?>]<a href="clicksearch.php" class="btn-default-1">Search and Pay for clicks</a>
                               
                                    
                                    <hr>
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Product  <span> Clicks</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                    <thead>
                                        <tr>
                                            <th class="card_product_image">Product Name</th>
                                            <th class="card_product_name">Click</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                   <?php	 	
									  $sql="select distinct(USER_PRODUCT_ID) from pc_clickthroughs where ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'";
									  $res=mysql_query($sql);
									  for($i=0;$i<mysql_num_rows($res);$i++)
									  {
									  
									  $product_id=mysql_result($res,$i,"USER_PRODUCT_ID");
									  
									 ?>
                                    <tbody>
                                        <tr>
                                            <td class="card_product_image" data-th="Product Name"><a href="clicks.php?product_id=<?=$product_id;?>"><?php	 	 echo GetProdName($product_id);?></a></td>
                                            <td class="card_product_name" data-th="Click">[<?php	 	 echo VisitorTotalClick($product_id,$_SESSION['CI_valid_merchant_id']);?>]</td>
                                            
                                            
                                        </tr>

                                        
                                      
                                    </tbody>
                                    <?php }
										?>
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