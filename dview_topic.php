<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage

$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";

$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";

include("config.php");



include("connection.php");



include("functions.php");

include("header.php");?>

<?php	 	 ob_start();

session_start();

// get value of id that sent from address bar 

$discid=$_REQUEST['discid'];

$productid=$_REQUEST['productid'];

$sql="SELECT * FROM discussions_question WHERE disc_id='$discid'";

$result=mysql_query($sql);



$rows=mysql_fetch_array($result);

?>     

        <!-- End header -->

       

        <section>

            <div class="second-page-container">

                <div class="container">

                    <div class="row">



                        <div class="col-md-9">

                            

                            <div class="block">

                            <?php include("include_product.php");?>

                                <div class="header-for-light">

                                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">View <span>Topic</span></h1>



                                </div>

                               

                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">



                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">

                                  

                                    

                                        <p>

                                            <strong>Topic:</strong></p>

                                          <p>

                                               <? echo $rows['disc_topic']; ?>

                                            </p>

                                        

                                        <p>

                                            <strong>Details:</strong></p>

                                            <p>

                                                <? echo $rows['disc_detail']; ?>

                                            </p>

                                        <p><strong>By:</strong></p>

                                            <p>

                                                <? echo $rows['name1']; ?>

                                            </p>

                                       <p><strong>Email:</strong></p>

                                            <p>

                                                <? echo $rows['email'];?>

                                            </p>

                                        <p>

                                            <strong>Date/time:</strong></p>

                                            <p>

                                                <? echo $rows['d_datetime'];?>

                                            </p>

                                       

                                        

                                        

                                       

                                    



                                </div>

                            </article>

                            

                       

                            </div>

                            <!--end question-->

                            <!--start answer view-->

                            <div class="block">

                                <div class="header-for-light">

                                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">View <span>Answer</span></h1>



                                </div>

                                <div class="row">

                                <?php	 	



								$sql2="SELECT * FROM discussions_answer WHERE disc_qid='$discid'";

								$result2=mysql_query($sql2);

								

								while($rows=mysql_fetch_array($result2))

								{

								?>

                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">

                                 

                                    

                                       <p>

                                            <strong>ID:</strong></p>

                                          <p>

                                               <? echo  $rows['a_id']; ?>

                                            </p>

                                        

                                        <p>

                                            <strong>Name:</strong></p>

                                            <p>

                                                <? echo $rows['a_name']; ?>

                                            </p>

                                        <p><strong>Email:</strong></p>

                                            <p>

                                                <? echo $rows['a_email']; ?>

                                            </p>

                                       <p><strong>Answer:</strong></p>

                                            <p>

                                                <? echo $rows['a_answer'];?>

                                            </p>

                                        <p>

                                            <strong>Date/time:</strong></p>

                                            <p>

                                                <? echo $rows['a_datetime'];?>

                                            </p>

                                        

                                        

                                       

                                    



                                </div>

                            </article>

                            <?

}?>





                        </div>

                            </div>

                            <!--end answer view-->

                            <!--start new answer-->

                            <div class="block">

                                <div class="header-for-light">

                                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">Give <span>Answer</span></h1>



                                </div>

                                <div class="row">

                             <?php   $sql3="SELECT disc_view FROM discussions_question WHERE disc_id='$discid'";

						$result3=mysql_query($sql3);

						

						$rows=mysql_fetch_array($result3);

						$view=$rows['disc_view'];

						

						// if have no counter value set counter = 1

						if(empty($view))

						{

						$view=1;

						$sql4="update discussions_question set disc_view='$view' WHERE disc_id='$discid'";

						$result4=mysql_query($sql4) or print("Sorry".mysql_error());

						}

						

						// count more value

						$addview=$view+1;

						$sql5="update discussions_question set disc_view='$addview' WHERE disc_id='$discid'";

						$result5=mysql_query($sql5);

						

						?>

                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">

                                 <script>

								 function checkfields(){

									 if(document.frm.a_name.value=="")

									 {

									 		alert("Name cannot be left blank");

											document.frm.a_name.focus();

											return false;

										

									 }

									 else if(document.frm.a_email.value=="")

									{

										alert("Email cannot be left blank");

											document.frm.a_email.focus();

											return false;

									}

									else if(!IsEmail (document.frm.a_email))

										{

											return false;

										}

									else if(document.frm.a_answer.value=="")

									{

									alert("Answer cannot be left blank");

											document.frm.a_answer.focus();

											return false;

									}

										

								 }

								 function IsEmail(oObject) {

							var emailStr=oObject.value;

							var emailPat=/^(.+)@(.+)$/;

							var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]";

							var validChars="\[^\\s" + specialChars + "\]";

							var quotedUser="(\"[^\"]*\")";

							var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;

							var atom=validChars + '+';

							var word="(" + atom + "|" + quotedUser + ")";

							var userPat=new RegExp("^" + word + "(\\." + word + ")*$");

							var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");

							

							var matchArray=emailStr.match(emailPat)

							if (matchArray==null) {

								alert("Email address seems incorrect (check @ and .'s)");

								oObject.focus();

								oObject.select();

								return false;

							}

							var user=matchArray[1];

							var domain=matchArray[2];

							

							if (user.match(userPat)==null) {

								alert("The username doesn't seem to be valid. Please check or register fresh");

								oObject.focus();

								oObject.select();

								return false;

							}

							var IPArray=domain.match(ipDomainPat);

							if (IPArray!=null) {

								  for (var i=1;i<=4;i++) {

									if (IPArray[i]>255) {

										alert("Destination IP address is invalid!");

										oObject.focus();

										oObject.select();

									return false;

									}

								}

								return true;

							}

							

							var domainArray=domain.match(domainPat);

							if (domainArray==null) {

								alert("The domain name doesn't seem to be valid.");

								oObject.focus();

								oObject.select();

								return false;

							}

							var atomPat=new RegExp(atom,"g");

							var domArr=domain.match(atomPat);

							var len=domArr.length;

							if (domArr[domArr.length-1].length<2 || 

								domArr[domArr.length-1].length>3) {

							   alert("The address must end in a three-letter domain, or two letter country.");

								oObject.focus();

								oObject.select();

							   return false;

							}

							

							if (len<2) {

							   var errStr="This address is missing a hostname!";

							   alert(errStr);

							   oObject.focus();

								oObject.select();

							   return false;

							}

							return true;

							}

								 </script>   

                                    <form  name="frm" class="form-horizontal" method="post" action="add_answer.php" onSubmit="return checkfields();">

                                        <div class="form-group">

                                            <label for="inputEMail" class="col-sm-3 control-label">Name:<span class="text-error">*</span></label>

                                            <div class="col-sm-9">

                                                <input type="text" class="form-control" id="a_name" name="a_name">

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label for="inputPhone" class="col-sm-3 control-label">Email:</label>

                                            <div class="col-sm-9">

                                                <input type="email" class="form-control" id="a_email" name="a_email">

                                            </div>

                                        </div>

                                         <div class="form-group">

                                            <label for="inputPhone" class="col-sm-3 control-label">Answer:</label>

                                            <div class="col-sm-9">

                                               <textarea name="a_answer" cols="35" rows="3" id="a_answer" class="text5"></textarea>

                                            </div>

                                        </div>

                                      		 <input name="productid" type="hidden" value="<? echo $productid;?>">

											<input name="discid" type="hidden" value="<? echo $discid; ?>">

                                       

                                        

                                        

                                        <div class="form-group">

                                            <div class="col-sm-offset-3 col-sm-9">

                                                <input type="submit"  value="Submit" name="Submit"  class="btn-default-1">

                                                <button type="reset" class="btn-default-1">Reset</button>

                                            </div>

                                        </div>

                                    </form>



                                </div>

                            </article>

                            

                        </div>

                            </div>

                            

                        </div>

                        

                        <?php include("left_link.php");?>



                    </div>

                </div>  

            </div> 

        </section>













      









 <!-- start footer--->

   

   <?php include("footer.php");?>  

