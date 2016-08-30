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

                        <?php 

						$query=mysql_query("Select * from  members_profile where email='".$_SESSION['CI_valid_user']."' ");

						if(mysql_num_rows($query)>0)

						{

						$firstname1=mysql_result($query,0,firstname);

						$lastname1=mysql_result($query,0,lastname);

						$emaile1=mysql_result($query,0,email);

						$user1=mysql_result($query,0,email);

						$birthday1=mysql_result($query,0,birthday);

						$profession1=mysql_result($query,0,profession);

						$address1=mysql_result($query,0,address);

						$city=mysql_result($query,0,city);

					    $state=mysql_result($query,0,state);

					    $country=mysql_result($query,0,country);

						$password1=mysql_result($query,0,password);

						$mobile_num=mysql_result($query,0,mobile_num);

						$profilephoto=mysql_result($query,0,profilephoto);

						$name=$firstname1." ".$lastname1;

						}

						?>



                        <div class="row">

                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                <div class="header-for-light"><br /><br />

                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Account  <span>Information</span></h1>

                        </div><div class="block-product-detail">

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                                        <div class="product-image">

                                            <img id="product-zoom"  src='./memberphoto/<?php echo $profilephoto;?>' data-zoom-image="./memberphoto/<?php echo $profilephoto;?>" alt="">

                                            <div id="gal1">



                                                <a href="javascript:;" data-image="./memberphoto/<?php echo $profilephoto;?>" data-zoom-image="./memberphoto/<?php echo $profilephoto;?>">

                                                    <img id="img_01" src="./memberphoto/<?php echo $profilephoto;?>" alt="">

                                                </a>



                                                

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">





                                        <div class="product-detail-section">

                                            

                                           



                                            <div class="product-information">

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['FName']?></label> <?php echo $firstname1;?><br>

                                                </div>

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['LName']?></label> <?php echo $lastname1;?>

                                                </div>

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['Email']?></label> <?php echo $emaile1;?>

                                                </div>

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['Phone']?></label> <?php echo $mobile_num;?><br>

                                                </div>

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['days']?></label> <?php echo $birthday1;?>

                                                </div>

                                                

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['Profession']?></label> <?php echo $profession1;?><br>

                                                </div>

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['LName']?></label> <?php echo $lastname1;?>

                                                </div>

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['Address']?></label> <?=$address1;?>

                                                </div>

                                               <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['City']?></label> <?=$city;?>

                                                </div>

                                                <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['State']?></label> <?=$state;?>

                                                </div>

                                                 <div class="clearfix"> 

                                                    <label class="pull-left"><?=$lang['Country']?></label> <?=$country;?>

                                                </div>

                                                







                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            </article>

                            

                        </div>

                        <script>

                        function checkform(){

						if(document.test.new_pass.value=="")

						{

						alert("Please Enter Your New Password!");

						document.test.new_pass.focus();

						return false;

						}

						if(document.test.c_pass.value=="")

						{

						alert("Please enter your Confirm Password!")

						document.test.c_pass.focus();

						return false;

						}

						else

						{

						if(document.test.new_pass.value!=document.test.c_pass.value)

						{

						alert("Sorry Confirm password does not match!");

						window.document.test.c_pass.focus();

						return false;

						}

						}

						if(document.test.pass.value=="")

						{

						alert("Please Enter Your Old Password!");

						document.test.pass.focus();

						return false;

						}

						}

                        

                        </script>

                        <div class="row">

                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s"><?php echo $msg;?>

                                    <h3> <i class="fa fa-unlock-alt"></i>Need to change your password?</h3>

                                    <form  method="post"  id="test" action="paas_edit.php" name="test" onsubmit="return checkform();">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <input name="new_pass" type="password" id="new_pass" class="form-control" placeholder="New password">

                                            </div>

                                            <div class="col-md-6">

                                                <input name="c_pass" type="password" id="c_pass" class="form-control" placeholder="New password /again">

                                            </div>

                                            <div class="col-md-12">

                                                <input name="pass" type="password" id="pass" class="form-control" placeholder="Old password">

                                            </div>

                                            <div class="col-md-12">

                                                <hr>

                                                <input name="Save" type="submit" id="Save" value="Save"  class="btn-default-1">

                                                <input type="reset" value="Reset password" class="btn-default-1">

                                            </div>

                                        </div>                                    

                                    </form>

                                </div>

                            </article>

                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">

                                    <h3> <i class="fa fa-info"></i>Information</h3>

                                    <hr>

                                    <p>

                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                    </p>

                                    

                                </div>

                            </article>

                        </div>

                    </div>

                </div>

            </div> 

        </section>





 <!-- start footer--->

   

   <?php include("footer.php");?>  