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

                <div class="block">

                    <div class="container">

                    

                        <!--start sidebar left--->

                      

                        <!-- end sidebar_left--->

                        <div class="col-md-12">



                           

                            <div class="row">

                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                <div class="widget-title">

                                    <i class="fa fa-tag"></i> Browse Categories

                                </div>

                            </article> 

                           </div>

                            <?php ##Display Main Categories 



							$sqlarray="Select * from product_categories where parent='0' limit 0,100";

							

							   $resarray=mysql_query($sqlarray);

							

							   for($s=0;$s<mysql_num_rows($resarray); $s++)

							

							   {

							

									$catIdarray[$s]=mysql_result($resarray,$s,"id");

							

									$catnamearray[$s]=mysql_result($resarray,$s,"name");

							

							

							

							   }

							  

							   

							

							   ?>

                                <? $totcol=0;

								?>

                                <div class="row">

                                <?php

							//echo sizeof($catIdarray);

									for($x=0;$x<sizeof($catIdarray);$x++)

							

									{

							

											 $totcol=$totcol+1;

							

											$catid=$catIdarray[$x];?>

                           <?



			    



				## display Subcategories .



				$res=mysql_query("Select id,name,picture from product_categories where parent='0' AND id='$catid'");



				$trows=mysql_num_rows($res);



				if(mysql_num_rows($res)>0)



				{



					$catiid=mysql_result($res,0,"id");



					$catname=mysql_result($res,0,"name");



					$catname=str_replace("&","&amp;",$catname);



					$picture=mysql_result($res,0,"picture")



					?> 



								<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <h3><div class="widget-block">

                                    <ul class="list-unstyled catalog">

                                        <li><a href="more_cats.php?catiid=<?=$catiid;?>">

                                        <i class="fa <?php if($catname=="Auto..."){?>fa-automobile<?php }

										else if($catname=="Clothing & Accessories..."){?>fa-male<?php } 

										else if($catname=="Entertainment..."){?>fa-music<?php } 

										else if($catname=="Food/Beverage"){?>fa-glass<?php } 

										else if($catname=="Computer &amp; Accessories"){?>fa-desktop<?php } 

										else if($catname=="Financial Services"){?>fa-money<?php } 

										else if($catname=="Games &amp; Toys..."){?>fa-gamepad<?php }

										else if($catname=="Hobbies &amp; Collectibles"){?>fa-pagelines<?php }

										else if($catname=="Home Furniture"){?>fa-gear<?php } 

										else if($catname=="Internet &amp; Online"){?>fa-laptop<?php } 

										else if($catname=="Miscellaneous"){?>fa-ge<?php } 

										else if($catname=="Office"){?>fa-pencil<?php } 

										else if($catname=="Health &amp; Beauty"){?>fa-female<?php } 

										else if($catname=="Home &amp; Living"){?>fa-home<?php }

										else if($catname=="Household Appliances"){?>fa-star<?php } 

										else if($catname=="Jewelry"){?>fa-female<?php } 

										else if($catname=="Mobile Phones"){?>fa-mobile<?php } 

										else if($catname=="Pets Accessories"){?>fa-paw<?php } 

										else if($catname=="Sports &amp; Fitness"){?>fa-star<?php } 

										else if($catname=="Telecommunications"){?>fa-phone<?php }

										else if($catname=="Travel"){?>fa-plane<?php }

										else {?>fa-male<?php }?>"></i><?=$catname;?>&nbsp;[<?=Pa($catid);?>]</a></li></ul></div></h3>

                                <p>

                                     <? $sqlcats="select * from product_categories where parent='$catiid' limit 0,3";



									$rescats=mysql_query($sqlcats);



									if(mysql_num_rows($rescats)>0)



									{



										while($rowcats=mysql_fetch_array($rescats))



										{



										$rowcats['name'];



										   ?> <a href="more_cats.php?catiid=<?=$rowcats['id']?>"><?=str_replace("&","&amp;",$rowcats['name']);?>&nbsp;[<?=Pa($rowcats['id']);?>]</a>&nbsp;&nbsp;|



           <?



										}



									}?>

                                </p>



                            </article>

                         <? if($totcol=="2"){



						echo "</div><div class=\"row\">";



						$totcol=0;



						}?>



       					<? }?>



        			     <? }?> 

                             <? if($totcol=="1"){



						echo "</div><div class=\"row\">";



						$totcol=0;



						}?>

                        

                           

                           

                        </div>

                    </div>

                </div>  

               </div>

            </div> 

        </section>



<!-- start footer--->

   

   <?php include("footer.php");?>  