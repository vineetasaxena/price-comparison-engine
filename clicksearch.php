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





        <!-- End header -->

        <section>

            <div class="second-page-container">

                <div class="block">

                    <div class="container">

                    <?php include("merchant_left_link.php"); ?>

                     





                        <div class="row">

                        

                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                            <div class="header-for-light"><br /><br />

                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Click <span>Search</span></h1>

                        </div>

                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s"><?php echo $msg;?>

                                   <h3><i class="fa fa-unlock"></i><?php	 	 echo $_SESSION['CI_valid_merchant'];?></h3>

                                    <p>Search Customer Clickthroughs</p>

                                    <form name="searchfrm" action="merchant_clickpayments.php" method="post" >

                                        <div class="row">

                                            <div class="form-group">

                                            <label for="inputFirstName" class="col-sm-3 control-label">Payment</label>

                                            <div class="col-sm-9">

                                                <select name="payment"  class="form-control">

													  <option value="">Both</option>

                                                      <option value="Y">Paid</option>

                                                      <option value="N">Unpaid</option>

                                                </select>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label for="inputPostCode" class="col-sm-3 control-label">Month/Year</label>

                                            <div class="col-sm-9">

                                                <select name="Month" class="form-control">

                                                  <option value="">Select Month</option>

                                                  <option value="1">January</option>

                                                  <option value="2">February</option>

                                                  <option value="3">March</option>

                                                  <option value="4">April</option>

                                                  <option value="5">May</option>

                                                  <option value="6">June</option>

                                                  <option value="7">July</option>

                                                  <option value="8">August</option>

                                                  <option value="9">September</option>

                                                  <option value="10">October</option>

                                                  <option value="11">November</option>

                                                  <option value="12">December</option>

                                                </select>

                                                <select name="Year" class="form-control">

                                                  <option value="">Select Year</option>

                                                  <? $year=date("Y");

                                                $from=$year-10;

                                                for($i=$from;$i<=$year;$i++)

                                                {

                                                ?>

                                                  <option value="<? echo $i;?>"><? echo $i;?></option>

                                             <? }?>

                                                </select>

                                            </div>

                                        </div>

                                        

                                        <div class="form-group">

                                            <div class="col-sm-offset-3 col-sm-9">

                                            

                                               <input type="submit" name="search" value="Search" class="btn-default-1">

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