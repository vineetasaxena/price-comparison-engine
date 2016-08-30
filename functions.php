<?php	 	

/************************************Member Rated********************************/

function MemberRate($Id)

{

	$q = mysql_query ("SELECT `firstname` FROM `members_profile` WHERE `member_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



/*************************************Shop Rating********************************************/

function GetProductNumberOfRatingByIShop($Id) {

    $q = mysql_query ("SELECT count(store_rate_id) as totreviewshop FROM `store_rating` WHERE `shop_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductTotalOfRatingByIdShop($Id) {

    $q = mysql_query ("SELECT sum(rating) as totratingshop FROM `store_rating` WHERE `shop_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductRecommendationByIdShop($Id){

    $q = mysql_query ("SELECT count(rating) as countratingtotratingshop FROM `store_rating` WHERE `shop_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	$count=$r[0];

	

	}

function AverageRatingByIdShop($totratingshop, $totreviewshop)

    {

	$averageaverageshop=$totratingshop/$totreviewshop;

	if($averageaverageshop=='')

	{

	$shop= "<img src=\"store_reviewimages/rating_0.png\" border=0>";

	}

	if($averageaverageshop==0)

	{

	$shop= "<img src=\"store_reviewimages/rating_0.png\" border=0>";

	}

	if($averageaverageshop<1)

	{

		$shop= "<img src=\"store_reviewimages/ratinghalf_1.png\" border=0>";

	}

	if($averageaverageshop==1)

	{

		$shop="<img src=\"store_reviewimages/rating_1.png\" border=0>";

	}

	if($averageaverageshop<2 && $averageaverageshop>1)

	{

		$shop="<img src=\"store_reviewimages/ratinghalf_2.png\" border=0>";

	}

	if($averageaverageshop==2)

	{

		$shop= "<img src=\"store_reviewimages/rating_2.png\" border=0>";

	}

	if($averageaverageshop<3 && $averageaverageshop>2)

	{

		$shop= "<img src=\"store_reviewimages/ratinghalf_3.png\" border=0>";

	}

	if($averageaverageshop==3)

	{

		$shop= "<img src=\"store_reviewimages/rating_3.png\" border=0>";

	}

	if($averageaverageshop<4 && $averageaverageshop>3)

	{

		$shop="<img src=\"store_reviewimages/ratinghalf_4.png\" border=0>";

	}

	if($averageaverageshop==4)

	{

		$shop= "<img src=\"store_reviewimages/rating_4.png\" border=0>";

	}

	if($averageaverageshop<5 && $averageaverageshop>4)

	{

		$shop= "<img src=\"store_reviewimages/ratinghalf_5.png\" border=0>";

	}

	if($averageaverageshop==5)

	{

		$shop= "<img src=\"store_reviewimages/rating_5.png\" border=0>";

	}

	

	return $shop;

	

}

/**************************************Expert Review khan************************************/

function GetProductNumberOfRatingByIdadmin($Id) {

    $q = mysql_query ("SELECT count(expert_id) as totreviewadmin FROM `expert_review` WHERE `productid`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductTotalOfRatingByIdadmin($Id) {

    $q = mysql_query ("SELECT sum(rating) as totratingadmin FROM `expert_review` WHERE `productid`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductRecommendationByIdadmin($Id){

    $q = mysql_query ("SELECT count(rating) as countratingtotratingadmin FROM `expert_review` WHERE `productid`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	$count=$r[0];

	

	}

	function AverageRatingByIdadmin($totratingadmin, $totreviewadmin)

    {

	$averageaverageadmin=$totratingadmin/$totreviewadmin;

	if($averageaverageadmin=='')

	{

	$admin= "<img src=\"images/rating_0.png\" border=0>";

	}

	if($averageaverageadmin==0)

	{

	$admin= "<img src=\"images/rating_0.png\" border=0>";

	}

	if($averageaverageadmin<1)

	{

		$admin= "<img src=\"images/ratinghalf_1.png\" border=0>";

	}

	if($averageaverageadmin==1)

	{

		$admin="<img src=\"images/rating_1.png\" border=0>";

	}

	if($averageaverageadmin<2 && $averageaverageadmin>1)

	{

		$admin="<img src=\"images/ratinghalf_2.png\" border=0>";

	}

	if($averageaverageadmin==2)

	{

		$admin= "<img src=\"images/rating_2.png\" border=0>";

	}

	if($averageaverageadmin<3 && $averageaverageadmin>2)

	{

		$admin= "<img src=\"images/ratinghalf_3.png\" border=0>";

	}

	if($averageaverageadmin==3)

	{

		$admin= "<img src=\"images/rating_3.png\" border=0>";

	}

	if($averageaverageadmin<4 && $averageaverageadmin>3)

	{

		$admin="<img src=\"images/ratinghalf_4.png\" border=0>";

	}

	if($averageaverageadmin==4)

	{

		$admin= "<img src=\"images/rating_4.png\" border=0>";

	}

	if($averageaverageadmin<5 && $averageaverageadmin>4)

	{

		$admin= "<img src=\"images/ratinghalf_5.png\" border=0>";

	}

	if($averageaverageadmin==5)

	{

		$admin= "<img src=\"images/rating_5.png\" border=0>";

	}

	

	return $admin;

	

}





/****************************************khan*********************************/

function getThemeName($Id)

{

	$q = mysql_query ("SELECT `gifts_theme_name` FROM `gifts_theme` WHERE `gifts_theme_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProdIamge($Id){

    $q = mysql_query ("SELECT picture FROM products WHERE `product_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProdName($Id){

    $q = mysql_query ("SELECT name FROM products WHERE product_id='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return " "; }

	return $r[0];

}
function GetProdCatid($Id){

    $q = mysql_query ("SELECT categories FROM products WHERE product_id='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return " "; }

	return $r[0];

}
function GetFeaturD($Id)

{

	$q = mysql_query ("SELECT `desc` FROM `feature_values` WHERE `feature_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return " "; }

	return $r[0];

}

function GetShopDesc($Id)

{

	$q = mysql_query ("SELECT overviews FROM `shops` WHERE `shops_id`='$Id'");

    if ($q) 

	{

	$r = mysql_fetch_array ($q); }

    if (!$r || !$q)

	{

	return " "; 

	}

	return $r[0];

}

function GetShopZip($Id)

{

	$q = mysql_query ("SELECT zipcode FROM `shops` WHERE `shops_id`='$Id'");

    if ($q) 

	{

	$r = mysql_fetch_array ($q); }

    if (!$r || !$q)

	{

	return " "; 

	}

	return $r[0];

}

function getPartialDesc($str, $max=60, $link='')

	{																				

		$retVal = "";



		if ( strlen($str) > ($max+3) )

		{

			$sPos = strpos($str, " ", $max);



			if ( $sPos )

				$retVal .= substr($str, 0, $sPos )."...";

			else

				$retVal .= substr($str, 0, 60 )."...";



			if ( $link != '' )

				$retVal .= " <a href=\"".$link."\" style='font-size:10px'>".'More product details...'."</a>";

		}

		else

			$retVal .= $str ;



		return $retVal;

	}

/*******************************************end****************************/



/*************************Image Laxmi**********************/

function getImage($imageId)

{

$path="images/";

if($imageId==1)

{

 return $path."rating_1.png";

}

else

if($imageId==2)

{

 return $path."rating_2.png";

}

else

if($imageId==3)

{

 return $path."rating_3.png";

}

else

if($imageId==4)

{

 return $path."rating_4.png";

}

else

if($imageId==5)

{

 return $path."rating_5.png";

}



}









/*******************************************end****************************/

function GetProductdescription($Id) {

    $q = mysql_query ("SELECT `description` FROM `products` WHERE `product_id`='$Id'");

	if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetFeatureValueName($Id)

{

	$q = mysql_query ("SELECT `feature_value` FROM `feature_values` WHERE `feature_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductPrice($Id) {

//echo "SELECT `prices` FROM `products_pz ` WHERE `id`='$Id'";

    $q = mysql_query ("SELECT `prices` FROM `products_pz` WHERE `product_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProduct_Name($Id) {

    $q = mysql_query ("SELECT `name` FROM `products` WHERE `product_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetMemberNameById($Id)

{

	$q = mysql_query ("SELECT `firstname` FROM `members_profile` WHERE `member_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductIDByName ($Name) {

    $q = mysql_query ("SELECT `id` FROM `products_pz ` WHERE `name`='$Name'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductNameById ($Id) {



    $q = mysql_query ("SELECT `name` FROM `products_pz ` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductPictureNameById ($Id) {

    $q = mysql_query ("SELECT `picture` FROM `products_pz ` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductPictureName($Id) {

    $q = mysql_query ("SELECT ` picture` FROM `products` WHERE `product_id`='$Id'");

	if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

	}

	function GetProductNumberOfRatingById($Id) {

	

    $q = mysql_query ("SELECT count(id) as totreview FROM `product_reviews` WHERE `productid`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];



}



function GetProductTotalOfRatingById($Id) {

    $q = mysql_query ("SELECT sum(rating) as totrating FROM `product_reviews` WHERE `productid`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductRecommendationById ($Id){

    $q = mysql_query ("SELECT count(rating) as countrating FROM `product_reviews` WHERE `productid`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	$count=$r[0];

	$s = mysql_query ("SELECT count(recomandable) as countrecomandable  FROM `product_reviews` WHERE `productid`='$Id' and recomandable ='1'");

    if ($s) { $t = mysql_fetch_array ($s); }

    if (!$t || !$s) { return 0; }

	$recommended=$t[0];

	if($count!=0 && $recommended!=0)

	$totperc=($recommended*100)/$count;

	else

	$totperc=0;

	return $totperc;

}



function GetProductReviewOnReviewId($Id)

{
//echo "SELECT rating  FROM `product_reviews` WHERE `id`='$Id'";
	 $q = mysql_query ("SELECT rating  FROM `product_reviews` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { $r[0]=0; }

	$rating=$r[0];

	if($rating==0)

	{

		$rate= "<img src=\"images/rating_0.png\" border=0>";

	}
	if($rating==1)

	{

		$rate= "<img src=\"images/rating_1.png\" border=0>";

	}
	if($rating==2)

	{

		$rate= "<img src=\"images/rating_2.png\" border=0>";
	}

	

	if($rating==3)

	{

		$rate= "<img src=\"images/rating_3.png\" border=0>";

	}

	

	if($rating==4)

	{

		$rate= "<img src=\"images/rating_4.png\" border=0>";

	}

	

	if($rating==5)

	{

		$rate= "<img src=\"images/rating_5.png\" border=0>";

	}
echo $rate;
	//return $rate;

	

}



function GetShopUrlFromId($Id)

{

	$q = mysql_query ("SELECT url  FROM `shops` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetSiteCountryName($Id)

{

	$q = mysql_query ("SELECT  sCountryabbr  FROM `countrymaster` WHERE `iId`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetCountryName($Id)

{

	$q = mysql_query ("SELECT   sCountryName  FROM `countrymaster` WHERE `iId`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductAverageRatingById ($totrating, $totreview)

{

	$average=$totrating/$totreview;

	if($average=='')

	{

		$rate= "<img src=\"images/rating_0.png\" border=0>";

	}

	else

	if($average==0)

	{

		$rate= "<img src=\"images/rating_0.png\" border=0>";

	}

else

	if($average<1)

	{

		$rate= "<img src=\"images/rating_0.png\" border=0>";

	}

	else

	if($average==1)

	{

		$rate= "<img src=\"images/rating_1.png\" border=0>";

	}

	else

	if($average<2 && $average>1)

	{

		$rate= "<img src=\"images/rating_1.png\" border=0>";

	}

	else

	if($average==2)

	{

		$rate= "<img src=\"images/rating_2.png\" border=0>";

	}

	else

	if($average<3 && $average >2)

	{

		$rate= "<img src=\"images/rating_2.png\" border=0>";

	}

	else

	if($average==3)

	{

		$rate= "<img src=\"images/rating_3.png\" border=0>";

	}

	else

	if($average<4 && $average >3)

	{

		$rate= "<img src=\"images/rating_3.png\" border=0>";

	}

	else

	if($average==4)

	{

		$rate= "<img src=\"images/rating_4.png\" border=0>";

	}

	else

	if($average<5 && $average>4)

	{

		$rate= "<img src=\"images/rating_4.png\" border=0>";

	}

	else

	if($average==5)

	{

		$rate= "<img src=\"images/rating_5.png\" border=0>";

	}

	return $rate;

	

}

function GetProductPriceById ($Id) {

    $q = mysql_query ("SELECT `prices` FROM `products_pz ` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetProductCatName($Id) {

    $q = mysql_query ("SELECT `name` FROM `product_categories` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopName($Id) {

	

    $q = mysql_query ("SELECT `store_name` FROM `shops` WHERE `shops_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return " "; }

	return $r[0];

}
function GetShopFirstName($Id) {

	

    $q = mysql_query ("SELECT `firstname` FROM `shops` WHERE `shops_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return " "; }

	return $r[0];

}
function GetShopLogo($Id) {

	

    $q = mysql_query ("SELECT `logo` FROM `shops` WHERE `shops_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return " "; }

	return $r[0];

}

function GetShopProductdate($productId, $shopid) {

	

    $q = mysql_query ("SELECT `p_date` FROM `products_pz ` WHERE `shops`='$shopid' and `product_id`='$productId'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetShopProductPrice($productId, $shopid) {

    $q = mysql_query ("SELECT prices FROM products_pz WHERE shops='$shopid' and product_id='$productId'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetProductUrl($productid){

	$q = mysql_query ("SELECT `key_features` FROM `products_pz ` WHERE `id`='$productid'");

	if ($q) {  $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopReviewWouldShopAgain($shopid){

	$q = mysql_query ("SELECT avg(would_shop_again) FROM `shop_reviews` WHERE `shopid`='$shopid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetShopReviewWouldShopAgainMemberWise($shopid, $memberid){

	$q = mysql_query ("SELECT avg(would_shop_again) FROM `shop_reviews` WHERE `shopid`='$shopid' and memberid='$memberid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopReviewontime_delivery($shopid){

	$q = mysql_query ("SELECT avg(ontime_delivery) FROM `shop_reviews` WHERE `shopid`='$shopid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopReviewontime_deliveryMemberWise($shopid, $memberid){

	$q = mysql_query ("SELECT avg(ontime_delivery) FROM `shop_reviews` WHERE `shopid`='$shopid' and memberid='$memberid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopReviewcustomer_support($shopid){

	$q = mysql_query ("SELECT avg(customer_support) FROM `shop_reviews` WHERE `shopid`='$shopid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];



}

function GetShopReviewcustomer_supportMemberWise($shopid, $memberid){

	$q = mysql_query ("SELECT avg(customer_support) FROM `shop_reviews` WHERE `shopid`='$shopid' and memberid='$memberid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopReviewproduct_met_expectations($shopid){

	$q = mysql_query ("SELECT avg(product_met_expectations) FROM `shop_reviews` WHERE `shopid`='$shopid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopReviewproduct_met_expectationsMemberWise($shopid, $memberid){

	$q = mysql_query ("SELECT avg(product_met_expectations) FROM `shop_reviews` WHERE `shopid`='$shopid' and memberid='$memberid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopAverageReview($shopid){

	$tot=GetShopReviewWouldShopAgain($shopid)+GetShopReviewontime_delivery($shopid)+GetShopReviewcustomer_support($shopid)+GetShopReviewproduct_met_expectations($shopid);

	$avg=$tot/4;

	return $avg;

}



function GetShopAverageReviewMemberWise($shopid, $memberid){

	$tot=GetShopReviewWouldShopAgainMemberWise($shopid, $memberid)+GetShopReviewontime_deliveryMemberWise($shopid, $memberid)+GetShopReviewcustomer_supportMemberWise($shopid, $memberid)+GetShopReviewproduct_met_expectationsMemberWise($shopid, $memberid);

	$avg=$tot/4;

	return $avg;

}

function GetShopReview($shopid)

{

	$q = mysql_query ("SELECT count(id) FROM `shop_reviews` WHERE `shopid`='$shopid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}



function GetShopReviewMemberWise($shopid, $memberid)

{

	$q = mysql_query ("SELECT count(id) FROM `shop_reviews` WHERE `shopid`='$shopid' and memberid='$memberid'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetCatNameById($Id) {

	  $q = mysql_query ("SELECT `name` FROM `product_categories` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetParentCatId($Id) {

	  $q = mysql_query ("SELECT `parent` FROM `product_categories` WHERE `id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetChildCatId($Id) {

        $q = mysql_query ("SELECT `id` FROM `product_categories` WHERE `parent`='$Id';");

		$r=array();

		if ($q) { 

			for($i=0;$i<mysql_num_rows($q);$i++)

				$r[]=mysql_result($q,$i,"id");

			 }

		if (!$r || !$q) { return 0; }

	return $r;

}

function ProductExists ($Name) {

   $q = mysql_query ("SELECT `id` FROM `products` WHERE `name`='$Name';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   return 1;

}



function ShopExists ($Name) {

   $q = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Name';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   return 1;

}



function ChangeUserPassword ($UserName, $Password) {

   $q = mysql_query ("SELECT `id` FROM `users` WHERE `username`='$UserName';");

   if ($q) { $r = mysql_fetch_array ($q); }

   else { return 0; }

   if (!$r) { return 0; }

   $Password = md5 ($Password);

   mysql_query ("UPDATE `users` SET `password`='$Password' WHERE `username`='$UserName';");

   return 1;

}



function DeleteUser ($UserName) {

   $q = mysql_query ("SELECT `id` FROM `users` WHERE `username`='$UserName';");

   if ($q) { $r = mysql_fetch_array ($q); }

   else { return 0; }

   if (!$r) { return 0; }

   mysql_query ("DELETE FROM `users` WHERE `username`='$UserName';");

   return 1;

}



function AddUser ($UserName, $Password) {

   $q = mysql_query ("SELECT `id` FROM `users` WHERE `username`='$UserName';"); $r = 0;

   if ($q) { $r = mysql_fetch_array ($q); }

   if ($r && $q) { return 0; }

   $Password = md5 ($Password);

   mysql_query ("INSERT INTO `users`(`username`, `password`, `active`) VALUES ('$UserName', '$Password', '0');");

   return 1;

}



function ActivateUser ($UserName) {

   $q = mysql_query ("SELECT `active` FROM `users` WHERE `username`='$UserName';");

   if ($q) { $r = mysql_fetch_array ($q); }

   else { return 0; }

   if (!$r) { return 0; }

   mysql_query ("UPDATE `users` SET `active`='1' WHERE `username`='$UserName';");

   return 1;

}



function ValidateUser ($UserName, $Password) {

   $Password = md5 ($Password); $r = 0;

   $q = mysql_query ("SELECT `password` FROM `users` WHERE `username`='$UserName';");

   if ($q) { $r = mysql_fetch_array ($q); }

   else { return 0; }

   if (!$r) { return 0; }

   if ($r[0] == $Password) {

      $q = mysql_query ("SELECT `active` FROM `users` WHERE `username`='$UserName';");

	  $r = mysql_fetch_array ($q);

	  if ($r[0] == '1') {

	     return 1;

	  }

   }

   return 0;

}



function AddShop2Product ($Product, $Shop, $Price) {

   $sID = "";

   $q = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Shop';");

   $r = mysql_fetch_array ($q); $sID = $r[0];

   if (!$r || !$q) { return 0; }

   $q = mysql_query ("SELECT `shops` FROM `products` WHERE `name`='$Product';");

   $r = mysql_fetch_array ($q);

   if (!$r || !$q) { return 0; }

   $r[0] .= chr(1).$sID;

   mysql_query ("UPDATE `products` SET `shops`='$r[0]' WHERE `name`='$Product';");

   $q1 = mysql_query ("SELECT `prices` FROM `products` WHERE `name`='$Product';");

   $r1 = mysql_fetch_array ($q1);

   $r1[0] .= chr(1).$sID."->".$Price;

   mysql_query ("UPDATE `products` SET `prices`='$r1[0]' WHERE `name`='$Product';");

   return 1;

}



function ChangeShopLogo ($Shop, $Logo) {

   if (ShopExists ($Shop)) {

      mysql_query ("UPDATE `shops` SET `logo`='$Logo' WHERE `name`='$Shop';");

      return 1;

   }

   return 0;

}



function ChangeShopURL ($Shop, $URL) {

   if (ShopExists ($Shop)) {

      mysql_query ("UPDATE `shops` SET `url`='$URL' WHERE `name`='$Shop';");

      return 1;

   }

   return 0;

}



function ChangeShopContactInfo ($Shop, $Info) {

   if (ShopExists ($Shop)) {

      mysql_query ("UPDATE `shops` SET `contact_info`='$Info' WHERE `name`='$Shop';");

      return 1;

   }

   return 0;

}



function ChangeShopCustomerService ($Shop, $Info) {

   if (ShopExists ($Shop)) {

      mysql_query ("UPDATE `shops` SET `customer_service`='$Info' WHERE `name`='$Shop';");

      return 1;

   }

   return 0;

}



function AddShopOrderingMethod ($Shop, $Info) {

   $q = mysql_query ("SELECT `ordering_methods` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $r[0] .= chr(1).$Info;

   mysql_query ("UPDATE `shops` SET `ordering_methods`='$r[0]' WHERE `name`='$Shop';");

   return 1;

}



function AddShopSpecialFeature ($Shop, $Info) {

   $q = mysql_query ("SELECT `special_features` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $r[0] .= chr(1).$Info;

   mysql_query ("UPDATE `shops` SET `special_features`='$r[0]' WHERE `name`='$Shop';");

   return 1;

}



function AddShopDeliveryMethod ($Shop, $Info) {

   $q = mysql_query ("SELECT `delivery_methods` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $r[0] .= chr(1).$Info;

   mysql_query ("UPDATE `shops` SET `delivery_methods`='$r[0]' WHERE `name`='$Shop';");

   return 1;

}



function AddShopPaymentMethod ($Shop, $Info) {

   $q = mysql_query ("SELECT `payment_methods` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $r[0] .= chr(1).$Info;

   mysql_query ("UPDATE `shops` SET `payment_methods`='$r[0]' WHERE `name`='$Shop';");

   return 1;

}



function DeleteShop ($Name) {

   $q = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Name';");

   if ($q) { $r = mysql_fetch_array ($q); }

   else { return 0; }

   if (!$r) { return 0; }

   $sid = $r[0];

   $q = mysql_query ("SELECT `overviews` FROM `shops` WHERE `name`='$Name';");

   $r = mysql_fetch_array ($q);

   $ovs = explode (chr(1), $r[0]);

   foreach ($ovs as $ov) {

      mysql_query ("DELETE FROM `shop_reviews` WHERE `id`='$ov';"); }

   mysql_query ("DELETE FROM `products` WHERE `shops`='$sid';");

   mysql_query ("DELETE FROM `shops` WHERE `name`='$Name';");

   return 1;

}



function DeleteShopOrderingMethod ($Shop, $Method) {

   $q = mysql_query ("SELECT `ordering_methods` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $Method = str_replace (chr(1).$Method, "", $r[0]); $r[0] = $Method;

   $Method = str_replace ($Method.chr(1), "", $r[0]);

   mysql_query ("UPDATE `shops` SET `ordering_methods`='$Method' WHERE `name`='$Shop';");

   return 1;

}



function DeleteShopSpecialFeature ($Shop, $Method) {

   $q = mysql_query ("SELECT `special_features` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $Method = str_replace (chr(1).$Method, "", $r[0]); $r[0] = $Method;

   $Method = str_replace ($Method.chr(1), "", $r[0]);

   mysql_query ("UPDATE `shops` SET `special_features`='$Method' WHERE `name`='$Shop';");

   return 1;

}



function DeleteShopDeliveryMethod ($Shop, $Method) {

   $q = mysql_query ("SELECT `delivery_methods` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $Method = str_replace (chr(1).$Method, "", $r[0]); $r[0] = $Method;

   $Method = str_replace ($Method.chr(1), "", $r[0]);

   mysql_query ("UPDATE `shops` SET `delivery_methods`='$Method' WHERE `name`='$Shop';");

   return 1;

}



function DeleteShopPaymentMethod ($Shop, $Method) {

   $q = mysql_query ("SELECT `payment_methods` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $Method = str_replace (chr(1).$Method, "", $r[0]); $r[0] = $Method;

   $Method = str_replace ($Method.chr(1), "", $r[0]);

   mysql_query ("UPDATE `shops` SET `payment_methods`='$Method' WHERE `name`='$Shop';");

   return 1;

}



function AddShopReview ($Shop, $I) {

    $q = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Shop';");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

    $qs = "INSERT INTO `shop_reviews`(`would_shop_again`,`overall_rating`,`ease_of_find`,`selection_of_products`,";

	$qs .= "`clarity_of_product_informations`,`prices`,`look_and_design`,`shipping_charges`,`var_of_shipping_options`";

	$qs .= ",`charges_stated_before_submission`,`availability_of_products`,`order_tracking`,`ontime_delivery`,";

	$qs .= "`product_met_expectations`,`customer_support`,`comment`) VALUES (";

	$tmp = $I['would_shop_again']; $qs .= "'".$tmp."',"; $tmp = $I['overall_rating']; $qs .= "'".$tmp."',"; 

    $tmp = $I['ease_of_find']; $qs .= "'".$tmp."',"; $tmp = $I['selection_of_products']; $qs .= "'".$tmp."',"; 

    $tmp = $I['clarity_of_product_informations']; $qs .= "'".$tmp."',"; $tmp = $I['prices']; $qs .= "'".$tmp."',"; 

    $tmp = $I['look_and_design']; $qs .= "'".$tmp."',"; $tmp = $I['shipping_charges']; $qs .= "'".$tmp."',"; 

    $tmp = $I['var_of_shipping_options']; $qs .= "'".$tmp."',"; $tmp = $I['charges_stated_before_submission']; $qs .= "'".$tmp."',"; 

    $tmp = $I['availability_of_products']; $qs .= "'".$tmp."',"; $tmp = $I['order_tracking']; $qs .= "'".$tmp."',"; 

    $tmp = $I['ontime_delivery']; $qs .= "'".$tmp."',"; $tmp = $I['product_met_expectations']; $qs .= "'".$tmp."',"; 

    $tmp = $I['customer_support']; $qs .= "'".$tmp."',"; $tmp = $I['comment']; $qs .= "'".$tmp."'"; $qs .= ");";

    mysql_query ($qs);

	$q = mysql_query ("SELECT MAX(`id`) FROM `shop_reviews`;");

	$r = mysql_fetch_array ($q); $id = $r[0];

	$q = mysql_query ("SELECT `overviews` FROM `shops` WHERE `name`='$Shop';");

	$r = mysql_fetch_array ($q); $r[0] .= chr (1).$id;

	return 1;

}



function DeleteProductKeyFeature ($Product, $Info) {

   $q = mysql_query ("SELECT `key_features` FROM `products_pz ` WHERE `name`='$Product';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $Info = str_replace (chr(1).$Info, "", $r[0]); $r[0] = $Info;

   $Info = str_replace ($Info.chr(1), "", $r[0]);

   mysql_query ("UPDATE `products_pz ` SET `key_features`='$Info' WHERE `name`='$Product';");

   return 1;

}



function DeleteProductSimilar ($Product, $KKT) {

   $q = mysql_query ("SELECT `similar_products` FROM `products` WHERE `name`='$Product';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $Info = str_replace (chr(1).$KKT, "", $r[0]); $r[0] = $Info;

   $Info = str_replace ($KKT.chr(1), "", $r[0]);

   mysql_query ("UPDATE `products_pz` SET `similar_products`='$Info' WHERE `name`='$Product';");

   return 1;

}



function DeleteProductCategory ($Product, $KKT) {

   $q = mysql_query ("SELECT `categories` FROM `products_pz` WHERE `name`='$Product';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $Info = str_replace (chr(1).$KKT, "", $r[0]); $r[0] = $Info;

   $Info = str_replace ($KKT.chr(1), "", $r[0]);

   mysql_query ("UPDATE `products_pz` SET `categories`='$Info' WHERE `name`='$Product';");

   return 1;

}



function DeleteProductShop ($Product, $Info) {

   $q = mysql_query ("SELECT `shops` FROM `products_pz` WHERE `name`='$Product';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $pshops = $r[0];

   $q = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Info';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; }

   $sID = $r[0];

   $Info = str_replace (chr(1).$sID, "", $pshops); $pshops = $Info;

   $Info = str_replace ($sID.chr(1), "", $pshops);

   mysql_query ("UPDATE `products_pz` SET `shops`='$Info' WHERE `name`='$Product';");

   $q = mysql_query ("SELECT `prices` FROM `products_pz` WHERE `name`='$Product';");

   $r = mysql_fetch_array ($q); $prices = $r[0];

   $r = explode (chr(1), $prices);

   foreach ($r as $t) {

      $k = explode ("->", $t);

	  if ($k[0] == $sID) {

	     $prices = str_replace (chr(1).$t, "", $prices);

		 $prices = str_replace ($t.chr(1), "", $prices);

		 break;

	  }

   }

   mysql_query ("UPDATE `products_pz` SET `prices`='$prices' WHERE `name`='$Product';");

   return 1;

}



function AddNewShop ($Name, $Logo, $URL, $ContactInfo, $CustomerService, $OrderingMethods, $SpecialFeatures, $DeliveryMethods, $PaymentMethods) {

    $q = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Name';"); $r = 0;

	if ($q) { $r = mysql_fetch_array ($q); }

	if ($r) { return 0; }

	$q = mysql_query ("SELECT `id` FROM `shops` WHERE `url`='$URL';"); $r = 0;

	if ($q) { $r = mysql_fetch_array ($q); }

	if ($r) { return 0; }

	if (!is_array ($OrderingMethods) || !is_array ($SpecialFeatures) || !is_array ($DeliveryMethods) || !is_array ($PaymentMethods)) {

	   return 0; }

	$OrM = ""; $OrNo = count ($OrderingMethods);

	for ($i = 0; $i < $OrNo; $i++) {

	    $OrM .= $OrderingMethods[$i];

		if ($i != $OrNo - 1) { $OrM .= chr (1); };

	}

	$SpF = ""; $SpNo = count ($SpecialFeatures);

	for ($i = 0; $i < $SpNo; $i++) {

	    $SpF .= $SpecialFeatures[$i];

		if ($i != $SpNo - 1) { $SpF .= chr (1); };

	}

	$DeM = ""; $DeNo = count ($DeliveryMethods);

	for ($i = 0; $i < $DeNo; $i++) {

	    $DeM .= $DeliveryMethods[$i];

		if ($i != $DeNo - 1) { $DeM .= chr (1); };

	}

	$PeM = ""; $PeNo = count ($PaymentMethods);

	for ($i = 0; $i < $PeNo; $i++) {

	    $PeM .= $PaymentMethods[$i];

		if ($i != $PeNo - 1) { $PeM .= chr (1); };

	}

	$qs = "INSERT INTO `shops`(";

	$qs .= "`name`, `logo`, `url`, `contact_info`, `customer_service`, `ordering_methods`, ";

	$qs .= "`special_features`, `delivery_methods`, `payment_methods`) VALUES (";

	$qs .= "'$Name', '$Logo', '$URL', '$ContactInfo', '$CustomerService', '$OrM', '$SpF', ";

	$qs .= "'$DeM', '$PeM');";

	mysql_query ($qs);

	return 1;

}



function AddCategory ($Name, $Parent="") {

    $q = mysql_query ("SELECT `id` FROM `product_categories` WHERE `name`='$Name';");

	if ($q) { $r = mysql_fetch_array ($q); }

	if ($r) { return 0; }

	if (isset ($Parent) && $Parent != '') {

       $q = mysql_query ("SELECT `id` FROM `product_categories` WHERE `name`='$Parent';");

	   if ($q) { $r = mysql_fetch_array ($q); }

	   if (!$r || !$q) { return 0; }

	   $Parent = $r[0];

    }

	else {

	   $Parent = "";

	}

	mysql_query ("INSERT INTO `product_categories`(`name`,`parent`) VALUES('$Name','$Parent');");

	return 1;

}



function DeleteCategory ($Name) {

    $q = mysql_query ("SELECT `id` FROM `product_categories` WHERE `name`='$Name';");

	if ($q) { $r = mysql_fetch_array ($q); }

	if (!$r || !$q) { return 0; }

	mysql_query ("DELETE FROM `product_categories` WHERE `parent`='$r[0]';");

	mysql_query ("DELETE FROM `product_categories` WHERE `name`='$Name';");

	return 1;

}



function AddProductKeyFeature ($Product, $Info) {

    if (!ProductExists ($Product)) {

	   return 0;

	}

	$q = mysql_query ("SELECT `key_features` FROM `products_pz` WHERE `name`='$Product';");

	$r = mysql_fetch_array ($q);

	$r[0] .= chr (1).$Info;

	mysql_query ("UPDATE `products_pz` SET `key_features`='$r[0]' WHERE `name`='$Product';");

	return 1;

}



function AddProductSimilar ($Product, $Info) {

    if (!ProductExists ($Product)) {

	   return 0;

	}

	$q = mysql_query ("SELECT `similar_products` FROM `products_pz` WHERE `name`='$Product';");

	$r = mysql_fetch_array ($q);

	$prodid = GetProductIDByName ($Info);

	if (!$prodid) {

	   return 0;

	}

	$Info=$prodid;

	$r[0] .= chr (1).$Info;

	mysql_query ("UPDATE `products_pz` SET `similar_products`='$r[0]' WHERE `name`='$Product';");

	return 1;

}



function AddProductCategory ($Product, $Info) {

    if (!ProductExists ($Product)) {

	   return 0;

	}

	$q = mysql_query ("SELECT `categories` FROM `products_pz` WHERE `name`='$Product';");

	$r = mysql_fetch_array ($q);

    $q1 = mysql_query ("SELECT `id` FROM `product_categories` WHERE `name`='$Info';");

    $r1 = mysql_fetch_array ($q1);

	if (!$q1 || !$r1) { return 0; }

	$r[0] .= chr(1).$r1[0];

	mysql_query ("UPDATE `products_pz` SET `categories`='$r[0]' WHERE `name`='$Product';");

	return 1;

}



function ChangeProductPrice ($Shop, $Product, $Price) {

   if (!ProductExists ($Product) || !ShopExists ($Shop)) { return 0; }

   $q = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Shop';");

   if ($q) { $r = mysql_fetch_array ($q); }

   if (!$r || !$q) { return 0; } $sID = $r[0];

   $q = mysql_query ("SELECT `prices` FROM `products_pz` WHERE `name`='$Product';");

   $r = mysql_fetch_array ($q); $prices = $r[0];

   $r = explode (chr(1), $prices);

   foreach ($r as $t) {

      $k = explode ("->", $t);

	  if ($k[0] == $sID) {

	     $prices = str_replace ($t, $sID."->".$Price, $prices);

		 break;

	  }

   }

   mysql_query ("UPDATE `products_pz` SET `prices`='$prices' WHERE `name`='$Product';");

   return 1;

}



function ChangeProductDescription ($Product, $Info) {

   if (ProductExists ($Product) == 0) { return 0; }

   mysql_query ("UPDATE `products_pz` SET `description`='$Info' WHERE `name`='$Product';");

   return 1;

}



function ChangeProductShortDescription ($Product, $Info) {

   if (ProductExists ($Product) == 0) { return 0; }

   mysql_query ("UPDATE `products_pz` SET `short_desc`='$Info' WHERE `name`='$Product';");

   return 1;

}



function ChangeProductPicture ($Product, $Info) {

   if (ProductExists ($Product) == 0) { return 0; }

   mysql_query ("UPDATE `products_pz` SET `picture`='$Info' WHERE `name`='$Product';");

   return 1;

}



function AddProductRating ($Product, $I) {

   if (!isset ($I['rating']) || !isset ($I['recomandable']) || !isset ($I['pro']) ||

       !isset ($I['con']) || !isset ($I['review_title']) || !isset ($I['review']) ||

	   !isset ($I['ease_of_use']) || !ProductExists ($Product)) { return 0; }

   $qs = "INSERT INTO `product_reviews`(`rating`, `recomandable`, `pro`, `con`,";

   $qs .= "`review_title`,`review`,`ease_of_use`) ";

   $qs .= "VALUES ('"; $qs .= $I['rating']."','".$I['recomandable']."','";

   $qs .= $I['pro']."','".$I['con']."','".$I['review_title']."','".$I['review'];

   $qs .= $I['ease_of_use']."');";

   mysql_query ($qs);

   $q = mysql_query ("SELECT MAX(`id`) FROM `product_reviews`;");

   $r = mysql_fetch_array ($q); $revid = $r[0];

   $q = mysql_query ("SELECT `overviews` FROM `products_pz` WHERE `name`='$Product';");

   $r = mysql_fetch_array ($q); $r[0] .= chr(1).$revid;

   mysql_query ("UPDATE `products_pz` SET `overviews`='$r[0]' WHERE `name`='$Product';");

   return 1;

}



function AddNewProduct ($Name, $KeyFeatures, $SimilarProducts, $Categories, $Description, $Shop, $Price, $ShortDescription, $Picture) {

    $q = mysql_query ("SELECT `id` FROM `products_pz` WHERE `name`='$Name';"); $r = 0;

	if ($q) { $r = mysql_fetch_array ($q); }

	if ($r) { return 0; }

	if (!is_array ($KeyFeatures)) { return 0; }

	$KeyF = "";	$KeyNo = count ($KeyFeatures);

	for ($i = 0; $i < $KeyNo; $i++) {

	    $KeyF .= $KeyFeatures[$i];

		if ($i != $KeyNo - 1) { $KeyF .= chr(1); }

	}

	unset ($KeyNo); unset ($KeyFeatures);

	if (!is_array ($SimilarProducts)) { return 0; }

	$SimP = ""; $SimNo = count ($SimilarProducts);

	for ($i = 0; $i < $SimNo; $i++) {

	    $addp = GetProductIDByName ($SimilarProducts[$i]);

	    if ($addp) {

		   $SimP .= $addp;

		   if ($i != $SimNo - 1) { $SimP .= chr(1); }

		}

	}

	unset ($SimNo); unset ($SimilarProducts);

	if (!is_array ($Categories)) { return 0; }

	$Cats = ""; $CatNo = count ($Categories);

	for ($i = 0; $i < $CatNo; $i++) {

	    $q1 = mysql_query ("SELECT `id` FROM `product_categories` WHERE `name`='$Categories[$i]';");

		$r1 = mysql_fetch_array ($q1);

	    $Cats .= $r1[0];

		if ($i != $CatNo - 1) { $Cats .= chr (1); }

	}

	$q1 = mysql_query ("SELECT `id` FROM `shops` WHERE `name`='$Shop';");

	$r1 = mysql_fetch_array ($q1); $Shop = $r1[0];

	if (!$r1 || !$q1) { return 0; }

	$PriceT = $Shop."->".$Price; unset ($Price);

	$qs = "INSERT INTO `products_pz`(`name`, `key_features`, `similar_products`, `categories`, ";

	$qs .= "`description`, `shops`, `prices`, `short_desc`, `picture`) VALUES('";

	$qs .= "$Name', '$KeyF', '$SimP', '$Cats', '$Description', '$Shop',";

	$qs .= " '$PriceT', '$ShortDescription', '$Picture');";

	$q = mysql_query ($qs);

	return 1;

}

################################################################################################

### This function is used to generate page links

function page_links($totalrow,$per_page,$file,$othurl)

{

	global $page;

	// getting total page

	$tpage=(int)($totalrow/$per_page);

	$limit=15;

	if($totalrow%$per_page !=0){$tpage++;}



	if($tpage>15){$toshow=15;}else{$toshow=$tpage;}

	$linkurl="";

	// prev gif

	if($page >0)

	{

		$prev=$page-1;

		$linkurl.="<a href=$file?page=$prev&$othurl><span class='from'>Prev</span></a>&nbsp;&nbsp;";

	}

	if($page+1>$limit)

	{

		$x=floor($page/$limit);

		$y=ceil(($page+1)/$limit);

		for($i=($limit*$x);($i<($limit*$y) && $i<$tpage);$i++)

		{

			$seq=$i+1;

			if($page==$i)

			{

				$linkurl.="<b><span class='from'><font color=red size=1>$seq</font></span></b>&nbsp;";

			}

			else

			{

				$linkurl.="<a href=$file?page=$i&$othurl><span class='from'><font size=1>$seq</font></span></a> ";

			}

		}

	}

	elseif($page+1<=$limit)

	{

		for($i=0;$i<$toshow;$i++)

		{

			$seq=$i+1;

			if($page==$i)

			{

				$linkurl.="<b><span class='cata_txt'>$seq</span></b>&nbsp;";

			}

			else

			{

				$linkurl.="<a href=$file?page=$i&$othurl><span class='from'><font size=1>$seq</font></span></a> ";

			}

		}

	}

	// right gif

	if($page<$tpage-1)

	{

		$next=$page+1;

		$linkurl.="&nbsp;&nbsp;<a href=$file?page=$next&$othurl><span class='from'>Next</span></a>";

	}

	return $linkurl;

}

########################################################################################################

################################################################################################

### function used to get total page

function get_totalpage($totalrow,$per_page)

{

$tpage=(int)($totalrow/$per_page);

if($totalrow%$per_page !=0){$tpage++;}

return $tpage;

}



########################

function ShowThumbnail($imgpath,$oth="",$width="")

{

	//$imgpath=urldecode($imgpath);

	//$imgpath=str_replace(" ","+",$imgpath);

	//echo $imgpath;

	$CFG_thumbWidth=100;

	if($width==""){$width=$CFG_thumbWidth;}

	$image=aspect_ratio("$imgpath",$width);

	//print_r($image);

	return "<img src=$imgpath border=0 width=$image[w] height=$image[h] $oth>";

}



function aspect_ratio($file_name,$max_width)

{

	global $wwwroot, $root_dir;

	$length=strlen(trim($wwwroot));

	$file_name=substr($file_name,$length);

	$new_file_name="$root_dir";

	$new_file_name.="$file_name";

	$dim = @getimagesize($new_file_name);

	if($dim[0] > $max_width) 

	{

     	   $scale=$max_width/$dim[0];

		   $height=ceil($scale*$dim[1]);

           $image[w] = $max_width;

           $image[h] = $height;

    }

    else

    {

           $image[w] = $dim[0];

           $image[h] = $dim[1];

    }

    return $image;

}

///////////***********Added By Rajesh***************************

//function getPartialString($str, $max=150, $link='')

function getPartialString($str, $max=60, $link='')

	{																				

		$retVal = "";



		if ( strlen($str) > ($max+3) )

		{

			$sPos = strpos($str, " ", $max);



			if ( $sPos )

				$retVal .= substr($str, 0, $sPos )."...";

			else

				$retVal .= substr($str, 0, 60 )."...";



			if ( $link != '' )

				$retVal .= " <a href=\"".$link."\" class='mid_cata'>".'Readmore'."</a>";

		}

		else

			$retVal .= $str ;



		return $retVal;

	}



function generateShortCode()

{

        for($i=0;$i<5;$i++)

        {

        $r = rand(48,90);



        if($r > 57 && $r < 65)

                $i--;

        else

            $p .= chr($r);

        }

			return $p;

}

function Pa($Id)

{



		$cats[]=$Id; 

		   $cate="select * from product_categories where parent='$Id'";

		   $rescate=mysql_query($cate);

		   if(mysql_num_rows($rescate)>0)

		   {

		   		while($rowcate=mysql_fetch_array($rescate))

				{

					$cats[]=$rowcate['id'];

					$catesub="select * from product_categories where parent='".$rowcate['id']."'";

					$rescatesub=mysql_query($catesub);

					if(mysql_num_rows($rescatesub)>0)

					{

						while($rowcatesub=mysql_fetch_array($rescatesub))

						{

							$cats[]=$rowcatesub['id'];

							$catesubsub="select * from product_categories where parent='".$rowcatesub['id']."'";

							$rescatesubsub=mysql_query($catesubsub);

							if(mysql_num_rows($rescatesubsub)>0)

							{

								while($rowcatesubsub=mysql_fetch_array($rescatesubsub))

								{

									$cats[]=$rowcatesubsub['id'];

								}

							}

						}

					}

				}

				

				

		   }

		  // print_r($cats);

		  		 if(sizeof($cats)>0)

				{

					$categories=implode(",",$cats);

					$sqlarray=mysql_query("select * from products where categories in ($categories)");

					 

			   $total=mysql_num_rows($sqlarray);

			   echo $total;

				}

}



//***********clciks*****************************************************************************



function TotalClick($Id)

{

	$sql="select ISVISITOR from pc_clickthroughs where ISMERCHANT='$Id'";

	$res=mysql_query($sql);

	return mysql_num_rows($res);

}

function VisitorTotalClick($Id, $iid)

{

	$sql="select * from pc_clickthroughs where USER_PRODUCT_ID='$Id' and ISMERCHANT='$iid'";

	$res=mysql_query($sql);

	return mysql_num_rows($res);

}

function MemberEmail($Id)

{

	$q = mysql_query ("SELECT distinct(email) FROM `members_profile` WHERE `member_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function MerchantEmail($Id)

{

	$q = mysql_query ("SELECT email FROM `shops` WHERE `shops_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function findsubcategories($Id)

{



		$cats[]=$Id; 

		   $cate="select * from product_categories where parent='$Id'";

		   $rescate=mysql_query($cate);

		   if(mysql_num_rows($rescate)>0)

		   {

		   		while($rowcate=mysql_fetch_array($rescate))

				{

					$cats[]=$rowcate['id'];

					$catesub="select * from product_categories where parent='".$rowcate['id']."'";

					$rescatesub=mysql_query($catesub);

					if(mysql_num_rows($rescatesub)>0)

					{

						while($rowcatesub=mysql_fetch_array($rescatesub))

						{

							$cats[]=$rowcatesub['id'];

							$catesubsub="select * from product_categories where parent='".$rowcatesub['id']."'";

							$rescatesubsub=mysql_query($catesubsub);

							if(mysql_num_rows($rescatesubsub)>0)

							{

								while($rowcatesubsub=mysql_fetch_array($rescatesubsub))

								{

									$cats[]=$rowcatesubsub['id'];

								}

							}

						}

					}

				}

				

				

		   }

		  // print_r($cats);

		  		 if(sizeof($cats)>0)

				{

					$categories=implode(",",$cats);

					

					   return $categories;

				}

}



function GetBrandName($Id)

{

	$q = mysql_query ("SELECT name FROM `brand` WHERE `brand_id`='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function GetShopId($shopname)

{

	$q = mysql_query ("SELECT shops_id FROM `shops` WHERE `store_name`='$shopname'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return 0; }

	return $r[0];

}

function Getsubscriberemail($Id){

    $q = mysql_query ("SELECT email FROM news_letter WHERE id='$Id'");

    if ($q) { $r = mysql_fetch_array ($q); }

    if (!$r || !$q) { return " "; }

	return $r[0];

}


//function for generating category bread crumb
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
    
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base_url = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $breadcrumbs = array("<a href=\"$base_url$crumb\">$home</a>");
 
    $last = end(array_keys($path));
 
    foreach ($path AS $x => $crumb) {
        $title = ucwords(str_replace(array('.php', '_'), Array('', ' '), $crumb));
        if ($x != $last){
            $breadcrumbs[] = "<a href=\"$base_url$crumb\">$title</a>";
        }else{
            $breadcrumbs[] = $title;
        }
    }
 
    return implode($separator, $breadcrumbs);
}  
?>

