<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");
include("lang/Merchants.php");
if($_SESSION['CI_valid_merchant']=="" || !$_SESSION['CI_valid_merchant'])
{
header("Location:merchant_login.php");
die;
}
if(sizeof($payment_method))
 {
 $payment_m=implode(",",$payment_method);
 }
 if(sizeof($delivery_methods))
 {
 $delivery_m=implode(",",$delivery_methods);
 }
 if(sizeof($contact))
 {
 $contact_in=implode(",",$contact);
 }
 if(sizeof($customer_service))
 {
 $customer_s=implode(",",$customer_service);
 }
 if(isset($edit_merchant))
 {
 $sqlup="update shops set firstname='$firstname',lastname='$lastname',phone='$phone',mobile='$mobile',fax='$fax',website_name='$website_name',address1='$address1',city='$city',state='$state',country='$sel_cuontry',region='$region',store_name='$store_name',overviews='$overviews',tip='$tip',zipcode='$zipcode',bankacc='$bankacc',bankname='$bankname',url='$url',contact_info='$contact_in',payment_methods='$payment_m',delivery_methods='$delivery_m',customer_service='$customer_s',description='$description' where email='".$_SESSION['CI_valid_merchant']."'";
 $resup=mysql_query($sqlup);
 
header("location:merchant_info.php");
 }
 ?>
 <?
$sql="select * from shops where email='".$_SESSION['CI_valid_merchant']."'";
$res=mysql_query($sql);

while($rs=mysql_fetch_array($res))
{

$adressemail=$rs['email'];
$firstname=$rs['firstname'];
$lastname=$rs['lastname'];
$phone=$rs['phone'];
$mobile=$rs['mobile'];
$fax=$rs['fax'];
$website_name=$rs['website_name'];
$address1=$rs['address1'];
$email=$rs['address2'];
$city=$rs['city'];
$state=$rs['state'];
$country=$rs['country'];
$region=$rs['region'];
$store_name=$rs['store_name'];
$overviews=$rs['overviews'];
$tip=$rs['tip'];
$zipcode=$rs['zipcode'];
$bankacc=$rs['bankacc'];
$bankname=$rs['bankname'];
$url=$rs['url'];
$zipcode=$rs['zipcode'];
$contact_info=$rs['contact_info'];
$payment_methods=$rs['payment_methods'];
$delivery_methods=$rs['delivery_methods'];
$customer_service=$rs['customer_service'];
$description=$rs['description'];
}
?>
<?
 $contact_inf=explode(",",$contact_info);
 $payment=explode(",",$payment_methods);
 $delivery=explode(",",$delivery_methods);
 $additional_service=explode(",",$customer_service);
?>
<script language="javascript" type="text/javascript">
function CheckValidation()
{
if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(window.document.myfrm.adressemail.value))
{
	alert("please enter your Email Address!");
	window.document.myfrm.emadressemailail.focus();
	return false;

} else if(document.myfrm.firstname.value=="")
{
alert("Please Enter Your First Name!");
document.myfrm.firstname.focus();
return false;
} else if(document.myfrm.lastname.value=="")
{
alert("Please Enter Your Last Name!");
document.myfrm.lastname.focus();
return false;
} else if(document.myfrm.phone.value=="")
{
alert("Please Enter Your Phone No.!");
document.myfrm.phone.focus();
return false;
} else if(isNaN(document.myfrm.phone.value))
{
alert("Phone No. should be a Number!");
document.myfrm.phone.focus();
return false;
} else if(document.myfrm.mobile.value=="")
{
alert("Please Enter Your Mobile No.!");
document.myfrm.mobile.focus();
return false;
} else if(isNaN(document.myfrm.mobile.value))
{
alert("Mobile No. should be a Number!");
document.myfrm.mobile.focus();
return false;
} else if(document.myfrm.fax.value=="")
{
alert("Please Enter Your Fax No.!");
document.myfrm.fax.focus();
return false;
} else if(isNaN(document.myfrm.fax.value))
{
alert("Fax No. should be a Number!");
document.myfrm.fax.focus();
return false;
} else if(document.myfrm.address1.value=="")
{
alert("Please Enter Your Address!");
document.myfrm.address1.focus();
return false;
} else if(document.myfrm.city.value=="")
{
alert("Please Enter Your City!");
document.myfrm.city.focus();
return false;
} else if(document.myfrm.state.value=="")
{
alert("Please Enter Your State!");
document.myfrm.state.focus();
return false;
} else if(document.myfrm.sel_cuontry.value=="")
{
alert("Please Enter Your Country!");
document.myfrm.sel_cuontry.focus();
return false;
} else if(document.myfrm.region.value=="")
{
alert("Please Enter Your Region!");
document.myfrm.region.focus();
return false;
} else if(document.myfrm.store_name.value=="")
{
alert("Please Enter Your Store Name!");
document.myfrm.store_name.focus();
return false;
} else if(document.myfrm.overviews.value=="")
{
alert("Please Enter Your Overviews!");
document.myfrm.overviews.focus();
return false;
} else if(document.myfrm.tip.value=="")
{
alert("Please Enter Your Tip persoana juridica!");
document.myfrm.tip.focus();
return false;
} else if(document.myfrm.zipcode.value=="")
{
alert("Please Enter Your Cod unic de inregistrare(CNP pentru PFA)!");
document.myfrm.zipcode.focus();
return false;
} else if(isNaN(document.myfrm.zipcode.value))
{
alert("Please Enter Your Cod unic de inregistrare(CNP pentru PFA)!");
document.myfrm.zipcode.focus();
return false;
} else if(document.myfrm.bankacc.value=="")
{
alert("Please Enter Your Bank Account!");
document.myfrm.bankacc.focus();
return false;
} else if(document.myfrm.bankname.value=="")
{
alert("Please Enter Your Bank Name!");
document.myfrm.bankname.focus();
return false;
} else if(document.myfrm.url.value=="")
{
alert("Please Enter URL!");
document.myfrm.url.focus();
return false;
} else if(document.myfrm.description.value=="")
{
alert("Please Enter Your Description!");
document.myfrm.description.focus();
return false;
}



}
</script>
 

        <!-- End header -->
       <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                    
                       
						 
                        <div class="row"><? include("merchant_left_link.php"); ?>
                            <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9"><div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Edit <span>Profile</span></h1>
                        </div>
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-user"></i>Personal Information</h3>
                                    <hr>
                                    <form name="myfrm" action="" method="post" enctype="multipart/form-data" onsubmit="javascript: return CheckValidation();" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputFirstName" class="col-sm-3 control-label"><?=$lang['EAddress']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="adressemail" readonly="readonly" value="<?=$adressemail;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-sm-3 control-label"><?=$lang['FName']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                               <input name="firstname" type="text" id="firstname" value="<?=$firstname;?>" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputPhone" class="col-sm-3 control-label"><?=$lang['LName']?></label>
                                            <div class="col-sm-9">
                                                <input name="lastname" type="text" id="lastname" value="<?=$lastname;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAdress1" class="col-sm-3 control-label"><?=$lang['Phno']?> <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="phone" type="text" id="phone" value="<?=$phone;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCity" class="col-sm-3 control-label"><?=$lang['MbNo']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="mobile" type="text" id="mobile" value="<?=$mobile;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Fax']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="fax" type="text" id="fax" value="<?=$fax;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['WPage']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="website_name" type="text" id="website_name" value="<?=$website_name;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Address']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="address1" type="text" id="address1" value="<?=$address1;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['City']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="city" type="text" id="city" value="<?=$city;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['State']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="state" type="text" id="state" value="<?=$state;?>" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['Country']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <select name="sel_cuontry" id="sel_cuontry"  class="form-control"> 
                                                  <option value=""><---Select One---></option>
                                                  <option value="Afghanistan" <?php if($country=="Afghanistan") echo "selected"; ?> class="blueinput">Afghanistan</option>
                                                  <option value="Albania" <?php if($country=="Albania") echo "selected"; ?> >Albania</option>
                                                  <option value="Algeria" <?php if($country=="Algeria") echo "selected"; ?>>Algeria</option>
                                                  <option value="American Samoa" <?php if($country=="American Samoa") echo "selected"; ?>>American Samoa</option>
                                                  <option value="Andorra" <?php if($country=="Andorra") echo "selected"; ?>>Andorra</option>
                                                  <option value="Angola" <?php if($country=="Angola") echo "selected"; ?>>Angola</option>
                                                  <option value="Anguilla" <?php if($country=="Anguilla") echo "selected"; ?>>Anguilla</option>
                                                  <option value="Antarctica" <?php if($country=="Antarctica") echo "selected"; ?>>Antarctica</option>
                                                  <option value="Antigua and Barbuda" <?php if($country=="Antigua and Barbuda") echo "selected"; ?>>Antigua and Barbuda</option>
                                                  <option value="Argentina" <?php if($country=="Argentina") echo "selected"; ?>>Argentina</option>
                                                  <option value="Armenia" <?php if($country=="Armenia") echo "selected"; ?>>Armenia</option>
                                                  <option value="Aruba" <?php if($country=="Aruba") echo "selected"; ?>>Aruba</option>
                                                  <option value="Australia" <?php if($country=="Australia") echo "selected"; ?> >Australia</option>
                                                  <option value="Austria" <?php if($country=="Austria") echo "selected"; ?>>Austria</option>
                                                  <option value="Azerbaijan" <?php if($country=="Azerbaijan") echo "selected"; ?>>Azerbaijan</option>
                                                  <option value="Bahamas" <?php if($country=="Bahamas") echo "selected"; ?>>Bahamas</option>
                                                  <option value="Bahrain" <?php if($country=="Bahrain") echo "selected"; ?>>Bahrain</option>
                                                  <option value="Bangladesh" <?php if($country=="Bangladesh") echo "selected"; ?>>Bangladesh</option>
                                                  <option value="Barbados" <?php if($country=="Barbados") echo "selected"; ?>>Barbados</option>
                                                  <option value="Belarus" <?php if($country=="Belarus") echo "selected"; ?>>Belarus</option>
                                                  <option value="Belgium" <?php if($country=="Belgium") echo "selected"; ?>>Belgium</option>
                                                  <option value="Belize" <?php if($country=="Belize") echo "selected"; ?>>Belize</option>
                                                  <option value="Benin" <?php if($country=="Benin") echo "selected"; ?>>Benin</option>
                                                  <option value="Bermuda" <?php if($country=="Bermuda") echo "selected"; ?>>Bermuda</option>
                                                  <option value="Bhutan" <?php if($country=="Bhutan") echo "selected"; ?>>Bhutan</option>
                                                  <option value="Bolivia" <?php if($country=="Bolivia") echo "selected"; ?>>Bolivia</option>
                                                  <option value="Bosnia and Herzegowina" <?php if($country=="Bosnia and Herzegowina") echo "selected"; ?>>Bosnia and Herzegowina</option>
                                                  <option value="Botswana" <?php if($country=="Botswana") echo "selected"; ?>>Botswana</option>
                                                  <option value="Bouvet Island" <?php if($country=="Bouvet Island") echo "selected"; ?>>Bouvet Island</option>
                                                  <option value="Brazil" <?php if($country=="Brazil") echo "selected"; ?>>Brazil</option>
                                                  <option value="British Indian Ocean" <?php if($country=="British Indian Ocean") echo "selected"; ?>>British Indian Ocean Territory</option>
                                                  <option value="Brunei Darussalam" <?php if($country=="Brunei Darussalam") echo "selected"; ?>>Brunei Darussalam</option>
                                                  <option value="Bulgaria" <?php if($country=="Bulgaria") echo "selected"; ?>>Bulgaria</option>
                                                  <option value="Burkina Faso" <?php if($country=="Burkina Faso") echo "selected"; ?>>Burkina Faso</option>
                                                  <option value="Burundi" <?php if($country=="Burundi") echo "selected"; ?>>Burundi</option>
                                                  <option value="Cambodia" <?php if($country=="Cambodia") echo "selected"; ?>>Cambodia</option>
                                                  <option value="Cameroon" <?php if($country=="Cameroon") echo "selected"; ?>>Cameroon</option>
                                                  <option value="Canada" <?php if($country=="Canada") echo "selected"; ?>>Canada</option>
                                                  <option value="Cape Verde" <?php if($country=="Cape Verde") echo "selected"; ?>>Cape Verde</option>
                                                  <option value="Cayman Islands" <?php if($country=="Cayman Islands") echo "selected"; ?>>Cayman Islands</option>
                                                  <option value="Central African Republic" <?php if($country=="Central African Republic") echo "selected"; ?>>Central African Republic</option>
                                                  <option value="Chad" <?php if($country=="Chad") echo "selected"; ?>>Chad</option>
                                                  <option value="Chile" <?php if($country=="Chile") echo "selected"; ?>>Chile</option>
                                                  <option value="China" <?php if($country=="China") echo "selected"; ?>>China</option>
                                                  <option value="Christmas Island" <?php if($country=="Christmas Island") echo "selected"; ?>>Christmas Island</option>
                                                  <option value="Cocoa (Keeling) Islands" <?php if($country=="Cocoa (Keeling) Islands") echo "selected"; ?>>Cocoa (Keeling) Islands</option>
                                                  <option value="Colombia" <?php if($country=="Colombia") echo "selected"; ?>>Colombia</option>
                                                  <option value="Comoros" <?php if($country=="Comoros") echo "selected"; ?>>Comoros</option>
                                                  <option value="Congo" <?php if($country=="Congo") echo "selected"; ?>>Congo</option>
                                                  <option value="Cook Islands" <?php if($country=="Cook Islands") echo "selected"; ?>>Cook Islands</option>
                                                  <option value="Costa Rica" <?php if($country=="Costa Rica") echo "selected"; ?>>Costa Rica</option>
                                                  <option value="Cote Divoire" <?php if($country=="Cote Divoire") echo "selected"; ?>>Cote Divoire</option>
                                                  <option value="Croatia (Hrvatska)" <?php if($country=="Croatia (Hrvatska)") echo "selected"; ?>>Croatia (Hrvatska)</option>
                                                  <option value="Cuba" <?php if($country=="Cuba") echo "selected"; ?>>Cuba</option>
                                                  <option value="Cyprus" <?php if($country=="Cyprus") echo "selected"; ?>>Cyprus</option>
                                                  <option value="Czech Republic" <?php if($country=="Czech Republic") echo "selected"; ?>>Czech Republic</option>
                                                  <option value="Denmark" <?php if($country=="Denmark") echo "selected"; ?>>Denmark</option>
                                                  <option value="Djibouti" <?php if($country=="Djibouti") echo "selected"; ?>>Djibouti</option>
                                                  <option value="DoDDs Schools" <?php if($country=="DoDDs Schools") echo "selected"; ?>>DoDDs Schools</option>
                                                  <option value="Dominica" <?php if($country=="Dominica") echo "selected"; ?>>Dominica</option>
                                                  <option value="Dominican Republic" <?php if($country=="Dominican Republic") echo "selected"; ?>>Dominican Republic</option>
                                                  <option value="East Timor" <?php if($country=="East Timor") echo "selected"; ?>>East Timor</option>
                                                  <option value="Ecuador" <?php if($country=="Ecuador") echo "selected"; ?>>Ecuador</option>
                                                  <option value="Egypt" <?php if($country=="Egypt") echo "selected"; ?>>Egypt</option>
                                                  <option value="El Salvador" <?php if($country=="El Salvador") echo "selected"; ?>>El Salvador</option>
                                                  <option value="Equatorial Guinea" <?php if($country=="Equatorial Guinea") echo "selected"; ?>>Equatorial Guinea</option>
                                                  <option value="Eritrea" <?php if($country=="Eritrea") echo "selected"; ?>>Eritrea</option>
                                                  <option value="EE" <?php if($country=="EE") echo "selected"; ?>>Estonia</option>
                                                  <option value="Estonia" <?php if($country=="Estonia") echo "selected"; ?>>Ethiopia</option>
                                                  <option value="Falkland Islands (Malvinas)" <?php if($country=="Falkland Islands (Malvinas)") echo "selected"; ?>>Falkland Islands 
                                                  (Malvinas)</option>
                                                  <option value="Faroe Islands" <?php if($country=="Faroe Islands") echo "selected"; ?>>Faroe Islands</option>
                                                  <option value="Fiji" <?php if($country=="Fiji") echo "selected"; ?>>Fiji</option>
                                                  <option value="Finland" <?php if($country=="Finland") echo "selected"; ?>>Finland</option>
                                                  <option value="France" <?php if($country=="France") echo "selected"; ?>>France</option>
                                                  <option value="Gabon" <?php if($country=="Gabon") echo "selected"; ?>>Gabon</option>
                                                  <option value="Gambia" <?php if($country=="Gambia") echo "selected"; ?>>Gambia</option>
                                                  <option value="Georgia" <?php if($country=="Georgia") echo "selected"; ?>>Georgia</option>
                                                  <option value="Germany" <?php if($country=="Germany") echo "selected"; ?>>Germany</option>
                                                  <option value="Ghana" <?php if($country=="Ghana") echo "selected"; ?>>Ghana</option>
                                                  <option value="Gibraltar" <?php if($country=="Gibraltar") echo "selected"; ?>>Gibraltar</option>
                                                  <option value="Greece" <?php if($country=="Greece") echo "selected"; ?>>Greece</option>
                                                  <option value="Greenland" <?php if($country=="Greenland") echo "selected"; ?>>Greenland</option>
                                                  <option value="Grenada" <?php if($country=="Grenada") echo "selected"; ?>>Grenada</option>
                                                  <option value="Guam" <?php if($country=="Guam") echo "selected"; ?>>Guam</option>
                                                  <option value="Guatemala" <?php if($country=="Guatemala") echo "selected"; ?>>Guatemala</option>
                                                  <option value="Guinea" <?php if($country=="Guinea") echo "selected"; ?>>Guinea</option>
                                                  <option value="Guinea-Bissau" <?php if($country=="Guinea-Bissau") echo "selected"; ?>>Guinea-Bissau</option>
                                                  <option value="Guyana" <?php if($country=="Guyana") echo "selected"; ?>>Guyana</option>
                                                  <option value="Haiti" <?php if($country=="Haiti") echo "selected"; ?>>Haiti</option>
                                                  <option value="Heard and Mc Donald Islands" <?php if($country=="Heard and Mc Donald Islands") echo "selected"; ?>>Heard and Mc Donald 
                                                  Islands</option>
                                                  <option value="Honduras" <?php if($country=="Honduras") echo "selected"; ?>>Honduras</option>
                                                  <option value="Hong Kong" <?php if($country=="Hong Kong") echo "selected"; ?>>Hong Kong</option>
                                                  <option value="Hungary" <?php if($country=="Hungary") echo "selected"; ?>>Hungary</option>
                                                  <option value="Iceland" <?php if($country=="Iceland") echo "selected"; ?>>Iceland</option>
                                                  <option value="India" <?php if($country=="India") echo "selected"; ?>>India</option>
                                                  <option value="Indonesia" <?php if($country=="Indonesia") echo "selected"; ?>>Indonesia</option>
                                                  <option value="Iran (Islamic Republic of)" <?php if($country=="Iran (Islamic Republic of)") echo "selected"; ?>>Iran (Islamic Republic 
                                                  of)</option>
                                                  <option value="Iraq" <?php if($country=="Iraq") echo "selected"; ?>>Iraq</option>
                                                  <option value="Ireland" <?php if($country=="Ireland") echo "selected"; ?>>Ireland</option>
                                                  <option value="Israel" <?php if($country=="Israel") echo "selected"; ?>>Israel</option>
                                                  <option value="Italy" <?php if($country=="Italy") echo "selected"; ?>>Italy</option>
                                                  <option value="Jamaica" <?php if($country=="Jamaica") echo "selected"; ?>>Jamaica</option>
                                                  <option value="Japan" <?php if($country=="Japan") echo "selected"; ?>>Japan</option>
                                                  <option value="Jordan" <?php if($country=="Jordan") echo "selected"; ?>>Jordan</option>
                                                  <option value="Kazakhstan" <?php if($country=="Kazakhstan") echo "selected"; ?>>Kazakhstan</option>
                                                  <option value="Kenya" <?php if($country=="Kenya") echo "selected"; ?>>Kenya</option>
                                                  <option value="Kiribati" <?php if($country=="Kiribati") echo "selected"; ?>>Kiribati</option>
                                                  <option value="Korea, Democratic Peoples Republic of" <?php if($country=="Korea, Democratic Peoples Republic of") echo "selected"; ?>>Korea, 
                                                  Democratic Peoples Republic of</option>
                                                  <option value="Korea, Republic of" <?php if($country=="Korea, Republic of") echo "selected"; ?>>Korea, Republic of</option>
                                                  <option value="Kuwait" <?php if($country=="Kuwait") echo "selected"; ?>>Kuwait</option>
                                                  <option value="Kyrgyzstan" <?php if($country=="Kyrgyzstan") echo "selected"; ?>>Kyrgyzstan</option>
                                                  <option value="Lao Peoples Democratic Republic" <?php if($country=="Lao Peoples Democratic Republic") echo "selected"; ?>>Lao Peoples 
                                                  Democratic Republic</option>
                                                  <option value="Latvia" <?php if($country=="Latvia") echo "selected"; ?>>Latvia</option>
                                                  <option value="Lebanon" <?php if($country=="Lebanon") echo "selected"; ?>>Lebanon</option>
                                                  <option value="Lesotho" <?php if($country=="Lesotho") echo "selected"; ?>>Lesotho</option>
                                                  <option value="Liberia" <?php if($country=="Liberia") echo "selected"; ?>>Liberia</option>
                                                  <option value="Libyan Arab Jamahiriya" <?php if($country=="Libyan Arab Jamahiriya") echo "selected"; ?>>Libyan Arab Jamahiriya</option>
                                                  <option value="Liechtenstein" <?php if($country=="Liechtenstein") echo "selected"; ?>>Liechtenstein</option>
                                                  <option value="Lithuania" <?php if($country=="Lithuania") echo "selected"; ?>>Lithuania</option>
                                                  <option value="Luxembourg" <?php if($country=="Luxembourg") echo "selected"; ?>>Luxembourg</option>
                                                  <option value="Macau" <?php if($country=="Macau") echo "selected"; ?>>Macau</option>
                                                  <option value="Macedonia, The Former Yugoslav Republic of" <?php if($country=="Macedonia, The Former Yugoslav Republic of") echo "selected"; ?>>Macedonia, 
                                                  The Former Yugoslav Republic of</option>
                                                  <option value="Madagascar" <?php if($country=="Madagascar") echo "selected"; ?>>Madagascar</option>
                                                  <option value="Malawi" <?php if($country=="Malawi") echo "selected"; ?>>Malawi</option>
                                                  <option value="Malaysia" <?php if($country=="Malaysia") echo "selected"; ?>>Malaysia</option>
                                                  <option value="Maldives" <?php if($country=="Maldives") echo "selected"; ?>>Maldives</option>
                                                  <option value="Mali" <?php if($country=="Mali") echo "selected"; ?>>Mali</option>
                                                  <option value="Malta" <?php if($country=="Malta") echo "selected"; ?>>Malta</option>
                                                  <option value="Marshall Islands" <?php if($country=="Marshall Islands") echo "selected"; ?>>Marshall Islands</option>
                                                  <option value="Mauritania" <?php if($country=="Mauritania") echo "selected"; ?>>Mauritania</option>
                                                  <option value="Mauritius" <?php if($country=="Mauritius") echo "selected"; ?>>Mauritius</option>
                                                  <option value="Mexico" <?php if($country=="Mexico") echo "selected"; ?>>Mexico</option>
                                                  <option value="Micronesia, Federated States of" <?php if($country=="Micronesia, Federated States of") echo "selected"; ?>>Micronesia, 
                                                  Federated States of</option>
                                                  <option value="Moldova, Republic of" <?php if($country=="Moldova, Republic of") echo "selected"; ?>>Moldova, Republic of</option>
                                                  <option value="Monaco" <?php if($country=="Monaco") echo "selected"; ?>>Monaco</option>
                                                  <option value="Mongolia" <?php if($country=="Mongolia") echo "selected"; ?>>Mongolia</option>
                                                  <option value="Montserrat" <?php if($country=="Montserrat") echo "selected"; ?>>Montserrat</option>
                                                  <option value="Morocco" <?php if($country=="Morocco") echo "selected"; ?>>Morocco</option>
                                                  <option value="Mozambique" <?php if($country=="Mozambique") echo "selected"; ?>>Mozambique</option>
                                                  <option value="Myanmar" <?php if($country=="Myanmar") echo "selected"; ?>>Myanmar</option>
                                                  <option value="Namibia" <?php if($country=="Namibia") echo "selected"; ?>>Namibia</option>
                                                  <option value="Nauru" <?php if($country=="Nauru") echo "selected"; ?>>Nauru</option>
                                                  <option value="Nepal" <?php if($country=="Nepal") echo "selected"; ?>>Nepal</option>
                                                  <option value="Netherlands" <?php if($country=="Netherlands") echo "selected"; ?>>Netherlands</option>
                                                  <option value="Netherlands Antilles" <?php if($country=="Netherlands Antilles") echo "selected"; ?>>Netherlands Antilles</option>
                                                  <option value="New Zealand" <?php if($country=="New Zealand") echo "selected"; ?>>New Zealand</option>
                                                  <option value="Nicaragua" <?php if($country=="Nicaragua") echo "selected"; ?>>Nicaragua</option>
                                                  <option value="Niger" <?php if($country=="Niger") echo "selected"; ?>>Niger</option>
                                                  <option value="Nigeria" <?php if($country=="Nigeria") echo "selected"; ?>>Nigeria</option>
                                                  <option value="Niue" <?php if($country=="Niue") echo "selected"; ?>>Niue</option>
                                                  <option value="Norfolk Island" <?php if($country=="Norfolk Island") echo "selected"; ?>>Norfolk Island</option>

                                                  <option value="Northern Mariana Islands" <?php if($country=="Northern Mariana Islands") echo "selected"; ?>>Northern Mariana Islands</option>
                                                  <option value="Norway" <?php if($country=="Norway") echo "selected"; ?>>Norway</option>
                                                  <option value="Oman" <?php if($country=="Oman") echo "selected"; ?>>Oman</option>
                                                  <option value="Pakistan" <?php if($country=="Pakistan") echo "selected"; ?>>Pakistan</option>
                                                  <option value="Palau" <?php if($country=="Palau") echo "selected"; ?>>Palau</option>
                                                  <option value="Panama" <?php if($country=="Panama") echo "selected"; ?>>Panama</option>
                                                  <option value="Papua New Guinea" <?php if($country=="Papua New Guinea") echo "selected"; ?>>Papua New Guinea</option>
                                                  <option value="Paraguay" <?php if($country=="Paraguay") echo "selected"; ?>>Paraguay</option>
                                                  <option value="Peru" <?php if($country=="Peru") echo "selected"; ?>>Peru</option>
                                                  <option value="Philippines" <?php if($country=="Philippines") echo "selected"; ?>>Philippines</option>
                                                  <option value="Pitcairn" <?php if($country=="Pitcairn") echo "selected"; ?>>Pitcairn</option>
                                                  <option value="Poland" <?php if($country=="Poland") echo "selected"; ?>>Poland</option>
                                                  <option value="Portugal" <?php if($country=="Portugal") echo "selected"; ?>>Portugal</option>
                                                  <option value="Puerto Rico" <?php if($country=="Puerto Rico") echo "selected"; ?>>Puerto Rico</option>
                                                  <option value="Qatar" <?php if($country=="Qatar") echo "selected"; ?>>Qatar</option>
                                                  <option value="Romania" <?php if($country=="Romania") echo "selected"; ?>>Romania</option>
                                                  <option value="Russian Federation" <?php if($country=="Russian Federation") echo "selected"; ?>>Russian Federation</option>
                                                  <option value="Rwanda" <?php if($country=="Rwanda") echo "selected"; ?>>Rwanda</option>
                                                  <option value="Saint Kitts and Nevis" <?php if($country=="Saint Kitts and Nevis") echo "selected"; ?>>Saint Kitts and Nevis</option>
                                                  <option value="Saint Lucia" <?php if($country=="Saint Lucia") echo "selected"; ?>>Saint Lucia</option>
                                                  <option value="Saint Vincent and the Grenadines" <?php if($country=="Saint Vincent and the Grenadines") echo "selected"; ?>>Saint Vincent 
                                                  and the Grenadines</option>
                                                  <option value="Samoa" <?php if($country=="Samoa") echo "selected"; ?>>Samoa</option>
                                                  <option value="San Marino" <?php if($country=="San Marino") echo "selected"; ?>>San Marino</option>
                                                  <option value="Sao Tome and Principe" <?php if($country=="Sao Tome and Principe") echo "selected"; ?>>Sao Tome and Principe</option>
                                                  <option value="Saudi Arabia" <?php if($country=="Saudi Arabia") echo "selected"; ?>>Saudi Arabia</option>
                                                  <option value="Senegal" <?php if($country=="Senegal") echo "selected"; ?>>Senegal</option>
                                                  <option value="Seychelles" <?php if($country=="Seychelles") echo "selected"; ?>>Seychelles</option>
                                                  <option value="Sierra Leone" <?php if($country=="Sierra Leone") echo "selected"; ?>>Sierra Leone</option>
                                                  <option value="Singapore" <?php if($country=="Singapore") echo "selected"; ?>>Singapore</option>
                                                  <option value="Slovakia (Slovak Republic)" <?php if($country=="Slovakia (Slovak Republic)") echo "selected"; ?>>Slovakia (Slovak 
                                                  Republic)</option>
                                                  <option value="Slovenia" <?php if($country=="Slovenia") echo "selected"; ?>>Slovenia</option>
                                                  <option value="Solomon Islands" <?php if($country=="Solomon Islands") echo "selected"; ?>>Solomon Islands</option>
                                                  <option value="Somalia" <?php if($country=="Somalia") echo "selected"; ?>>Somalia</option>
                                                  <option value="South Africa" <?php if($country=="South Africa") echo "selected"; ?>>South Africa</option>
                                                  <option value="South Georgia and the South Sandwich Islands" <?php if($country=="South Georgia and the South Sandwich Islands") echo "selected"; ?>>South 
                                                  Georgia and the South Sandwich Islands</option>
                                                  <option value="Spain" <?php if($country=="Spain") echo "selected"; ?>>Spain</option>
                                                  <option value="Sri Lanka" <?php if($country=="Sri Lanka") echo "selected"; ?>>Sri Lanka</option>
                                                  <option value="St. Helena" <?php if($country=="St. Helena") echo "selected"; ?>>St. Helena</option>
                                                  <option value="Sudan" <?php if($country=="Sudan") echo "selected"; ?>>Sudan</option>
                                                  <option value="Suriname" <?php if($country=="Suriname") echo "selected"; ?>>Suriname</option>
                                                  <option value="Svalbard and Jan Mayen Islands" <?php if($country=="Svalbard and Jan Mayen Islands") echo "selected"; ?>>Svalbard and 
                                                  Jan Mayen Islands</option>
                                                  <option value="Swaziland" <?php if($country=="Swaziland") echo "selected"; ?>>Swaziland</option>
                                                  <option value="Sweden" <?php if($country=="Sweden") echo "selected"; ?>>Sweden</option>
                                                  <option value="Switzerland" <?php if($country=="Switzerland") echo "selected"; ?>>Switzerland</option>
                                                  <option value="Syrian ArabRepublic" <?php if($country=="Syrian ArabRepublic") echo "selected"; ?>>Syrian ArabRepublic</option>
                                                  <option value="Taiwan" <?php if($country=="Taiwan") echo "selected"; ?>>Taiwan</option>
                                                  <option value="Tajikistan" <?php if($country=="Tajikistan") echo "selected"; ?>>Tajikistan</option>
                                                  <option value="Tanzania, United Republic of" <?php if($country=="Tanzania, United Republic of") echo "selected"; ?>>Tanzania, United 
                                                  Republic of</option>
                                                  <option value="Thailand" <?php if($country=="Thailand") echo "selected"; ?>>Thailand</option>
                                                  <option value="Togo" <?php if($country=="Togo") echo "selected"; ?>>Togo</option>
                                                  <option value="Tokelau" <?php if($country=="Tokelau") echo "selected"; ?>>Tokelau</option>
                                                  <option value="Tonga" <?php if($country=="Tonga") echo "selected"; ?>>Tonga</option>
                                                  <option value="Trinidad and Tobago" <?php if($country=="Trinidad and Tobago") echo "selected"; ?>>Trinidad and Tobago</option>
                                                  <option value="Tunisia" <?php if($country=="Tunisia") echo "selected"; ?>>Tunisia</option>
                                                  <option value="Turkey" <?php if($country=="Turkey") echo "selected"; ?>>Turkey</option>
                                                  <option value="Turkmenistan" <?php if($country=="Turkmenistan") echo "selected"; ?>>Turkmenistan</option>
                                                  <option value="Turks and Caicos Islands" <?php if($country=="Turks and Caicos Islands") echo "selected"; ?>>Turks and Caicos Islands</option>
                                                  <option value="Tuvalu" <?php if($country=="Tuvalu") echo "selected"; ?>>Tuvalu</option>
                                                  <option value="Uganda" <?php if($country=="Uganda") echo "selected"; ?>>Uganda</option>
                                                  <option value="Ukraine" <?php if($country=="Ukraine") echo "selected"; ?>>Ukraine</option>
                                                  <option value="United ArabEmirates" <?php if($country=="United ArabEmirates") echo "selected"; ?>>United ArabEmirates</option>
                                                  <option value="United Kingdom" <?php if($country=="United Kingdom") echo "selected"; ?>>United Kingdom</option>
                                                  <option value="United States" <?php if($country=="United States") echo "selected"; ?>>United States</option>
                                                  <option value="United States Minor Outlying Islands" <?php if($country=="United States Minor Outlying Islands") echo "selected"; ?>>United 
                                                  States Minor Outlying Islands</option>
                                                  <option value="Uruguay" <?php if($country=="Uruguay") echo "selected"; ?>>Uruguay</option>
                                                  <option value="Uzbekistan" <?php if($country=="Uzbekistan") echo "selected"; ?>>Uzbekistan</option>
                                                  <option value="Vanuatu" <?php if($country=="Vanuatu") echo "selected"; ?>>Vanuatu</option>
                                                  <option value="Vatican City State(Holy See)" <?php if($country=="Vatican City State(Holy See)") echo "selected"; ?>>Vatican City State(Holy 
                                                  See)</option>
                                                  <option value="Venezuela" <?php if($country=="Venezuela") echo "selected"; ?>>Venezuela</option>
                                                  <option value="Viet Nam" <?php if($country=="Viet Nam") echo "selected"; ?>>Viet Nam</option>
                                                  <option value="Virgin Islands (British)" <?php if($country=="Virgin Islands (British)") echo "selected"; ?>>Virgin Islands (British)</option>
                                                  <option value="Virgin Islands (U.S.)" <?php if($country=="Virgin Islands (U.S.)") echo "selected"; ?>>Virgin Islands (U.S.)</option>
                                                  <option value="Western Sahara" <?php if($country=="Western Sahara") echo "selected"; ?>>Western Sahara</option>
                                                  <option value="Yeman" <?php if($country=="Yeman") echo "selected"; ?>>Yeman</option>
                                                  <option value="Yugoslavia" <?php if($country=="Yugoslavia") echo "selected"; ?>s>Yugoslavia</option>
                                                  <option value="Zaire" <?php if($country=="Zaire") echo "selected"; ?>>Zaire</option>
                                                  <option value="Zambia" <?php if($country=="Zambia") echo "selected"; ?>>Zambia</option>
                                                  <option value="Zimbabwe" <?php if($country=="Zimbabwe") echo "selected"; ?>>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Region']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="region" type="text" id="region" value="<?=$region;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['CName']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="store_name" type="text" id="store_name" value="<?=$store_name;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Overviews']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea name="overviews" cols="40" rows="5" id="overviews" class="form-control"><?=$overviews;?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Tpersoana']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="tip" type="text" id="tip" value="<?=$tip;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['inregistrares']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="zipcode" type="text" id="zipcode" value="<?=$zipcode;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Baccount']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="bankacc" type="text" id="bankacc" value="<?=$bankacc;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Bname']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="bankname" type="text" id="bankname" value="<?=$bankname;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['URL']?></label>
                                            <div class="col-sm-9">
                                                <input name="url" type="text" id="url" value="<?=$url?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['CInfo']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <?php	 	 
												$sqlarray="select * from contact_table where active=1";
												   $resarray=mysql_query($sqlarray)or print mysql_error();
												   for($s=0;$s<mysql_num_rows($resarray);$s++)
												   {
														$catIdarray[$s]=mysql_result($resarray,$s,"contact_id");
														$catnamearray[$s]=mysql_result($resarray,$s,"contact_time");
												   }
												?>
									
												<div class="row">
                                                 <? 
												  $rowcount=0;
												  for($t=0,$j=0;$t<sizeof($catIdarray);$t++)
												  {
												  $rowcount=$rowcount+1;
												  ?>
                                                  <div class="col-sm-6">
                                                  <?
												$contact_inf=explode(",",$contact_info);
												if(($contact_inf[$j]==$catIdarray[$t]))
												{	
												  $j++;
																	
												?>
												<input id="contact[]" type="checkbox" checked="checked" name="contact[]" value="<?=$catIdarray[$t];?>">
                                                <?						}
												else
												{
												?>
												<input id="contact[]" type="checkbox"   name="contact[]" value="<?=$catIdarray[$t];?>">
												<? } ?>
                      							  &nbsp;&nbsp;<?=$catnamearray[$t];?></div>
                                                 <? if($rowcount==2)

												  {
								
												  echo "</div><div class=\"row\">";
								
												  $rowcount=0;
								
												  }
								
												  }
								
											?></div><div class="row"></div>
                                            </div>
                                        
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['POption']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <?php	//---------------------Payment Query---------------------------------- 	 
												$sqlarray="select * from payment where active=1";
											   $resarray=mysql_query($sqlarray)or print mysql_error();
											   for($w=0;$w<mysql_num_rows($resarray);$w++)
											   {
													$payment_id[$w]=mysql_result($resarray,$w,"pay_id");
													$payment_name[$w]=mysql_result($resarray,$w,"payment_name");
											   }
												?>
									
												<div class="row">
                                                  <?php 
												  $rowcount1=0;
												  for($p=0,$y=0;$p<sizeof($payment_id);$p++)
												  {
												  $rowcount1=$rowcount1+1;
												  ?>
                                                  <div class="col-sm-6">
                                                  <?
													$payment_met=explode(",",$payment_methods);
													if(($payment_met[$y]==$payment_id[$p]))
													{	
													$y++;
													?>
												<input id="payment_method[]" type="checkbox" checked="checked" name="payment_method[]" value="<?=$payment_id[$p];?>">
                                                <?	}
												else
												{
												?>
												<input id="payment_method[]" type="checkbox"   name="payment_method[]" value="<?=$payment_id[$p];?>">
												<? } ?>
                      							  &nbsp;&nbsp;<?=$payment_name[$p];?></div>
                                                 <? if($rowcount1==2)

												  {
								
												  echo "</div><div class=\"row\">";
								
												  $rowcount1=0;
								
												  }
								
												  }
								
											?></div><div class="row"></div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Description']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea name="description" cols="40" rows="5" id="description" class="form-control"><?=$description;?></textarea>                   
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Delivery']?><span class="text-error">*</span></label>
                                            
                                              <?
											  $count2=0;
											 for($i=0,$t=0;$i<count($delivery);$i++)
											 {
											 $count2=$count2+1;
											  ?> <div class="col-sm-1"><?php echo $count2;?></div><div class="col-sm-6"> <input name="delivery_methods[<?php echo $count2;?>]" type="text" id="delivery_methods[<?php echo $count2;?>]" value="<?=$delivery[$i];?>" class="form-control" ></div>
                                        </div>
												<div class="form-group">
													 <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
													
                                                    <?php
												}
												for($t=$i;$t<4;$t++){
												$count2=$count2+1;
											  ?> <div class="col-sm-1"><?php echo $count2;?></div><div class="col-sm-6"> <input name="delivery_methods[<?php echo $count2;?>]" type="text" id="delivery_methods[<?php echo $count2;?>]" value="" class="form-control" ></div>
                                        </div>
												<div class="form-group">
													 <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
													
                                                    <?php
												}
												?>                                          </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['AService']?><span class="text-error">*</span></label>
                                            <?
											  $count2=0;
											 for($i=0,$t=0;$i<count($additional_service);$i++)
											 {
											 $count2=$count2+1;
											  ?> <div class="col-sm-1"><?php echo $count2;?></div><div class="col-sm-6"> <input name="customer_service[<?php echo $count2;?>]" type="text" id="customer_service[<?php echo $count2;?>]" value="<?=$additional_service[$i];?>" class="form-control" ></div>
                                        </div>
												<div class="form-group">
													 <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
													
                                                    <?php
												}
												for($t=$i;$t<4;$t++){
												$count2=$count2+1;
											  ?> <div class="col-sm-1"><?php echo $count2;?></div><div class="col-sm-6"> <input name="customer_service[<?php echo $count2;?>]" type="text" id="customer_service[<?php echo $count2;?>]" value="" class="form-control" ></div>
                                        </div>
												<div class="form-group">
													 <label for="inputEMail" class="col-sm-3 control-label" style="float:left;">&nbsp;</label>
													
                                                    <?php
												}
												?>                                          </div>
                                            
                                        </div>
                                        
                                       
                                        
                                        
                                        
                                        
                                       
                                       
                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                            
                                                <input type="submit" name="edit_merchant" value="<?=$lang['EMerchant']?>" class="btn-default-1">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </article>
                            
                            
                        </div>
                       
                        
                    </div>
                </div>
            </div> 
        </section>


 <!-- start footer--->
   
   <?php include("footer.php");?>  