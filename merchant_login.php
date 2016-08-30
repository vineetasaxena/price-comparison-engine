<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");
include"./lang/merchant_lang.php";?>
        <!-- End header -->
        
        
        
				<?php
                if(isset($_POST['login']))
                {
                 $sqlfind="select email,password,shops_id from shops where email='$m_email' and password='$m_pass'";
                    $resfind=mysql_query($sqlfind) or print("Sorry".mysql_error());
                    
                    if(mysql_num_rows($resfind)>0)
                    { 
                        $email=mysql_result($resfind,0,"email");
                        $member_id=mysql_result($resfind,0,"shops_id");
                        $CI_valid_merchant=$email;
                        $CI_valid_merchant_id=$member_id;
                        
                            $_SESSION['CI_valid_merchant']=$CI_valid_merchant;
                            
                            $_SESSION['CI_valid_merchant_id']=$CI_valid_merchant_id;
                            //header("location:alerts.php");
                        
                    //	$msg="<center><h4 style=\"margin-bottom: 0px; margin-top: 10px;\">You are successfully logged in. Click on close to start accessing member area</h1><br></center>
                //		<A HREF='javascript:#.go(0)'>Click to close and refresh</A>
                //
                //		";
                        header("location:merchant_info.php");
                    }
                    else
                    {
                        $msg= "<center><h4 style=\"margin-bottom: 0px; margin-top: 10px;\">This email address and password combination does not exist or the account has been deleted.</h1><br></center>";
                        
                    }
                    }
                    ?>
                
                <script>
                function checklogin()
                {
                    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.test.m_email.value))
                    {
                        alert("User email cannot be left blank plz Enter Valid Email");
                        document.test.m_email.focus();
                        return false;
                    }
                    else if(document.test.m_pass.value=="")
                    {
                        alert("User password cannot be left blank");
                        document.test.m_pass.focus();
                        return false;
                    }
                }
                </script>
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Merchant Login </span> or <span>Register</span><?php echo "<div style=\"color:#ff0000\">$msg</div>";?></h1>
                        </div>
                        <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-unlock"></i>Login</h3>
                                    <p>Please login using your existing account</p>
                                    <form name="test" id="test" method="post" action="" enctype="multipart/form-data" onSubmit="return checklogin();">
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <input type="text" name="m_email" class="form-control" placeholder="<?=$lang['ml_Merchants_Email']?>">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" name="m_pass" class="form-control" placeholder="<?=$lang['ml_Merchant_Password']?>">
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                 <input type="submit" name="login" value="<?=$lang['ml_Login']?>"  class="btn-default-1">
                                                <input type="reset" value="Reset password" class="btn-default-1">
                                            </div>
                                        </div>                                    
                                    </form>
                                </div>
                            </article>
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-pencil"></i>Create new account</h3>
                                    <p>Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website.</p>
                                    <hr>
                                    <a href="step1.php" class="btn-default-1">Register</a>
                                </div>
                               

                            </article>
                        </div>
                    </div>
                </div>
            </div> 
        </section>






 <!-- start footer--->
   
   <?php include("footer.php");?> 