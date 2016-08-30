<div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-unlock"></i>Customer Login</h3>
                                    <? 
                                        if(isset($_POST['login']))
                                        {
                                        $sqlfind="select email,password,member_id from members_profile where email='$email' and password='$pass'";
                                            $resfind=mysql_query($sqlfind);
                                            
                                            if(mysql_num_rows($resfind)>0)
                                            { 
                                                $email=mysql_result($resfind,0,"email");
                                                $member_id=mysql_result($resfind,0,"member_id");
                                                $CI_valid_user=$email;
                                                $CI_valid_id=$member_id;
                                                if(!$_SESSION['CI_valid_user'])
                                                {
                                                    $_SESSION['CI_valid_user']=$CI_valid_user=$email;
                                                    $_SESSION['CI_valid_id']=$CI_valid_id;
                                                    header("location:alerts.php");
                                                }
                                            //	$msg="<center><h4 style=\"margin-bottom: 0px; margin-top: 10px;\">You are successfully logged in. Click on close to start accessing member area</h1><br></center>
                                        //		<A HREF='javascript:#.go(0)'>Click to close and refresh</A>
                                        //
                                        //		";
                                                header("location:Account_info.php");
                                            }
                                            else
                                            {
                                                $msg= "<center><h4 style=\"margin-bottom: 0px; margin-top: 10px;\">This email address and password combination does not exist or the account has been deleted.</h1><br></center><br><input type='button' name='back' value='Go Back' onClick='javascript:history.back();'";
                                                
                                            }
                                            }
                                            ?>
                                            <script>
                                            function checklogin()
                                            {
                                                if(document.test.email.value=="")
                                                {
                                                    alert("User email cannot be left blank");
                                                    document.test.email.focus();
                                                    return false;
                                                }
												if(!IsEmail (document.test.email))
												{
													return false;
												}
                                                else if(document.test.pass.value=="")
                                                {
                                                    alert("User password cannot be left blank");
                                                    document.test.pass.focus();
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
                                    <p>Please login using your existing account<?php echo "<div style=\"color:#ff0000\">$msg</div>";?></p>
                                    <form action="" onsubmit="return checklogin();" method="post" id="test" name="test">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="col-md-6">
                                               <input type="password" name="pass" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <input type="submit" name="login" value="Log in"  class="btn-default-1">
                                                <a href="memberforgotpassword.php"><input type="button" value="Reset password" class="btn-default-1"></a>
                                            </div>
                                        </div>                                    
                                    </form>
                                </div>