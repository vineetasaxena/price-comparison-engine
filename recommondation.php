<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");?>
       
 <?php	 	
	if(isset($_POST['recommondation']))
	{
	$sqlin="insert into recommondation(site_sugg,product_sugg,d_date,ipaddress,username)values('$site_sugg','$product_sugg',now(),'".$_SERVER['REMOTE_ADDR']."','".$_SESSION['CI_valid_id']."')";
	$resin=mysql_query($sqlin);
	header("location:recommondation.php");
	}
	?>     
    <script>
	function checkfrm(){
		if(document.frm.site_sugg.value==""){
			alert("Suggestion box cannot be left blank");
			document.frm.site_sugg.focus();
			return false;
		}
	}
	</script> 
        <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                    <? include("left_link.php"); ?>
                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Recommendations 
                    &amp;  <span>Suggestions</span></h1>
                        </div>
                        <div class="row">
                            <article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="box-border wow fadeInLeft" data-wow-duration="1s">
                                    <h3><i class="fa fa-tasks"></i> Suggestions</h3>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Recommendation no.</th>

                                                    <th>Recommendation</th>
                                                </tr>
                                            </thead>
									
                                            <tbody>
                                                <?php $sqlrecommend="select * from recommondation";
								   $resrecommend=mysql_query($sqlrecommend) or die(mysql_error());
								   if(mysql_num_rows($resrecommend)>0)
								   {
								   $i=0;
										while($rowrecommend=mysql_fetch_array($resrecommend))
										{
										$i++;
										?>
                                        		<tr>
                                                    <td>(<?=$i;?>)</td>

                                                    <td>
                                                        <?=$rowrecommend['site_sugg'];?>
                                                    </td>
                                                </tr>
                                                <?
										}
									}
									?>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </article>
                            <article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-user"></i>Add Recommendation or Suggestions</h3>
                                    <hr>
                                    <form name="frm" action="" method="post" class="form-horizontal" onSubmit="return checkfrm();">
                                        <div class="form-group">
                                            <label for="inputFirstName" class="col-sm-3 control-label">Suggestions and Recommendations:<span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea name="site_sugg" cols="40" rows="7" id="site_sugg" class="form-control"></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <input name="recommondation" type="submit" id="recommondation" value="Recommendation" class="btn-default-1">
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