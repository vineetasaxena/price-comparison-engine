<? ob_start();
session_start();
include_once ("config.php");
include_once ("connection.php");
include_once ("header.php");
include_once ("functions.php");
include("lang/Merchants.php");
?>
<link href="BVMENU.css" rel="stylesheet" type="text/css"/>
<table width="100%" cellpadding="0" cellspacing="0" align="center"><tr><td>
<table width="990px" border="0" cellspacing="0" cellpadding="6" align="center">
  
  <tr>
    <td width="281" valign="top"><table width="26%" height="100%" border="0" cellspacing="6" cellpadding="0" >
  <tr>
    <td valign="top">
<?
include "merchant_left_link.php";
?>
</td></tr>
 </table></td>
    <td width="100%" valign="top"><?
include_once ("click.php");
?>
</td>
  </tr>
  <tr>
<?
include_once ("footer.php");
?>