<? ob_start();
session_start();
include_once ("config.php");
include_once ("connection.php");
include_once ("header.php");
include_once ("functions.php");
include("lang/Merchants.php");
?>
<?php	 	

$sql="delete from propose_products  where merchant_id='".$_SESSION['CI_valid_merchant_id']."' and propose_id='$id'";
$ress=mysql_query($sql) or print("Sorry".mysql_error());

header("location:proposed_products.php");
die;
?>
