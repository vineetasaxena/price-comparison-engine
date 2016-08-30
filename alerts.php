<?php	 	 ob_start();
session_start();
include "config.php";
include "connection.php";
include_once"functions.php";

if($_POST['producidtalert']=="")
$product_id=$_GET['producidtalert'];
else
$product_id=$_POST['producidtalert'];
if($_POST['price']=="")
$c_price=$_GET['price'];
else
$c_price=$_POST['price'];
if($_POST['Submit']=="Submit")
{
$store=mysql_query("insert into product_alert(product_id,visiter_email,price_drops,price_drops_below,price_reduces,new_stores,new_reviews,current_price )values('$product_id','$_SESSION[CI_valid_user]','$price_drops','$price_drops_below','$price_reduces','$new_stores','$new_reviews','$c_price')") or print mysql_error();
header("location:products.php?productid=$product_id");
die;
}
?>
<table width="99%" cellpadding="0" cellspacing="0" class="cata_menu">
<tr>
<td width="21px" class="left_cata"></td>
<td width="759px" class="mid_cata">
<div class="c3">**</div>
</td>
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
<form name="form1" method="post" action="">

<table width="100%" cellpadding="2" cellspacing="0">
<tr>
	<td width="6%">&nbsp;</td>
	<td width="7%" align="center" valign="middle"><input type="checkbox" name="the_price" value="Yes" <? if($the_price=="Yes") echo "checked";?>></td>
	<td width="48%" class="from" align="left">Tell me when the price "drops by" $</td>
	<td width="32%" align="center"><input type="text" name="price_drops"></td>
	<td width="7%">&nbsp;</td>
</tr>
<tr>
	<td width="6%">&nbsp;</td>
	<td width="7%" align="center" valign="middle"><input type="checkbox" name="prices" value="Yes" <? if($prices=="Yes") echo "checked";?>></td>
	<td width="48%" class="from" align="left">Tell me when price drops below</td>
	<td width="32%" align="center"><input type="text" name="price_drops_below"></td>
	<td width="7%">&nbsp;</td>
</tr>
<tr>
	<td width="6%">&nbsp;</td>
	<td width="7%" align="center" valign="middle"><input type="checkbox" name="price_reduces" value="Yes" <? if($price_reduces=="Yes") echo "checked";?>></td>
	<td width="48%" class="from" align="left">Tell me when price reduce</td>
	<td width="32%" align="center">&nbsp;</td>
	<td width="7%">&nbsp;</td>
</tr>
<tr>
	<td width="6%">&nbsp;</td>
	<td width="7%" align="center" valign="middle"><input type="checkbox" name="new_stores" value="Yes" <? if($new_stores=="Yes") echo "checked";?>></td>
	<td width="48%" class="from" align="left">Tell me know when new stores appear that sell the same product</td>
	<td width="32%" align="center">&nbsp;</td>
	<td width="7%">&nbsp;</td>
</tr>
<tr>
	<td width="6%">&nbsp;</td>
	<td width="7%" align="center" valign="middle"><input type="checkbox" name="new_reviews" value="Yes" <? if($new_reviews=="Yes") echo "checked";?>></td>
	<td width="48%" class="from" align="left"> 	Let me know when new reviews appear for this product</td>
	<td width="32%" align="center">&nbsp;</td>
	<td width="7%">&nbsp;</td>
</tr>
<tr>
	<td width="6%">&nbsp;</td>
	<td colspan="4" align="center" valign="middle">&nbsp;</td>
</tr>
<tr>
	<td width="6%">&nbsp;</td>
	<td colspan="4" align="center" valign="middle"><input type="submit" name="Submit" value="Submit"></td>
</tr>
<input type="hidden" name="producidtalert" value="<?=$producidtalert;?>">
  <input type="hidden" name="price" value="<?=$price;?>"></table>

</form>
</td>
<td class="cata2_right"><img src="images/spacer.gif" alt="spacer" width="9" height="1" /></td>
</tr>
<tr>
<td><img src="images/c2_bl.jpg" alt="left" height="9" width="9" /></td>
<td class="cata2_bottom"><img src="images/spacer.gif" alt="spacer" width="1" height="9" /></td>
<td><img src="images/c2_br.jpg" alt="right" height="9" width="9" /></td>
</tr>
</table>