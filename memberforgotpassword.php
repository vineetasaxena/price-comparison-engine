<?php	 	 ob_start();
session_start();
include("config.php");
include("connection.php");
include_once"header.php";
include("functions.php"); 
 if(isset($_POST['forgotpass']))
			{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$remail=$_POST['remail'];
			if(!empty($fname) && !empty($lname) && !empty($remail))
			{
			 $result = mysql_query("SELECT  email, firstname, lastname, password FROM members_profile  WHERE  firstname='$fname' and lastname='$lname' and email='$remail'")or die(mysql_error());
			
			 $result1=mysql_num_rows($result);
			 
			 if($result1>0)
			 {
			 if($row=mysql_fetch_array($result))
			 {
			 	$password=$row['password'];
				$email=$row['email'];
			 }
			$mailto=$remail;
			$subject="Your password";
			$retemailaddress=$emailsfrom;
			$headers = "From: ".$emailsfrom."\r\n";
			$headers .= "Reply-To: <$retemailaddress>\n"; 
			$headers .= "Errors-To: <$retemailaddress>\n"; 
			$headers .= "Return-path: <$retemailaddress>\n"; 
			$headers .= "MIME-Version: 1.0\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\n"; 
			$headers .= "Content-Transfer-Encoding: 7 bit\n"; 
			$headers .= "X-Priority: 3\n"; 
			$headers .= "X-MSMail-Priority: Normal\n"; 
			$headers .= "X-Mailer: iCEx Networks HTML-Mailer v1.0\n"; 
			$headers .= "X-MimeOLE: Produced By Microsoft MimeOLE V6.00.2800.1441\n";
			mail($mailto,$subject,"Your username is: $email<br>Your password is: ".$password, $headers);
			$var1="Password has been sent to your email";
			 }
			 else
			 {
			 $var="Email Address Firstname and Lastname does not match Please give Valid Info!";
			 
			  }
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
<form name="test" id="test" method="post" action="" enctype="multipart/form-data" onSubmit="return checklogin();">
<table width="804" cellpadding="0" cellspacing="0" class="cont_pg">
<tr>
<td width="800px" valign="top" align="center">
<table width="99%" cellpadding="0" cellspacing="0" class="cata_menu">
<tr>
<td width="21px" class="left_cata"></td>
<td width="759px" class="mid_cata">
<div class="c3">Enter details to get your password</div></td>
<td width="20px" class="right_cata"></td>
</tr>
</table>
<table width="99%" cellpadding="0" cellspacing="0" class="cata2">
<tr>
<td><img src="images/c2_tl.jpg" alt="left" height="9" width="9" /></td>
<td class="cata2_top"><img src="images/spacer.gif" alt="spacer" width="9" height="9" /></td>
<td><img src="images/c2_tr.jpg" alt="right" height="9" width="9" /></td>
</tr>
<tr>
<td class="cata2_left"><img src="images/spacer.gif" alt="spacer" width="9" height="1" /></td>
<td class="cata2_c" valign="top">
<table width="100%" cellpadding="2" cellspacing="0">
<tr>
	<td width="26%" valign="middle" align="center"><table width="60%" cellpadding="0" cellspacing="0" class="box_body">
										<tr>
											<td align="right"><img src="images/c1_tl.jpg" alt="box" height="9" width="9" /></td>
											<td class="c1_top"><img src="images/spacer.gif" alt="box" width="9" height="9" /></td>
											<td align="left"><img src="images/c1_tr.jpg" alt="box" height="9" width="9" /></td>
										</tr>
										<tr>
											<td class="c1_left" align="right"><img src="images/spacer.gif" alt="box" width="9" height="1" /></td>
											<td class="cata_img" valign="middle" align="center"><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td colspan="2" align="left" class="mid_cata">&nbsp;</td>
    </tr>
  <tr>
    <td width="43%" align="right" class="from">Member Email:</td>
    <td width="57%" align="left">
      <input name="remail" type="text" id="remail" />    </td>
  </tr>
  <tr>
    <td align="right" class="from">Member First Name:</td>
    <td align="left"><input name="fname" type="text" id="fname"/></td>
  </tr>
  <tr>
    <td align="right" class="from">Member Last name:</td>
    <td align="left"><input name="lname" type="text" id="lname" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" class="mid_cata"><?php	 	 echo $var1;?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" class="mid_cata"><?php	 	 echo $var;?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input name="forgotpass" type="submit" id="forgotpass" value="Submit">     </td>
    </tr>
  
  <tr>
    <td colspan="2" align="center" class="cata_txt">&nbsp;</td>
    </tr>
</table>
											
											</td>
											<td class="c1_right" align="left"><img src="images/spacer.gif" alt="box" width="9" height="1" /></td>
										</tr>
										<tr>
											<td align="right"><img src="images/c1_bl.jpg" alt="box" height="9" width="9" /></td>
											<td class="c1_bottom"><img src="images/spacer.gif" alt="box" width="1" height="9" /></td>
											<td align="left"><img src="images/c1_br.jpg" alt="box" height="9" width="9" /></td>
										</tr>
									</table></td>
	
	</tr>


</table></td>
<td class="cata2_right"><img src="images/spacer.gif" alt="spacer" width="9" height="1" /></td>
</tr>
<tr>
<td><img src="images/c2_bl.jpg" alt="left" height="9" width="9" /></td>
<td class="cata2_bottom"><img src="images/spacer.gif" alt="spacer" width="1" height="9" /></td>
<td><img src="images/c2_br.jpg" alt="right" height="9" width="9" /></td>
</tr>
</table></td>
</tr>
</table>
</td>
</tr>
</table>
</form>
</td>
</tr>
<?
		include_once "footer.php";	
		?>