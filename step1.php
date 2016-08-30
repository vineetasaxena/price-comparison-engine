<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage

$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";

$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";

include("config.php");



include("connection.php");



include("functions.php");

include("header.php");

include"lang/steping.php";

if(isset($_POST['Submit']))



{



if($accept=='1')



{



$user['termcondition']="terms";



$_SESSION['user1']['termcondition']=$user['termcondition'];



header("location:step2.php");



}



else



{



header("location:failled.php");



}



}

?>

<script language="javascript" type="text/javascript">

function stepValidation()

{

if(!document.myform.accept.checked)

{

alert("Please Enter Term Condition!");

document.myform.accept.focus();

return false;

}

}

</script>

        <!-- End header -->

        <section>

            <div class="second-page-container">

                <div class="block">

                    <div class="container">

                        <div class="header-for-light">

                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Create new Merchant <span>Account</span></h1>

                        </div>

                        <div class="row">

                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">

                                    <h3><i class="fa fa-user"></i>Step1</h3>

                                    <hr>

                                    <form method="post" name="myform" id="myform" class="form-horizontal" action=""  onsubmit="javascript: return stepValidation();">

                                    <? 



								  //-------------------------Value of term and conditions-----------

					

								  $sqlarray="select * from term_cond";

					

								   $resarray=mysql_query($sqlarray);

					

								   for($s=0;$s<mysql_num_rows($resarray); $s++)

					

								   {

					

										$id=mysql_result($resarray,$s,"id");

					

										$termname=mysql_result($resarray,$s,"termname");

					

										

					

								   }



	?>

                                        <div class="form-group">

                                            <label for="inputFirstName" class="col-sm-3 control-label">Terms and Conditions:<span class="text-error">*</span></label>

                                            <div class="col-sm-9">

                                                 <textarea  name="termcondition" id="termcondition" cols="45" class="form-control" readonly rows="200" style="height:420px;" ><? print strip_tags($termname);?></textarea>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label for="inputLastName" class="col-sm-10 control-label"><?=$lang['membership']?><span class="text-error">*</span></label>

                                            <div class="col-sm-2">

                                                <input name="accept" type="checkbox" id="accept" value="1" required />

                                            </div>

                                        </div>

                                        

                                        <div class="form-group">

                                            <div class="col-sm-offset-3 col-sm-9">

                                                <input type="submit" name="Submit" value="<?=$lang['Steping']?>" class="btn-default-1">

                                            </div>

                                        </div>

                                    </form>



                                </div>

                            </article>

                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">



                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">

                                    <h3><i class="fa fa-check"></i>Conditions</h3>

                                    <hr>

                                    <p>

                                       <? print substr($termname, 0, 2000);?>

                                    </p>

                                   

                                    





                                    <a href="termsofuse.php" class="btn-default-1" target="_blank">Read more</a>

                                </div>

                               

                            </article>

                        </div>

                    </div>

                </div>

            </div> 

        </section>













        <!-- start footer--->

   

   <?php include("footer.php");?>  