<?php $title="Comparison Shopping, Online Shopping, Product Reviews";//header title for homepage
$description="HiFiBrands.com allows you to compare prices and review products on all the most popular products. Our comparison shopping makes online shopping easy.";
$keywords="comparison shopping, online shopping, product reviews, consumer reviews, most popular products, shopping online, appliances, electronics, software, digital cameras, computers";
include("config.php");

include("connection.php");

include("functions.php");
include("header.php");?>
        <!-- End header -->
        <section>
            <div class="second-page-container">
                <div class="block-breadcrumb">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
                   <?php	 	
                    
                    //==============================
                    // Version 1.4
                    //
                    // Fill in the following.
                    //==============================
                    
                    // where you want the emails to go to
                    // separate multiple emails with a comma.
                    $contact_to_email=$emailsfrom;
                    
                    // this will be the first part of the subject line of mail
                    // sent from this script (identifies mail from this page)
                    $contact_subject="Contactus mail";
                    
                    // emails sent from this page may appear to come from this
                    // email address. change YOURDOMAIN.COM is to be the same
                    // as your website's domain name
                    $contact_from_email=$emailsfrom;
                    
                    // emails sent from here may come from this name.
                    // Change this to be the name of your website.
                    $contact_from_name=$COMPANY_NAME;
                    
                    //=======================================
                    //
                    // The Following changes are optional
                    //
                    //=======================================
                    
                    // If your host blocks messages with To: fields coming
                    // from other domains, then you may change this to true.
                    // If the script works fine as it is, just leave it as false.
                    //
                    // If this variable is false, messages will appear to come
                    // directly from the email address of the person who
                    // filled out the form, rather than appearing to come from
                    // the $contact_from_email above.
                    $send_from_internal_address=false;
                    
                    // The color the errors will come out as when they
                    // are displayed on the screen, use either a name or code
                    // such as #0000FF
                    $error_color="red";
                    
                    
                    // Use a security image only if you have a problem with automated
                    // bots submitting SPAM to this form.  You will need the 
                    // securityimage directory, which is located in the zip
                    // file on www.douglassdavis.com
                    //
                    // change to true to use security image
                    // false to not use security image.
                    // 
                    // The downside to using a security image is that visually impaired
                    // people will not be able to use the form.
                    
                    $use_security_image=true;
                    
                    //===============================
                    //
                    // Do not change anything below.
                    //
                    //===============================
                    
                    
                    function previous_request_value($str)
                    {
                    if (isset($_REQUEST[$str]) )
                    return $_REQUEST[$str];
                    else
                    return '';
                    }
                    
                    function cndstrips($str)
                    {
                    if (get_magic_quotes_gpc())
                    return stripslashes($str);
                    else
                    return $str;
                    }
                    
                    $visitor_email=$visitor_email;
                    $visitor_name=cndstrips(trim(previous_request_value('visitor_name')));
                    $message_body=cndstrips(previous_request_value('message_body'));
                    $message_subject=cndstrips(previous_request_value('message_subject'));
                    $security_code=str_replace(' ','',cndstrips(trim(previous_request_value('security_code'))));
                    
                    $errors="";
                    $message_sent=false;
                    
                    function validate_email($email) {
                    return preg_match('/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]+\.[A-Za-z0-9_\-\.]+$/', $email) == 0;
                    }
                    
                       
                    if ($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                    
                    if (validate_email($visitor_email) ) {
                    $errors.="Please enter a valid email address in the form of user@place.ext<br/><br/>";
                    }
                    
                    if ($use_security_image &&  $security_code != $_SESSION['contact_form_security_code'] ) {
                       $errors.="The verification code for the image presented was incorrect.  Please enter a correct verification code.<br/><br/>";
                    }
                    
                    if ($message_body == '')
                    $errors.="Please enter a message<br/><br/>";
                    
                    if ($message_subject == '')
                    $errors.="Please enter a message subject<br/><br/>";
                    
                    if ($visitor_name == '')
                    $errors.="Please enter your name<br/><br/>";
                    
                    if ( !$errors ) {
                    $ip = $_SERVER["REMOTE_ADDR"];
                    $httpagent = $_SERVER["HTTP_USER_AGENT"];
                    $time = date("D, F j, Y H:i O");
                    
                    if ($visitor_name)
                    $visitor_name_and_email="$visitor_name <$visitor_email>";
                    else
                    $visitor_name_and_email="$visitor_email";
                    
                    if ($contact_from_name)
                    $contact_from_email="$contact_from_name <$contact_from_email>";
                    $subject=$contact_subject." $message_subject";
                    $message = "
                    
                    $message_body
                    
                    ";
                    
                    //if ($send_from_internal_address) {
                    $message .= "
                    From: $visitor_email
                    Date: $time
                    Subject: $message_subject
                    ".$message;
                    //}
                    
                    $headers  = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                    $headers .= "From: $contact_to_email"."\r\n";;
                    if ($send_from_internal_address) {
                    
                    mail($contact_to_email, $subject, $message, $headers);
                    }
                    else {
                    
                    mail($contact_to_email, $subject, $message, $headers);
                    }
                    //mail($contact_to_email, $subject, $message,$headers );
                     // echo $contact_to_email.", ".$contact_subject." ".$message_subject.", ".$message.", ".$headers;
                    $successmsg="Your message ";
                   // $successmsg.= "<div style='border: 1px solid black; margin: 10px 10px 10px 10px; padding: 10px 10px 10px 10px;'>From: ".htmlentities($visitor_name_and_email)."<br />Re: ".htmlentities($message_subject)."<br />".htmlentities($message_body)."</div>";
                    $successmsg.= "has been sent. Thank you for contacting us.";
                    $message_sent=true;
                    }
                    }
                    
                    ?>
                <div>
                    <div class="container">
                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Contact</span> Us </h1>
                            
                        </div>
                        <div class="row">
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInLeft animated" data-wow-duration="1s">
                                   
                                    <?php if (!$message_sent) {
                    $this_file = substr(strrchr($_SERVER['PHP_SELF'], "/"), 1);
                    
                    ?>
                    
                    <h3><i class="fa fa-thumb-tack"></i>Our Address</h3><p>
                                       715 W 170Th Street,<br/>
                                       New York,<br/>
                                       NY 10032                                   </p><hr>
                                       <h3>We are happy to hear from you. Please enter the requested information <?php	 	 if (!$message_body) echo "and message" ?>  below, then click the Send button.                  </h3><?php	 	
                                    if ($errors) {
                                    
                                    echo "<hr><p><span class='cata_more'><br />$errors</span></p>";
                                    }
                                    ?>
                                                         
                                    <hr>
                                    <h3><i class="fa fa-envelope-o"></i>Send Message</h3>
                                    <form name="ContactForm" id="ContactForm" method="post" action="<?php	 	 echo $this_file ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputFirstName" class="control-label"> Your Name:<span class="text-error">*</span></label>
                                                    <div>
                                                        <input name="visitor_name" type="text" id="visitor_name" value="<?php	 	 echo htmlentities($visitor_name) ?>" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputLastName" class="control-label">Your Email Address:<span class="text-error">*</span></label>
                                                    <div>
                                                        <input name="visitor_email" type="text" id="visitor_email" value="<?php	 	 echo htmlentities($visitor_email) ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputSubject" class="control-label">Your Subject:<span class="text-error">*</span></label>
                                                    <div>
                                                       <input name="message_subject" type="text" id="message_subject" value="<?php	 	 echo htmlentities($message_subject) ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputSubject" class="control-label">Verification Image::<span class="text-error">*</span><br>(please enter the text in the image above)</label>
                                                    <div>
                                                       <?php	 	
    if ($use_security_image) {
?>
   <div align="left"><img src="securityimage/security-image.php?width=200" width="200" height="40" alt="Verification Image" /></div>


<input name="security_code" type="text" id="security_code"  size="25"/>


<?php	 	    
    }
?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText" class="control-label">Message:<span class="text-error">*</span></label>
                                                    <div>
                                                        <textarea name="message_body" cols="30" rows="6" id="message_body" class="form-control" ><?php	 	 echo htmlentities($message_body) ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="submit" class="btn-default-1"name="Submit" value="Send">
                                    </form>
                                    <?php } else if($message_sent){?>
                                    <h3><i class="fa fa-thumb-tack"></i>Success! Message successfully sent.                 </h3>
                                    <p><?php	 	
                                    if ($successmsg) {
                                    
                                    echo "<span class='cata_more'><br />$successmsg</span>";
                                    }
                                    ?>
                                     </p>                    
                                                           
                                    <?php }?>
                                </div>
                            </article>
                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="block-form box-border wow fadeInRight animated" data-wow-duration="1s">
                                    <h3> <i class="fa fa-adn"></i>Map</h3>
                                    <hr>
                                    <div class="google-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.2705321977255!2d-73.9445872846165!3d40.8439838374674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f6994edcf7ff%3A0xd15e8fcf09c7478f!2s715+W+170th+St%2C+New+York%2C+NY+10032!5e0!3m2!1sen!2sus!4v1457563821035"  style="overflow:hidden;height:100%;width:100%;" frameborder="0"></iframe>
                                       
                                    </div>

                                </div>
                            </article>

                        </div>
                    </div>
                </div>
            </div> 
        </section>

<!-- start footer--->
   
   <?php include("footer.php");?>  
  