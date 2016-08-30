<? ob_start();
session_start();
include("config.php");
include("connection.php");
include "functions.php";

 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $remail=$_POST['remail'];
 $password=$_POST['password'];
 $conpassword=$_POST['conpassword'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $sel_country=$_POST['sel_country'];
 $bmonth=$_POST['bmonth'];
 $bday=$_POST['bday'];
 $byear=$_POST['byear'];
 $profilephoto=$_POST['profilephoto'];
 $interests=$_POST['interests'];
 $about_zatara=$_POST['about_zatara'];
 $mobile_num=$_POST['mobile_num'];
 $notify_email=$_POST['notify_email'];
 $accept_terms=$_POST['accept_terms'];
$birthday=$bmonth."-".$bday."-".$byear;
 if(sizeof($interests)>0)
 {
 $interest=implode(",",$interests);
 }

$extlimit = "yes"; //Do you want to limit the extensions of files uploaded
$fileext_logo = array("gif","jpg","tiff","jpeg","bmp","png"); //Extensions you want files uploaded limited to.
$sizelimit = "no"; //Do you want a size limit, yes or no?
$sizebytes = "200000"; //size limit in bytes
$bio_description=addslashes($bio_description);
$firstname=addslashes($firstname);
$lastname=addslashes($lastname);
$location=addslashes($location);
$sqlfind="select * from members_profile where email='$email'";
$resfind=mysql_query($sqlfind);
if(mysql_num_rows($resfind)>0)
{
	echo "This email already exists. Please choose another email.";
	?>
	<script>location.href="registration.php?firstname=<?=$firstname;?>&lastname=<?=$lastname;?>&email=<?=$email;?>&zip=<?=$zip;?>&hometown=<?=$hometown;?>&location=<?=$location;?>&occupation=<?=$occupation;?>&gender=<?=$gender;?>&birthday_month=<?=$birthday_month;?>&birthday_day=<?=$birthday_day;?>&birthday_year=<?=$birthday_year;?>&bio_description=<?=$bio_description;?>&notify_email=<?=$notify_email;?>&pp_location=<?=$pp_location;?>&pp_lastname=<?=$pp_lastname;?>&pp_occupation=<?=$pp_occupation;?>&pp_gender=<?=$pp_gender;?>&pp_review_status=<?=$pp_review_status;?>&pp_description=<?=$pp_description;?>&pp_zip=<?=$pp_zip;?>&pp_birthday=<?=$pp_birthday;?>&pp_email=<?=$pp_email;?>&pp_hometown=<?=$pp_hometown;?>&pp_firstname=<?=$pp_firstname;?>&pp_nickname=<?=$pp_nickname;?>";</script>
	<?
}

## check size of the image
$profilephoto=basename($_FILES['profilephoto']['name']);
 
                $pos=strrpos($profilephoto,".");
                $ph=strtolower(substr($profilephoto,$pos+1,strlen($profilephoto)-$pos));
               	if(($ph!="gif" && $ph!="jpeg" && $ph!="jpg" && $ph!="png" && $ph!="bmp"))
				{
                print "Invalid Image Format";
				}
				else
				{
					$ext=strchr($profilephoto,".");
					 $fileid=generateShortCode();
					$profilephoto=$lastname.$fileid.$ext;
					 $copytofile="memberphoto/$profilephoto";
 $mainpath=$copytofile;
if(move_uploaded_file($_FILES['profilephoto']['tmp_name'],$mainpath))
{


$sqlinsert="insert into members_profile(firstname,lastname,email,password,address,city,state,country,birthday,profession,profilephoto,about_zatara,interests,mobile_num,notify_email,accept_terms)values('$firstname','$lastname','$email','$password','$address','$city','$state','$sel_cuontry','$birthday','$profession','$profilephoto','$about_zatara','$interest','$mobile_num','$notify_email','$accept_terms')";
$resinsert=mysql_query($sqlinsert) or print("Sorry".mysql_error());
echo "Member profile successfully saved";
$CI_valid_user=$email;
if(!isset($_SESSION['CI_valid_user']))
{
	$_SESSION['CI_valid_user']=$email;
	
}
}
}
// ********** sending registration mail to user *****//
// *************************************************//
$subject = "Visitor Your registration successful@".$COMPANY_NAME;
$from=$emailsfrom;
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: ".$from."\r\n";
$msg="Dear $firstname $lastname,<br>
Your registartion has been successful
Username=$email<br>
Password=$password<br>";
$CFG_mailfrom=$emailsfrom;
$CFG_mailreplyto=$emailsfrom;
mail($email,$subject,$msg, $headers);
header("location:Account_info.php");



######################################################
?>
