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
 <?
if(isset($change))
{
$sql="select * from shops where email='".$_SESSION['CI_valid_merchant']."'";
$res=mysql_query($sql);
while($rs=mysql_fetch_array($res))
{
$passwo=$rs['password'];
if($passwo==$pass_match)
{
$var="update shops set password='$pass' where email='".$_SESSION['CI_valid_merchant']."'";
$rev=mysql_query($var);
header("location:merchant_info.php");
}
else
{
$msg="<font color=#FF0000 size=2>Wrong Old Password!</font>";
}
}
}




?>
<?
$sql="select * from shops where email='".$_SESSION['CI_valid_merchant']."'";
$res=mysql_query($sql);
while($rs=mysql_fetch_array($res))
{
$passw=$rs['password'];
}
 ?>

<script language="JavaScript">
function checkifvalid(){

var pass;
pass=window.document.myform.pass.value;
if (window.document.myform.pass.value=="")
{
alert("please enter your New Password!");
window.document.myform.pass.focus();
return false;
}
if(window.document.myform.confirm_pass.value=="")
{
alert("Please enter yuor Confirm Password!")
window.document.myform.confirm_pass.focus();
return false;
}
else
{
if(pass!=window.document.myform.confirm_pass.value)
{
alert("Sorry Confirm password not match!");
window.document.myform.confirm_pass.focus();
return false;
}
}
if (window.document.myform.pass_match.value=="")
{
alert("please enter your Old Password!");
window.document.myform.pass_match.focus();
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
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s"><?php echo $msg;?>
                                    <h3> <i class="fa fa-unlock-alt"></i>Need to change your password?</h3>
                                    <form name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="javascript: return checkifvalid();">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="pass" type="password" id="pass" class="form-control" placeholder="<?=$lang['me_pNewPassword']?>">
                                            </div>
                                            <div class="col-md-6">
                                                <input name="confirm_pass" type="password" id="confirm_pass" class="form-control" placeholder="<?=$lang['me_pCPassword']?>">
                                            </div>
                                            <div class="col-md-12">
                                                <input name="pass_match" type="password" id="pass_match" class="form-control" placeholder="<?=$lang['me_pOPassword']?>">
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <input name="change" type="submit" id="change" value="<?=$lang['me_pChangePassword']?>"  class="btn-default-1">
                                                <input type="reset" value="Reset password" class="btn-default-1">
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