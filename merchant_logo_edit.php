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
if(isset($logoedit))
{
$sqls="select * from shops where email='".$_SESSION['CI_valid_merchant']."'";
$ress=mysql_query($sqls);
while($rs=mysql_fetch_array($ress))
{
print $picture=$rs['logo'];
}
unlink("logo/$picture");

$filename=basename($_FILES['image']['name']);
 
                $pos=strrpos($filename,".");
                $ph=strtolower(substr($filename,$pos+1,strlen($filename)-$pos));
               	if(($ph!="gif" && $ph!="jpeg" && $ph!="jpg" && $ph!="png" && $ph!="bmp"))
				{
                print "Invalid Image Format";
				}
				else
				{
					$ext=strchr($filename,".");
					$fileid=generateShortCode();
					$filename=$_SESSION['CI_valid_merchant'].$fileid.$ext;
					$copytofile="logo/$filename";
 $mainpath=$copytofile;
if(move_uploaded_file($_FILES['image']['tmp_name'],$mainpath))
{
$var="update shops set logo='$filename' where email='".$_SESSION['CI_valid_merchant']."'";
$rev=mysql_query($var);
header("location:merchant_info.php");
}
}
}
?>
<?
$sql="select * from shops where email='".$_SESSION['CI_valid_merchant']."'";
$res=mysql_query($sql);
while($rs=mysql_fetch_array($res))
{
$logo=$rs['logo'];
}
 ?>

<script language="JavaScript">
function checkifvalid(){
if (window.document.myform.logo.value=="")
{
alert("please enter your Store Logo!");
window.document.myform.logo.focus();
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
                                    <h3> <i class="fa fa-unlock-alt"></i>Need to change your logo?</h3>
                                    <form name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="javascript: return checkifvalid();">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?
												if(file_exists("logo/$logo"))
												{
												?>		
												<div align="center"><img src="logo/<?=$logo;?>" width="150" height="90"></div>
												<?
												}
												else
												{
												?>
												<div align="center"><img src="images/icon_image_not_available_b.gif" width="150" height="90"></div>
												<?
												}
												?>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <input name="image" type="file" id="image">
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <input type="submit" name="logoedit" value="<?=$lang['me_ELogos']?>" class="btn-default-1">
                                            </div>
                                        </div>                                    
                                    </form>
                                </div>
                            </article>
                            
                            
                        </div>
                            </article>
                            
                            
                        </div>
                       
                        
                    </div>
                </div>
            </div> 
        </section>


 <!-- start footer--->
   
   <?php include("footer.php");?>  