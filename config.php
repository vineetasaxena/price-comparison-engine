<?php ob_start();
session_start();
$sqlhost = "localhost";



$sqllogin = "hifibrands";



$sqlpass = "Testing@16";



$sqldb = "hifibrands";

$root_dir="/home/hi5brands/hifibrands/";



$wwwroot="http://hifibrands.com/";



$root="http://hifibrands.com/admin/";



define("PATH", "/home/hi5brands/hifibrands/admin/");



define("PATH1", "/home/hi5brands/hifibrands/");



define("PATHURL", "http://hifibrands.com/admin/");



$actualsitename="HiFiBrands.com";

$emailsfrom="admin@hifibrands.com";

$phonenumber="(929) 257-4326";

$COMPANY_NAME="HiFiBrands.com";

$totalproducts=50000;

$error[0]="Duplicate email";

$error[1]="Duplicate Username";

$DEFAULT_LANGUAGE="1";



//make language session



if($_GET['language']=="")



{



	if($_SESSION['language']=="")



	{



	$language="eng";



 $_SESSION['language']=$language;



	}



	else



	{



	$language=$_SESSION['language'];



 $_SESSION['language']=$language;



	}



}



elseif($_GET['language']!="")



{



$language=$_GET['language'];



$_SESSION['language']=$language;



}



else



{



$language=$_SESSION['language'];



$_SESSION['language']=$language;



}



$langroot="$root_dir/lang/".$language;







//make country session



if($_GET['country']=="")



{



	if($_SESSION['country']=="")



	{



	$country="us";



 $_SESSION['country']=$country;



	}



	else



	{



	$country=$_SESSION['country'];



 $_SESSION['country']=$country;



	}



}



elseif($_GET['country']!="")



{



$country=$_GET['country'];



$_SESSION['country']=$country;



}



else



{



$country=$_SESSION['country'];



$_SESSION['country']=$country;



}







//make currency session



if($_GET['currency']=="")



{



	if($_SESSION['currency']=="")



	{



	$currency="us";



 $_SESSION['currency']=$currency;



	}



	else



	{



	$currency=$_SESSION['currency'];



 $_SESSION['currency']=$currency;



	}



}



elseif($_GET['currency']!="")



{



$currency=$_GET['currency'];



$_SESSION['currency']=$currency;



}



else



{



$currency=$_SESSION['currency'];



//session_register('currency');



}

foreach ($_GET as $key=>$value) {
    $$key = $value;
}
foreach ($_POST as $key=>$value) {
    $$key = $value;
}
?>



