<?php ob_start();
	session_start();
	$title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");?>
<?php include("random_number.php");
   include"lang/steping.php";
	$obj=new rand();

	$termcondition=$_SESSION['user1']['termcondition'];
	$email=$_SESSION['user']['email'];
	$remail=$_SESSION['user']['remail'];
 	$pass=$_SESSION['user']['pass'];
 	$repass=$_SESSION['user']['repass'];
 	$company=$_SESSION['user']['company'];
	$overviews=$_SESSION['user']['overviews'];
 	$country=$_SESSION['user']['country'];
	$state=$_SESSION['user']['state'];
 	$region=$_SESSION['user']['region'];
 	$city=$_SESSION['user']['city'];
 	$add=$_SESSION['user']['add'];
 	$tip=$_SESSION['user']['tip'];
 	$cod=$_SESSION['user']['cod'];
 	$bankacc=$_SESSION['user']['bankacc'];
 	$bankname=$_SESSION['user']['bankname'];
 	$fname=$_SESSION['user']['fname'];
 	$lname=$_SESSION['user']['lname'];
 	$phone=$_SESSION['user']['phone'];
 	$mobile=$_SESSION['user']['mobile'];
 	$fax=$_SESSION['user']['fax'];
 	$webpage=$_SESSION['user']['webpage'];
 	$contact=$_SESSION['user']['contact'];
	$siteurl=$_SESSION['user']['url'];
	if(isset($_REQUEST['ok']))
	{	
	
	//---------------------------------Values of Step3---------------------------------
	if(sizeof($payment_name))
      {
		$pay=implode(",",$payment_name);
	  }
	  
	 
	$payment_name=$_REQUEST['payment_name'];
	
	//-------------------------------------------------------
		if(sizeof($del))
      {
	  $del1=array();
	   for($se=1;$se<=sizeof($del);$se++)
	   {
	   if($del[$se]!="")
		$dell[]=$del[$se];
		}
		$delivery=implode(",",$dell);
		
	  }
	  //-------------------------------------------
	  
	  if(sizeof($s))
      {
	  $ser=array();
	   for($tt=1;$tt<=sizeof($s);$tt++)
	   {
	   if($s[$tt]!="")
		$ser[]=$s[$tt];
		}
		$services=implode(",",$ser);
		
	  }
	 
	$dat=date('y-m-d');
	$description=$_REQUEST['description'];
		
	//------------------------------------Image loading--------------------------------------
	//---------------------------E-mail exist or not---------------------------
	
	$sq="select * from shops where email='$email'";
	$result=mysql_query($sq);
	if(mysql_num_rows($result)>0)
	{
		print "E-mail already exist!";
	}	
	
	else //----------if E-mail is not exist, will enter in database --------------
	
	{
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
					$filename=$company.$fileid.$ext;
					$copytofile="logo/$filename";
 $mainpath=$copytofile;
if(move_uploaded_file($_FILES['image']['tmp_name'],$mainpath))
{
	$query=mysql_query("insert into shops(termcondition,email, password, store_name,overviews,url,country, state, region, city, address1, tip, zipcode,bankacc, bankname, firstname, lastname, phone, mobile, fax, website_name, contact_info, logo, date_registered,payment_methods, delivery_methods, customer_service, description)values('$termcondition', '$email', '$pass','$company','$overviews','$siteurl','$country', '$state','$region', '$city', '$add', '$tip', '$cod', '$bankacc', '$bankname', '$fname', '$lname', '$phone', '$mobile',        '$fax', '$webpage', '$contact', '$filename', '$dat', '$pay', '$delivery', '$services', '$description')")or print mysql_error();
		
		//--------------------------Confirmation to Administrator--------------
		if($query>0)
		{
		$cn=$obj->generatecode();
		$cnn=strtolower($cn);
		//----------------------------
		$mailto=$email;
		$subject="Your registration successful @".$COMPANY_NAME;
		$msg = "
Dear $fname  $lname,<br>
	
Thanks for registering with us.<br>

Username....... : $email<br>
Password....... : $pass<br>
Store/Company.. : $company<br>
Your address... : $add<br>
Your city...... : $city<br>
Your state..... : $state<br>
Your country... : ".GetCountryName($country)."<br>
Your phone no.. : $phone<br>
Your email add. : $email<br>
<br>
Please feel free to contact us for any queries or comments.<br>
<br>
Regards<br>
Webmaster<br>
$COMPANY_NAME";
		$from=$emailsfrom;
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$from."\r\n";
		//-----------Mail Function------
		mail($mailto,$subject,$msg, $headers);
		$subject="New registration successful @".$COMPANY_NAME;
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$mailto."\r\n";
		mail($emailsfrom,$subject,$msg, $headers);
		header("location:index.php");
		}
	}
	}
	}
	}?>
    <script language="javascript" type="text/javascript">
	function stepValidation()
	{
	if(document.myfrm.image.value=="")
	{
	alert("Please Upload Your Logo!");
	document.myfrm.image.focus();
	return false;
	}
	if(document.myfrm.description.value=="")
	{
	alert("Please Enter Your Description!");
	document.myfrm.description.focus();
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
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Create new <span>Account</span></h1>
                        </div>
                        <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-user"></i>Step3</h3>
                                    <hr>
                                    <h3><i class="fa fa-lock"></i><?=$lang['considerations'];?></h3>
                                    <hr>
                                    <form action="" method="POST" enctype="multipart/form-data" name="myfrm" id="myfrm" onsubmit="javascript: return stepValidation();" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputFirstName" class="col-sm-3 control-label"><?=$lang['yours']?>:</label>
                                            <div class="col-sm-9">
                                                <input name="image" type="file" id="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-sm-3 control-label"><?=$lang['Paoptions'];?>:</label>
                                            <div class="col-sm-9">
                                               <?php	 	  
											  //---------------------Payment Query----------------------------------
											  $sqlarray="select * from payment where active=1";
											   $resarray=mysql_query($sqlarray)or print mysql_error();
											   for($s=0;$s<mysql_num_rows($resarray);$s++)
											   {
													$catIdarray[$s]=mysql_result($resarray,$s,"pay_id");
													$catnamearray[$s]=mysql_result($resarray,$s,"payment_name");
											   }
											?> 
                                            <div class="row">
                                            <?php	 	 $rowcount=0;
											  for($t=0;$t<sizeof($catIdarray);$t++)
											  {
											   $rowcount=$rowcount+1;
											?><div class="col-sm-6">
                                            <input id="payment_name[]"  type="checkbox"  name="payment_name[]" value="<?=$catIdarray[$t];?>">&nbsp;<?=$catnamearray[$t];?></div>
                                            <?php	 	 if($rowcount==3)
												  {
												  echo "</div><div class=\"row\">";
												  $rowcount=0;
												  }
												}
											?>	</div>	
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEMail" class="col-sm-3 control-label" style="float:left;"><?=$lang['Delivery']?></label>
                                            <div class="col-sm-9">
                                               1. <input name="del[1]" type="text" id="del[1]" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                             <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                            <div class="col-sm-9">
                                               2. <input name="del[2]" type="text" id="del[2]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               3. <input name="del[3]" type="text" id="del[3]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               4. <input name="del[4]" type="text" id="del[4]" class="form-control" >
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputEMail" class="col-sm-3 control-label" style="float:left;"><?=$lang['AddService']?></label>
                                            <div class="col-sm-9">
                                               1. <input name="s[1]" type="text" id="s[1]" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                             <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                            <div class="col-sm-9">
                                               2. <input name="s[2]" type="text" id="s[2]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               3. <input name="s[3]" type="text" id="s[3]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               4. <input name="s[4]" type="text" id="s[4]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                            <div class="col-sm-9">
                                               5. <input name="s[5]" type="text" id="s[5]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               6. <input name="s[6]" type="text" id="s[6]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               7. <input name="s[7]" type="text" id="s[7]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                            <div class="col-sm-9">
                                               8. <input name="s[8]" type="text" id="s[8]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               9. <input name="s[9]" type="text" id="s[9]" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
                                           <div class="col-sm-9">
                                               10. <input name="s[10]" type="text" id="s[10]" class="form-control" >
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="inputCompany" class="col-sm-3 control-label"><?=$lang['Description']?></label>
                                            <div class="col-sm-9">
                                                <textarea name="description"  cols="40" rows="10" id="description" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <input name="ok" type="submit" id="ok" value="<?=$lang['Submit']?>" class="btn-default-1">
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
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <blockquote>
                                        <p>
                                            <abbr title="HyperText Markup Language Curabitur pretium tincidunt lacus. Nulla gravida orci a odio." class="initialism">HTML</abbr>
                                            Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                                        </p>
                                    </blockquote>
                                    <p>
                                        Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                                    </p>
                                    <p>
                                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                                    </p>


                                    <a href="#" class="btn-default-1">Read more</a>
                                </div>
                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-bookmark-o"></i>Checkout as Guest</h3>
                                    <hr>
                                    <p>Checkout as a guest instead!</p>

                                    <a href="#" class="btn-default-1">As Guest</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div> 
        </section>






         <!-- start footer--->
   
   <?php include("footer.php");?>  