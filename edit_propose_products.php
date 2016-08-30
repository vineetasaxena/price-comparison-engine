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

$sql="update propose_products set product_cat='$product_cat',product_name='$pro_name',detail='$detail' where merchant_id='".$_SESSION['CI_valid_merchant_id']."' and propose_id='$id'";

$ress=mysql_query($sql) or print("Sorry".mysql_error());

header("location:proposed_products.php");

die;

}

$sql="select * from propose_products where propose_id='$id'";

$ressql=mysql_query($sql);

if(mysql_num_rows($ressql)>0)

{

	while($row=mysql_fetch_array($ressql))

	{

		$product_cat=$row['product_cat'];

		$pro_name=$row['product_name'];

		$detail=$row['detail'];

	}



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

                    

                     





                        <div class="row">

                        <?php include("merchant_left_link.php"); ?>

                            <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

                            <div class="header-for-light"><br /><br />

                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Edit Proposed  <span>Product</span></h1>

                        </div>

                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s"><?php echo $msg;?>

                                   

                                    <form name="myfrm" id="myfrm" action="" method="post" enctype="multipart/form-data" onsubmit="javascript: return checkifvalid();">

                                        <div class="row">

                                            <div class="form-group">

                                            <label for="inputFirstName" class="col-sm-3 control-label">Product Category <span class="text-error">*</span></label>

                                            <div class="col-sm-9">

                                                <select name="product_cat"  class="form-control">

				

													<? $sqlcatmain="select * from product_categories where parent='0'";

		

										

												   $rescatmain=mysql_query($sqlcatmain);

												   if(mysql_num_rows($rescatmain)>0)

												   { 

												   while($rowcat=mysql_fetch_array($rescatmain))

												   {

													$catiiid=$rowcat['id'];

													$catname=$rowcat['name'];

													?>				

															<option value="<?=$catiiid;?>" style="color: rgb(20, 96, 240);" <? if($catiiid==$product_cat) { echo "selected"; }?>>-<?=$catname;?></option>

															<? $sqlcatsub="select * from product_categories where parent='$catiiid'";

															   $rescatsub=mysql_query($sqlcatsub);

															   if(mysql_num_rows($rescatsub)>0)

															   { 

															   while($rowcatsub=mysql_fetch_array($rescatsub))

															   {

																$catiidsub=$rowcatsub['id'];

																$catnamesub=$rowcatsub['name'];

																?>

																	<option value="<?=$catiidsub;?>" style="color: rgb(249, 170, 0);" <? if($catiidsub==$product_cat) { echo "selected"; }?>>--<?=$catnamesub;?></option>

																

																	<? $sqlcatmicro="select * from product_categories where parent='$catiidsub'";

																	   $rescatmicro=mysql_query($sqlcatmicro);

																	   if(mysql_num_rows($rescatmicro)>0)

																	   { 

																	   while($rowcatmicro=mysql_fetch_array($rescatmicro))

																	   {

																		$catiidmicro=$rowcatmicro['id'];

																		$catnamemicro=$rowcatmicro['name'];

																		?>

																				<option value="<?=$catiidmicro;?>" style="color: rgb(102, 51, 0);" <? if($catiidmicro==$product_cat) { echo "selected"; }?>>---<?=$catnamemicro;?></option>

																	<?  }

																	   }?>

														

																<? }

																}?>

												<? }

												}?></select>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label for="inputPostCode" class="col-sm-3 control-label">Product Name<span class="text-error">*</span></label>

                                            <div class="col-sm-9">

                                                <input name="pro_name" type="text" id="pro_name" value="<?=$pro_name;?>" class="form-control">

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label for="inputPostCode" class="col-sm-3 control-label">Product Details <span class="text-error">*</span></label>

                                            <div class="col-sm-9">

                                                <textarea name="detail" id="detail" rows="10" cols="40" class="form-control"><?=$detail;?></textarea>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <div class="col-sm-offset-3 col-sm-9">

                                            

                                                <input name="send" type="submit" id="send" value="Submit" class="btn-default-1">

                                            </div>

                                        </div>

                                        </div>                                    

                                    </form>

                                </div>

                            </article>

                            

                            

                        </div>

                       

                        

                    </div>

                </div>

            </div> 

        </section>





 <!-- start footer--->

   

   <?php include("footer.php");?>  