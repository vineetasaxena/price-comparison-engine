<? ob_start();
session_start();
include"lang/merchant_lang.php";

?>
<link href="BVMENU.css" rel="stylesheet" type="text/css" />
<div style="height:auto; min-height:700px; width:650px; ">
 <table width="100%"cellpadding="0" cellspacing="0" align="center">
<tr>
  <td width="1%" ><img src="images/catch/orange_left.gif" /></td>
  <td width="91%" style="background: url(images/catch/orange_mid.gif) top repeat-x; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#ffffff;">**</td>
  <td width="8%" style="background: url(images/catch/orange_mid.gif) top repeat-x;"></td>
</tr>
<tr>
<td style="border-left:1px #D5D5C1 solid"></td>
<td>
 
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="border2">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td class="normal"><?php	 	 echo GetProdName($_GET['product_id']);?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="7%">&nbsp;</td>
        <td width="35%" class="profile_02">Visitor</td>
        <td width="36%" class="profile_02">Click</td>
        <td width="22%" class="profile_02">Total Click
		<?php	 	
		$sqlw=mysql_query("select * from pc_clickthroughs where USER_PRODUCT_ID='".$_GET['product_id']."' and ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'");
	  $resw=mysql_num_rows($sqlw);
	  echo "<font color='#FF0000'>($resw)</font>";
		?></td>
      </tr>
	  <?php	 	
	  $sql="select * from pc_clickthroughs where USER_PRODUCT_ID='".$_GET['product_id']."' and ISMERCHANT='".$_SESSION['CI_valid_merchant_id']."'";
	  $res=mysql_query($sql);
	  
	  for($i=0;$i<mysql_num_rows($res);$i++)
	  {
	  $ppc_id=mysql_result($res,$i,"USER_PRODUCT_ID");
	  $product_id=mysql_result($res,$i,"USER_PRODUCT_ID");
	  $visitor_id=mysql_result($res,$i,"ISVISITOR");
	  $merchant_id=mysql_result($res,$i,"ISMERCHANT");
	  $sqlq=mysql_query("select * from pc_clickthroughs where USER_PRODUCT_ID='$product_id' and ISVISITOR='$visitor_id'");
	  $resq=mysql_num_rows($sqlq);
	  
	 ?>
      <tr>
        <td>&nbsp;</td>
        <td class="seemore"><div align="left"><a href="#.php?visitor_id=<?=$visitor_id;?>"><?php	 	 echo MemberEmail($visitor_id);?></a></div></td>
        <td class="seemore"><div align="left">[<?php	 	 echo $resq;?>]</div></td>
        <td>&nbsp;</td>
      </tr>
	 <?
	 }
	 ?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>



</td>
<td  style="border-right:1px #D5D5C1 solid;" ></td>
</tr>
<tr>
  <td style="border-bottom:1px #D5D5C1 solid;border-left:1px #D5D5C1 solid;"></td>
  <td style="border-bottom:1px #D5D5C1 solid;">&nbsp;</td>
  <td style="border-bottom:1px #D5D5C1 solid; border-right:1px #D5D5C1 solid;">&nbsp;</td>
</tr>
</table>	
</div>