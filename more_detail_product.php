<? ob_start();
session_start();
include("config.php");
include("connection.php");
include("functions.php");
//print $_SESSION['CI_valid_id'];
$productid=$_GET['productid'];
if(!empty($_SESSION['CI_valid_user']))
{
$sqlid="select * from members_profile where email='".$_SESSION['CI_valid_user']."'";
$resul=mysql_query($sqlid);
while($rs=mysql_fetch_array($resul))
{
$member_id=$rs['member_id'];
}
$record2="select * from my_recent_view where product_id='$productid'";
$record1=mysql_query($record2);
if(mysql_num_rows($record1)>0)
{
print "";
}
else
{
$in="insert into my_recent_view(user_id,product_id,r_date)values('$member_id','$productid',now())";
$inres=mysql_query($in) or print("Sorry".mysql_error());
}
}
if($_GET['productid'])
{
$ressql2=mysql_query("select * from hitcounter_product where product_id='".$productid."'") or print("Sorry".mysql_error());
			if(mysql_num_rows($ressql2)>0)
			{
			$dd="select no_of_count from hitcounter_product where product_id='$productid'";
			$rr=mysql_query($dd);
			$rt=mysql_fetch_array($rr);
			$cont=$rt['no_of_count'];
			$conter=$cont+1;
			$yy="update hitcounter_product set no_of_count='$conter' where product_id='$productid'";
			$ff=mysql_query($yy) or print("sorry".mysql_error());
			}
			else
			{
           $sql="insert into hitcounter_product(no_of_count,product_id)values('1','$productid')";
           $res=mysql_query($sql) or print("Sorry".mysql_error());
        }
 }
?>
<script language="JavaScript" type="text/javascript">var noads =0;</script>
<? 
$sqlfeatured="select * from products where product_id='$productid'";
   $resfeatured=mysql_query($sqlfeatured) or print("Sorry".mysql_query());
   if(mysql_num_rows($resfeatured)>0)
   {
   		for($f=0;$f<mysql_num_rows($resfeatured);$f++)
		{
			 $catiid=mysql_result($resfeatured, $f, "categories");
			 /****************************Get Main Categoty***************************/
			 
			 $sqllw="select * from product_categories where id='$catiid'";
			 $resdw=mysql_query($sqllw);
			 while($rrw=mysql_fetch_array($resdw))
			 {
			 $parent=$rrw['parent'];
			/
			 $sqll="select * from product_categories where id='$parent'";
			 $resd=mysql_query($sqll);
			 while($rr=mysql_fetch_array($resd))
			 {
			 $main_cat=$rr['name'];
			 }
			 }
			 $desc=mysql_result($resfeatured, $f, "description");
			 $short_de=mysql_result($resfeatured, $f, "short_desc");
			 $category_name=GetProductCatName($catiid);
			 $productid=mysql_result($resfeatured, $f, "product_id"); 
			 $name_product=GetProdName($productid);
			 $pics=mysql_result($resfeatured, $f, "picture");
			 $explode=explode(".",$picture);
			 }
		 }

$sqlfeatured="select * from products_pz where id='$productid'";
   $resfeatured=mysql_query($sqlfeatured) or print("Sorry".mysql_query());
   if(mysql_num_rows($resfeatured)>0)
   {
   		for($f=0;$f<mysql_num_rows($resfeatured);$f++)
		{
			 $catiid=mysql_result($resfeatured, $f, "categories");
			 $description=mysql_result($resfeatured, $f,"description");
			 $short_desc=mysql_result($resfeatured, $f, "short_desc");
			 $catname=GetProductCatName($catiid);
			 $productid=mysql_result($resfeatured, $f, "id"); 
		     $explode=explode(".",$picture);
			 
			  
			 
			 
			 /*************************************************MAXIMUM and MiNiMum PrICE***************/
			 
			 $sqlmax="select max(prices) as maxprice from products_pz where product_id='$productid'";
			 $resmax=mysql_query($sqlmax);
			 if(mysql_num_rows($resmax)>0)
			 {
			 	$max=mysql_result($resmax,0,"maxprice");
			 }
			 $sqlmin="select min(prices) as minprice from products_pz where product_id='$productid'";
			 $resmin=mysql_query($sqlmin);
			 if(mysql_num_rows($resmin)>0)
			 {
			 	$min=mysql_result($resmin,0,"minprice");
			 }
			 #######find in how many stores
			$sqlprod="select distinct shops from products_pz where  product_id='$productid'";
			$resprod=mysql_query($sqlprod);
			$countshops=mysql_num_rows($resprod);
			
			 $totnumberofratings=GetProductNumberOfRatingById($productid);
			 $totalrating=GetProductTotalOfRatingById($productid);
			 if($totalrating!=0 && $totnumberofratings!=0){
			 $avgrating=GetProductAverageRatingById($totalrating, $totnumberofratings);
		 }
		 else
		 {
		 	$avgrating="";
		 }
		 
		 /***********************************functionality***********************************************/
		
		$totnumberofratingsadmin=GetProductNumberOfRatingByIdadmin($productid);
		
			
		 $totalratingadmin=GetProductTotalOfRatingByIdadmin($productid);
		 
		 if($totalratingadmin!=0 && $totnumberofratingsadmin!=0){
			 $avgratingadmin=AverageRatingByIdadmin($totalratingadmin, $totnumberofratingsadmin);
			
		 }
		 else
		 {
		 	$avgratingadmin="";
			
		 }
		 
		 }
		 
	}?>
	<? include("header.php"); ?>
	<table width="100%" cellpadding="0" cellspacing="0" align="center"><tr><td>
<table width="990px" border="0" cellspacing="0" cellpadding="6" align="center">
  
  <tr>
    <td width="281" valign="top"><table width="26%" height="100%" border="0" cellspacing="6" cellpadding="0" >
  <tr>
    <td valign="top"><? include("left_link.php"); ?>
 </td></tr>
 </table></td>
    <td width="650px" valign="top">
	<table width="100%" cellpadding="0" cellspacing="0" align="center">
<tr>
  <td width="1%" ><img src="images/catch/orange_left.gif" /></td>
  <td width="91%" style="background: url(images/catch/orange_mid.gif) top repeat-x; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#ffffff;">&nbsp;&nbsp;zatara><font color="#0099FF" size="2"><?=$main_cat?></font>><font class="heading"><?=$category_name;?>-<?=$name_product;?>
	  </font></td>
  <td width="8%" style="background: url(images/catch/orange_mid.gif) top repeat-x;"></td>
</tr>
<tr>
<td style="border-left:1px #D5D5C1 solid">&nbsp;</td>
<td>
 <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
	  <td valign="top"> </td>
	</tr>
	<tr>
	  <td>&nbsp;
	    <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td width="30%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
	<?
	if(file_exists("uploadimages/$pics"))
	{
	?>
	&nbsp;&nbsp;<img src="uploadimages/<?=$pics;?>" border=0  height="200" width="200" />&nbsp;&nbsp;<?
	} 
	else
	{
	?>
	&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/icon_image_not_available_b.gif" vspace="5"  border="0" height="100" width="100"><? }?>	</td>
              </tr>
              
            </table></td>
            <td width="70%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><font color="#000000" size="5">
                  <?=$name_product;?>
                  -Compare Prices. </font></td>
              </tr>
              <tr>
                <td><font color="#666666" size="1"> <?php	 	 echo $description; ?>
                      <hr color="#666666" size="1" />
                </font></td>
              </tr>
              <tr>
                <td colspan="3" style="padding-bottom: 3px; color:#FF6600; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:12px;">Price Range: <span style="font-weight: bold; color: #000;"><span class="money">&#36;
                        <?=$min;?>
                  </span></span> to <span style="font-weight: bold; color: #000;"><span class="money">&#36;
                  <?=$max;?>
                  </span></span> stores(
                  <?=$countshops;?>
                  )</td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="38%" style=" font-size:12px;">User Rating</td>
                      <td width="36%" ><? 
					  if($avgrating=='')
					  {
					  ?>
					  <img src="images/rating_0.png" />
					  <?
					  }
					  else
					  {
					  print $avgrating;
					  }
					  
					  
					  ?></td>
                      <td width="26%" class="heading"><a href="#.php"></a></td>
                    </tr>
                    <tr>
                      <td style=" font-size:12px;">Expert Rating</td>
                      <td><?
					  if($avgratingadmin=='')
					  {
					  ?>
					  <img src="images/rating_0.png" />
					  <?
					  }
					  else
					  {
					  print $avgratingadmin;
					  }
					  ?></td>
                      <td class="heading"><a href="#.php"></a></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td><font color="#000000" size="2">
                  <div></div>
                </font></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
	</tr>
	</table>
		
		
<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
  </table>
	

<script type="text/javascript" src="js/ajaxtabs.js">
</script>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td width="142">&nbsp;</td>
    <td width="491"><font color="#000000" size="2"><a href="save_list.php?pro_id1=<?=$pro;?>">Add to my saved list</a> | <a href="price_alert.php">Add alert</a> | <a href="writereview.php?product=<?=$productid;?>">Write a review</a></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
<div>
  <script type="text/javascript">
startajaxtabs("maintab")
</script>
</div></td></tr></table>
 </td>
<td  style="border-right:1px #D5D5C1 solid;" >&nbsp;</td>
</tr>
<tr>
  <td style="border-bottom:1px #D5D5C1 solid;border-left:1px #D5D5C1 solid;">&nbsp;</td>
  <td style="border-bottom:1px #D5D5C1 solid;">&nbsp;</td>
  <td style="border-bottom:1px #D5D5C1 solid; border-right:1px #D5D5C1 solid;">&nbsp;</td>
</tr>
</table>
</td>
  </tr>
  <tr>
<?
include_once ("footer.php");
?>


