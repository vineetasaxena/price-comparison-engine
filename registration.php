<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");
include"lang/resistration.php";?>
<script>
function registerValidation()
{
if(document.myform.firstname.value=="")
{
alert("Please Enter Your First Name!");
document.myform.firstname.focus();
return false;
}
if(document.myform.lastname.value=="")
{
alert("Please Enter Your Last Name!");
document.myform.lastname.focus();
return false;
}
var email;
email=window.document.myform.email.value;
if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(window.document.myform.email.value || window.document.myform.email.value==""))
{
	alert("please enter your Email Address!");
	window.document.myform.email.focus();
	return false;
}
if(window.document.myform.remail.value=="")
{
	alert("Please enter your Repeat Email Address!");
	window.document.myform.remail.focus();	
	return false;
}
else
{
	if(email!=window.document.myform.remail.value)
	{
		alert("Email address does not match!");
		window.document.myform.remail.focus();
		return false;
	}
}
var password;
pass=window.document.myform.password.value;
if (window.document.myform.password.value=="")
{
alert("Please enter your Password!");
window.document.myform.password.focus();
return false;
}
if(window.document.myform.conpassword.value=="")
{
alert("Please enter your Confirm Password!")
window.document.myform.conpassword.focus();
return false;
}
else
{
if(pass!=window.document.myform.conpassword.value)
{
alert("Sorry Confirm password does not match!");
window.document.myform.conpassword.focus();
return false;
}
}
if(document.myform.mobile_num.value=="")
{
alert("Please Enter Your Phone No.!");
document.myform.mobile_num.focus();
return false;
}
if(isNaN(document.myform.mobile_num.value))
{
alert("Phone No. should be a Number!");
document.myform.mobile_num.focus();
return false;
}
if(document.myform.address.value=="")
{
alert("Please Enter Your Address!");
document.myform.address.focus();
return false;
}
if(document.myform.city.value=="")
{
alert("Please Enter Your City!");
document.myform.city.focus();
return false;
}
if(document.myform.state.value=="")
{
alert("Please Enter Your State!");
document.myform.state.focus();
return false;
}
if (window.document.myform.bmonth.selectedIndex == 0 || window.document.myform.bday.selectedIndex == 0 || window.document.myform.byear.selectedIndex == 0) 
{
alert("Please enter a valid Date of Birth.");
return false;

}
if(document.myform.sel_cuontry.value=="")
{
alert("Please Enter Your Country!");
document.myform.sel_cuontry.focus();
return false;
}
if(document.myform.profession.value=="")
{
alert("Please Enter Your Profession!");
document.myform.profession.focus();
return false;
}
if(document.myform.profilephoto.value=="")
{
alert("Please Enter Your Profile Photo!");
document.myform.profilephoto.focus();
return false;
}
if(!document.myform.notify_email.checked)
{
alert("Please Checked I wish to receive alerts in my e-mail from zatara!");
document.myform.notify_email.focus();
return false;
}
if(!document.myform.accept_terms.checked)
{
alert("Please Checked I accept the membership terms. Read the membership conditions.!");
document.myform.accept_terms.focus();
return false;
}
if(document.myform.about_zatara.value=="")
{
alert("Please Enter About Zatara!");
document.myform.about_zatara.focus();
return false;
}





}
</script>

        <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Create new <span>Account</span></h1>
                        </div>
                        <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-user"></i>Personal Information</h3>
                                    <hr>
                                    <form action="signup_action.php" id="myform" name="myform" method="post" enctype="multipart/form-data" onsubmit="javascript: return registerValidation();" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputFirstName" class="col-sm-3 control-label"><?=$lang['FName']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="firstname" id="firstname" value="<?=$firstname;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-sm-3 control-label"><?=$lang['LName']?><span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                               <input type="text" name="lastname" id="lastname" value="<?=$lastname;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEMail" class="col-sm-3 control-label"><?=$lang['Email']?>:<span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="email" id="email" value="<?=$email;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEMail" class="col-sm-3 control-label"><?=$lang['ReEmail']?>:<span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="remail" id="remail" value="<?=$remail;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPhone" class="col-sm-3 control-label"><?=$lang['Phone']?>:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mobile_num" value="<?=$mobile_num;?>" id="mobile_num" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAdress1" class="col-sm-3 control-label"><?=$lang['Address']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="address" value="<?=$address;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCity" class="col-sm-3 control-label"><?=$lang['City']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="city" type="text" id="city" value="<?=$city?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['State']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="state" id="state" value="<?=$state;?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['Country']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <select name="sel_cuontry" id="sel_cuontry"  class="form-control"> 
                                                  <option value="" selected="selected" class="blueinput"><---Select One---></option>
                                                  <option value="Afghanistan" class="blueinput">Afghanistan</option>
                                                  <option value="Albania">Albania</option>
                                                  <option value="Algeria">Algeria</option>
                                                  <option value="American Samoa">American Samoa</option>
                                                  <option value="Andorra">Andorra</option>
                                                  <option value="Angola">Angola</option>
                                                  <option value="Anguilla">Anguilla</option>
                                                  <option value="Antarctica">Antarctica</option>
                                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                  <option value="Argentina">Argentina</option>
                                                  <option value="Armenia">Armenia</option>
                                                  <option value="Aruba">Aruba</option>
                                                  <option value="Australia">Australia</option>
                                                  <option value="Austria">Austria</option>
                                                  <option value="Azerbaijan">Azerbaijan</option>
                                                  <option value="Bahamas">Bahamas</option>
                                                  <option value="Bahrain">Bahrain</option>
                                                  <option value="Bangladesh">Bangladesh</option>
                                                  <option value="Barbados">Barbados</option>
                                                  <option value="Belarus">Belarus</option>
                                                  <option value="Belgium">Belgium</option>
                                                  <option value="Belize">Belize</option>
                                                  <option value="Benin">Benin</option>
                                                  <option value="Bermuda">Bermuda</option>
                                                  <option value="Bhutan">Bhutan</option>
                                                  <option value="Bolivia">Bolivia</option>
                                                  <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                  <option value="Botswana">Botswana</option>
                                                  <option value="Bouvet Island">Bouvet Island</option>
                                                  <option value="Brazil">Brazil</option>
                                                  <option value="British Indian Ocean">British Indian Ocean Territory</option>
                                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                  <option value="Bulgaria">Bulgaria</option>
                                                  <option value="Burkina Faso">Burkina Faso</option>
                                                  <option value="Burundi">Burundi</option>
                                                  <option value="Cambodia">Cambodia</option>
                                                  <option value="Cameroon">Cameroon</option>
                                                  <option value="Canada">Canada</option>
                                                  <option value="Cape Verde">Cape Verde</option>
                                                  <option value="Cayman Islands">Cayman Islands</option>
                                                  <option value="Central African Republic">Central African Republic</option>
                                                  <option value="Chad">Chad</option>
                                                  <option value="Chile">Chile</option>
                                                  <option value="China">China</option>
                                                  <option value="Christmas Island">Christmas Island</option>
                                                  <option value="Cocoa (Keeling) Islands">Cocoa (Keeling) Islands</option>
                                                  <option value="Colombia">Colombia</option>
                                                  <option value="Comoros">Comoros</option>
                                                  <option value="Congo">Congo</option>
                                                  <option value="Cook Islands">Cook Islands</option>
                                                  <option value="Costa Rica">Costa Rica</option>
                                                  <option value="Cote Divoire">Cote Divoire</option>
                                                  <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                  <option value="Cuba">Cuba</option>
                                                  <option value="Cyprus">Cyprus</option>
                                                  <option value="Czech Republic">Czech Republic</option>
                                                  <option value="Denmark">Denmark</option>
                                                  <option value="Djibouti">Djibouti</option>
                                                  <option value="DoDDs Schools">DoDDs Schools</option>
                                                  <option value="Dominica">Dominica</option>
                                                  <option value="Dominican Republic">Dominican Republic</option>
                                                  <option value="East Timor">East Timor</option>
                                                  <option value="Ecuador">Ecuador</option>
                                                  <option value="Egypt">Egypt</option>
                                                  <option value="El Salvador">El Salvador</option>
                                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                  <option value="Eritrea">Eritrea</option>
                                                  <option value="EE">Estonia</option>
                                                  <option value="Estonia">Ethiopia</option>
                                                  <option value="alkland Islands (Malvinas)">Falkland Islands 
                                                  (Malvinas)</option>
                                                  <option value="Faroe Islands">Faroe Islands</option>
                                                  <option value="Fiji">Fiji</option>
                                                  <option value="Finland">Finland</option>
                                                  <option value="France">France</option>
                                                  <option value="Gabon">Gabon</option>
                                                  <option value="Gambia">Gambia</option>
                                                  <option value="Georgia">Georgia</option>
                                                  <option value="Germany">Germany</option>
                                                  <option value="Ghana">Ghana</option>
                                                  <option value="Gibraltar">Gibraltar</option>
                                                  <option value="Greece">Greece</option>
                                                  <option value="Greenland">Greenland</option>
                                                  <option value="Grenada">Grenada</option>
                                                  <option value="Guam">Guam</option>
                                                  <option value="Guatemala">Guatemala</option>
                                                  <option value="Guinea">Guinea</option>
                                                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                  <option value="Guyana">Guyana</option>
                                                  <option value="Haiti">Haiti</option>
                                                  <option value="Heard and Mc Donald Islands">Heard and Mc Donald 
                                                  Islands</option>
                                                  <option value="Honduras">Honduras</option>
                                                  <option value="Hong Kong">Hong Kong</option>
                                                  <option value="Hungary">Hungary</option>
                                                  <option value="Iceland">Iceland</option>
                                                  <option value="India">India</option>
                                                  <option value="Indonesia">Indonesia</option>
                                                  <option value="Iran (Islamic Republic of)">Iran (Islamic Republic 
                                                  of)</option>
                                                  <option value="Iraq">Iraq</option>
                                                  <option value="Ireland">Ireland</option>
                                                  <option value="Israel">Israel</option>
                                                  <option value="Italy">Italy</option>
                                                  <option value="Jamaica">Jamaica</option>
                                                  <option value="Japan">Japan</option>
                                                  <option value="Jordan">Jordan</option>
                                                  <option value="Kazakhstan">Kazakhstan</option>
                                                  <option value="Kenya">Kenya</option>
                                                  <option value="Kiribati">Kiribati</option>
                                                  <option value="Korea, Democratic Peoples Republic of">Korea, 
                                                  Democratic Peoples Republic of</option>
                                                  <option value="Korea, Republic of">Korea, Republic of</option>
                                                  <option value="Kuwait">Kuwait</option>
                                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                  <option value="Lao Peoples Democratic Republic">Lao Peoples 
                                                  Democratic Republic</option>
                                                  <option value="Latvia">Latvia</option>
                                                  <option value="Lebanon">Lebanon</option>
                                                  <option value="Lesotho">Lesotho</option>
                                                  <option value="Liberia">Liberia</option>
                                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                  <option value="Liechtenstein">Liechtenstein</option>
                                                  <option value="Lithuania">Lithuania</option>
                                                  <option value="Luxembourg">Luxembourg</option>
                                                  <option value="Macau">Macau</option>
                                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, 
                                                  The Former Yugoslav Republic of</option>
                                                  <option value="Madagascar">Madagascar</option>
                                                  <option value="Malawi">Malawi</option>
                                                  <option value="Malaysia">Malaysia</option>
                                                  <option value="Maldives">Maldives</option>
                                                  <option value="Mali">Mali</option>
                                                  <option value="Malta">Malta</option>
                                                  <option value="Marshall Islands">Marshall Islands</option>
                                                  <option value="Mauritania">Mauritania</option>
                                                  <option value="Mauritius">Mauritius</option>
                                                  <option value="Mexico">Mexico</option>
                                                  <option value="Micronesia, Federated States of">Micronesia, 
                                                  Federated States of</option>
                                                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                  <option value="Monaco">Monaco</option>
                                                  <option value="Mongolia">Mongolia</option>
                                                  <option value="Montserrat">Montserrat</option>
                                                  <option value="Morocco">Morocco</option>
                                                  <option value="Mozambique">Mozambique</option>
                                                  <option value="Myanmar">Myanmar</option>
                                                  <option value="Namibia">Namibia</option>
                                                  <option value="Nauru">Nauru</option>
                                                  <option value="Nepal">Nepal</option>
                                                  <option value="Netherlands">Netherlands</option>
                                                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                  <option value="New Zealand">New Zealand</option>
                                                  <option value="Nicaragua">Nicaragua</option>
                                                  <option value="Niger">Niger</option>
                                                  <option value="Nigeria">Nigeria</option>
                                                  <option value="Niue">Niue</option>
                                                  <option value="Norfolk Island">Norfolk Island</option>
                                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                  <option value="Norway">Norway</option>
                                                  <option value="Oman">Oman</option>
                                                  <option value="Pakistan">Pakistan</option>
                                                  <option value="Palau">Palau</option>
                                                  <option value="Panama">Panama</option>
                                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                                  <option value="Paraguay">Paraguay</option>
                                                  <option value="Peru">Peru</option>
                                                  <option value="Philippines">Philippines</option>
                                                  <option value="Pitcairn">Pitcairn</option>
                                                  <option value="Poland">Poland</option>
                                                  <option value="Portugal">Portugal</option>
                                                  <option value="Puerto Rico">Puerto Rico</option>
                                                  <option value="Qatar">Qatar</option>
                                                  <option value="Romania">Romania</option>
                                                  <option value="Russian Federation">Russian Federation</option>
                                                  <option value="Rwanda">Rwanda</option>
                                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                  <option value="Saint Lucia">Saint Lucia</option>
                                                  <option value="Saint Vincent and the Grenadines">Saint Vincent 
                                                  and the Grenadines</option>
                                                  <option value="Samoa">Samoa</option>
                                                  <option value="San Marino">San Marino</option>
                                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                                  <option value="Senegal">Senegal</option>
                                                  <option value="Seychelles">Seychelles</option>
                                                  <option value="Sierra Leone">Sierra Leone</option>
                                                  <option value="Singapore">Singapore</option>
                                                  <option value="Slovakia (Slovak Republic)">Slovakia (Slovak 
                                                  Republic)</option>
                                                  <option value="Slovenia">Slovenia</option>
                                                  <option value="Solomon Islands">Solomon Islands</option>
                                                  <option value="Somalia">Somalia</option>
                                                  <option value="South Africa">South Africa</option>
                                                  <option value="South Georgia and the South Sandwich Islands">South 
                                                  Georgia and the South Sandwich Islands</option>
                                                  <option value="Spain">Spain</option>
                                                  <option value="Sri Lanka">Sri Lanka</option>
                                                  <option value="St. Helena">St. Helena</option>
                                                  <option value="Sudan">Sudan</option>
                                                  <option value="Suriname">Suriname</option>
                                                  <option value="Svalbard and Jan Mayen Islands">Svalbard and 
                                                  Jan Mayen Islands</option>
                                                  <option value="Swaziland">Swaziland</option>
                                                  <option value="Sweden">Sweden</option>
                                                  <option value="Switzerland">Switzerland</option>
                                                  <option value="Syrian ArabRepublic">Syrian ArabRepublic</option>
                                                  <option value="Taiwan">Taiwan</option>
                                                  <option value="Tajikistan">Tajikistan</option>
                                                  <option value="Tanzania, United Republic of">Tanzania, United 
                                                  Republic of</option>
                                                  <option value="Thailand">Thailand</option>
                                                  <option value="Togo">Togo</option>
                                                  <option value="Tokelau">Tokelau</option>
                                                  <option value="Tonga">Tonga</option>
                                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                  <option value="Tunisia">Tunisia</option>
                                                  <option value="Turkey">Turkey</option>
                                                  <option value="Turkmenistan">Turkmenistan</option>
                                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                  <option value="Tuvalu">Tuvalu</option>
                                                  <option value="Uganda">Uganda</option>
                                                  <option value="Ukraine">Ukraine</option>
                                                  <option value="United ArabEmirates">United ArabEmirates</option>
                                                  <option value="United Kingdom">United Kingdom</option>
                                                  <option value="United States">United States</option>
                                                  <option value="United States Minor Outlying Islands">United 
                                                  States Minor Outlying Islands</option>
                                                  <option value="Uruguay">Uruguay</option>
                                                  <option value="Uzbekistan">Uzbekistan</option>
                                                  <option value="Vanuatu">Vanuatu</option>
                                                  <option value="Vatican City State(Holy See)">Vatican City State(Holy 
                                                  See)</option>
                                                  <option value="Venezuela">Venezuela</option>
                                                  <option value="Viet Nam">Viet Nam</option>
                                                  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                  <option value="Western Sahara">Western Sahara</option>
                                                  <option value="Yeman">Yeman</option>
                                                  <option value="Yugoslavia">Yugoslavia</option>
                                                  <option value="Zaire">Zaire</option>
                                                  <option value="Zambia">Zambia</option>
                                                  <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['days']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                 <SELECT NAME="bmonth" SIZE="1" class="form-control">
                                                    <OPTION VALUE="">Month 
                                                      <OPTION VALUE="Jan" <? if($birthday_month=="Jan") echo "selected";?>>Jan 
                                                      <OPTION VALUE="Feb" <? if($birthday_month=="Feb") echo "selected";?>>Feb 
                                                      <OPTION VALUE="Mar" <? if($birthday_month=="Mar") echo "selected";?>>Mar 
                                                      <OPTION VALUE="Apr" <? if($birthday_month=="Apr") echo "selected";?>>Apr 
                                                      <OPTION VALUE="May" <? if($birthday_month=="May") echo "selected";?>>May 
                                                      <OPTION VALUE="Jun" <? if($birthday_month=="Jun") echo "selected";?>>Jun 
                                                      <OPTION VALUE="Jul" <? if($birthday_month=="Jul") echo "selected";?>>Jul 
                                                      <OPTION VALUE="Aug" <? if($birthday_month=="Aug") echo "selected";?>>Aug 
                                                      <OPTION VALUE="Sep" <? if($birthday_month=="Sep") echo "selected";?>>Sep 
                                                      <OPTION VALUE="Oct" <? if($birthday_month=="Oct") echo "selected";?>>Oct 
                                                      <OPTION VALUE="Nov" <? if($birthday_month=="Nov") echo "selected";?>>Nov 
                                                      <OPTION VALUE="Dec" <? if($birthday_month=="Dec") echo "selected";?>>Dec 
                                                    </SELECT> <SELECT NAME="bday" SIZE="1" class="form-control">
                                                      <OPTION VALUE="">Day</option>
                                                      <? for($day=1;$day<=31;$day++)
                                                {?>
                                                      <OPTION VALUE="<?=$day;?>" <? if($birthday_day==$day) echo "selected";?>> 
                                                      <?=$day;?>
                                                      </option>
                                                      <? }?>
                                                    </SELECT> 
                                                    <? $startyear=date("Y")-70;
                                            $endyear=date("Y")-4;?>
                                                    <SELECT NAME="byear" SIZE="1" class="form-control">
                                                      <OPTION VALUE="">Year 
                                                      <? for($year=$startyear; $year<$endyear;$year++)
                                            {?>
                                                      <OPTION VALUE="<?=$year;?>" <? if($birthday_year==$year) echo "selected";?>> 
                                                      <?=$year;?>
                                                      <?
                                            }
                                            ?>
                                                    </SELECT>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Profession']?>: </label>
                                            <div class="col-sm-9">
                                                <input type="text" name="profession" value="<?=$profession;?>"id="profession" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostCode" class="col-sm-3 control-label"><?=$lang['Prhoto'];?>: </label>
                                            <div class="col-sm-9">
                                                <input type="file" name="profilephoto" id="profilephoto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="newsletter" class="col-sm-3 control-label">My favorite categories: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                             <?php
                        										  $sqlarray="Select * from product_categories where parent='0'";
                        										   $resarray=mysql_query($sqlarray) or print("sorry".mysql_error());
                        										   for($s=0;$s<mysql_num_rows($resarray); $s++)
                        										   {
                        												$qIdarray[$s]=mysql_result($resarray,$s,"id");
                        												 $qnamearray[$s]=mysql_result($resarray,$s,"name");
                        										   }
                        										   
                        										   ?>
                        												 
                        												  <? $rowcount=0;?>
                                                                        <div class="row"> 
                                                                        <?php
                        										  for($t=0;$t<sizeof($qIdarray);$t++)
                        										  {
                        										   $rowcount=$rowcount+1;
                        										  ?>
                                                                        <div class="radio">
                                                                            <label>
                                                                                <input id="interests[]" type="checkbox" name="interests[]" value="<?=$qIdarray[$t];?>" >
                                                                                <?=$qnamearray[$t];?>
                                                                            </label>

                                                                        </div>
                                                                   <? if($rowcount==2)
                        											  {
                        											  echo "</div><div class=\"row\"> ";
                        											  $rowcount=0;
                        											  }
                        											}?>     
                                              </div> 
                                            </div>
                                        </div>
                                        
                                        <h3><i class="fa fa-lock"></i>Password</h3>
                                        
                                        <hr>
                                        <div class="form-group">
                                            <label for="inputPassword1" class="col-sm-3 control-label"><?=$lang['Password']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password" value="<?=$password;?>" id="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword2" class="col-sm-3 control-label">Re-Password: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="password" name="conpassword" value="<?=$conpassword;?>" id="conpassword" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="notify_email" value="1" <? if($notify_email=="1") echo "checked";?>>
                                                        <?=$lang['receiving'];?>
                                                    </label>

                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="accept_terms" value="1" <? if($accept_terms=="1") echo "checked";?>>  <?=$lang['membershipi']?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword2" class="col-sm-3 control-label"><?=$lang['hears']?>: <span class="text-error">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea name="about_zatara" cols="40" rows="5" id="about_zatara" class="form-control"><?=$about_zatara;?>
                              </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                            <input type="hidden" name="pp_review_status" value="1">
            								<input type="hidden" name="pp_dte_orig" value="1">
                                                <input type="submit" name="next_page" value="<?=$lang['Next']?>" class="btn-default-1">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </article>
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                    <h3><i class="fa fa-check"></i>Conditions</h3>
                                    <hr>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <blockquote>
                                        <p>
                                            <abbr title="HyperText Markup Language Curabitur pretium tincidunt lacus. Nulla gravida orci a odio." class="initialism">HTML</abbr>
                                            Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                                        </p>
                                    </blockquote>
                                    <p>
                                        Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
                                    </p>
                                    <p>
                                        Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
                                    </p>


                                    <a href="#" class="btn-default-1">Read more</a>
                                </div>
                                 <?php include("customer_login.php");?>
                            </article>
                        </div>
                    </div>
                </div>
            </div> 
        </section>


 <!-- start footer--->
   
   <?php include("footer.php");?>  