<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");
if(empty($_SESSION['CI_valid_user']))
 {
 header("location:login.php");
 die;
 }
 include"lang/resistration.php";
?>
        <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                    <? include("left_link.php"); ?>
                       
						<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="header-for-light"><br /><br />
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Edit  <span>Profile</span></h1>
                        </div><div class="block-product-detail">
                                
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s"><?php echo $msg;?>
                                    <h3> <i class="fa fa-unlock-alt"></i>Need to Edit Profile?</h3>
                                   <a href="user_edit_profile1.php" class="btn-default-1">Edit Profile</a><a href="Account_info.php" class="btn-default-1">View Profile</a>
                                </div>
                            </div>
                            </article>
                        <div class="row">
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="header-for-light"><br /><br />
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Change  <span>Photo</span></h1>
                        </div><div class="block-product-detail">
                                
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s"><?php echo $msg;?>
                                    <h3> <i class="fa fa-unlock-alt"></i>Need to change photo and interests?</h3>
                                    <form method="post" enctype="multipart/form-data" action="imageSave.php" name="test" onsubmit="return checkform();">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <?
												$path="./memberphoto/";
												$imageq=mysql_query("select profilephoto,interests from members_profile where email='".$_SESSION['CI_valid_user']."'");
												$rec=mysql_num_rows($imageq);
												if(mysql_num_rows($imageq)>0)
												{
												for($i=0;$i<$rec;$i++)
												{
												$inters1=mysql_result($imageq,$i,interests);
												$imgname=mysql_result($imageq,$i,profilephoto);
												?>
												
												<div class="product-image">
																					<img id="product-zoom"  src='./memberphoto/<?php echo $imgname;?>' data-zoom-image="./memberphoto/<?php echo $imgname;?>" alt="">
																					<div id="gal1">
										
																						<a href="javascript:;" data-image="./memberphoto/<?php echo $imgname;?>" data-zoom-image="./memberphoto/<?php echo $imgname;?>">
																							<img id="img_01" src="./memberphoto/<?php echo $imgname;?>" alt="">
																						</a>
										
																						
																					</div>
																				</div>
												<?php
												
												
												}
												
												}
												?>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="image">
                                                <input type="hidden" name="imageold" value="<?php echo $imgname;?>" />
                                            </div>
                                            <div class="col-md-12">
                                               Interests
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="interest" cols="" rows="" id="interest" style="width:420px; height:60px;"><?=$inters1?></textarea>
                                            </div>
                                           
                                            <div class="col-md-12">
                                                <hr>
                                                <input name="Save" type="submit" id="Save" value="Save"  class="btn-default-1">
                                                <input type="reset" value="Reset password" class="btn-default-1">
                                            </div>
                                            
                                        </div>                                    
                                    </form>
                                </div>
                            </div>
                            </article>
                            
                        </div>
                        <script>
                        function checkform(){
						
						if(document.test.image.value=="" && document.test.imageold.value=="")
						{
						alert("Please upload a photo");
						document.test.image.focus();
						return false;
						}
						if(document.test.interest.value=="")
						{
						alert("Please enter your interests!")
						document.test.interest.focus();
						return false;
						}
						
						}
                        
                        </script>
                        
                    </div>
                </div>
            </div> 
        </section>


 <!-- start footer--->
   
   <?php include("footer.php");?>  