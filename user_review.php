<div class="tab-pane" id="review">
        <br>
        <div class="row">
            <div class="col-md-12">
                <h3>User reviews</h3>
                <hr>
				<?php  //select product review based on product               
                $sqlselect=mysql_query("select * from product_reviews where productid='".$productid."'");
                $rec=mysql_num_rows($sqlselect);
				
                if(mysql_num_rows($sqlselect)>0)
                {
                      for($i=0;$i<$rec;$i++)
                      {
                           $how_long_have_you_used1[$i]=mysql_result($sqlselect,$i,how_to_have_you_used);
                           $similar_product1[$i]=mysql_result($sqlselect,$i,similar_product);
                          
                           $functionality1[$i]=mysql_result($sqlselect,$i,functionality);
                          
                           $quality1[$i]=mysql_result($sqlselect,$i,quality);
                           $value_for_money1[$i]=mysql_result($sqlselect,$i,value_for_money); 
                           $review_title1[$i]=mysql_result($sqlselect,$i,summary);
                           $strength1[$i]=mysql_result($sqlselect,$i,strength);
                           $weakness1[$i]=mysql_result($sqlselect,$i,weakness);
                           $summary1[$i]=mysql_result($sqlselect,$i,summary);
                           $recmonded1[$i]=mysql_result($sqlselect,$i,recomandable); 
                           $rating1[$i]=mysql_result($sqlselect,$i,rating);
                           $memberid1[$i]=mysql_result($sqlselect,$i,memberid);
                           $rate_date1[$i]=mysql_result($sqlselect,$i,rate_date);
                               
                            $functionalityimg[$i]=getImage($functionality1[$i]);  
                            $qualityimg[$i]=getImage($quality1[$i]);  
                            $value_for_moneyimg[$i]=getImage($value_for_money1[$i]);  
                             $rating1img[$i]=getImage($rating1[$i]);   
                            //members name and country based on his id
                            $qname=("select firstname,country from members_profile where member_id='$memberid1[$i]'");
                            $ffff=mysql_query($qname);
                             if(mysql_num_rows($ffff)>0)
                             {
                               $nickname[]=mysql_result($ffff,0,firstname);
                               $sel_country[]=mysql_result($ffff,0,country);
                              }
                     
                    
                     
                      }
                
                  }
          				else
          				{
          				  echo "<h5>No Review Exists</h5>";
          				}
                
                ?>
                <? for($j=0;$j<$rec;$j++)
          				{
              				/*******************************country **********************************************/
              				$sql="select distinct country2 from iptocountry where country='$sel_country[$j]'";
              				$res=mysql_query($sql);
              				while($rw=mysql_fetch_array($res))
              				{
              				$str=$rw['country2'];
              				$str = strtolower($str);
              				$pp="$str.png";
              				?>
              				
              				<?
              				}
              				?>
                    <div class="review-header">
                        <h5><? print "<img src=flags/$pp width=22 height=17/>"?>&nbsp;&nbsp;Review By <?=$nickname[$j];?> </h5>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                            </div>
                        </div>
                        <small class="text-muted">Submitted <?=$rate_date1[$j]?></small>
                    </div>
                    <div class="review-body">
                        <p><div class="col-md-6">
                                                    <h3>How long have you used the product?</h3>
                                                    

                                                </div>
                                                <div class="col-md-6 block-color">
                                                 <?=$how_long_have_you_used1[$j];?>   

                                                </div></p>

                    </div>
                    <hr>
                <? } ?>
                
            </div>
        </div>
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputFirstName" class="control-label"><a href="writereview.php?product=<?=$productid;?>"class="cata_txt">Write a review</a></label>
                        
                    </div>
			   </div>
           </div>
           

    </div>