<?php	 	
ob_start();
session_start();
include("config.php");
 include("connection.php");
include("header.php");
include("functions.php");
//---------------Get and Set Variable---------------------
    $email=$_POST['email'];
	$sqlcheck="select * from news_letter where email='$email'";
	$rescheck=mysql_query($sqlcheck);
	if(mysql_num_rows($rescheck)>0)
	{
		$msg="You have already subscribed";
	   header("location:index.php?msg=$msg");
	   exit;
	}
	else
	{
	 //echo $email;
    $sql="insert into news_letter(email) values('$email')";
	//echo $sql;
    mysql_query("$sql") or die("Record not inserted");
	if($sql)
	{
		$msg="You are successfully subscribed";
	   header("location:index.php?msg=$msg");
	   exit;
	} 
	else
	{
	$msg="Sorry you could not subscribe";
	   header("location:index.php?msg=$msg");
	   exit;
	}
	}	
?>