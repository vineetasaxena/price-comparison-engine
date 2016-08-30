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

                <div class="container">

                    <div class="row">



                        <div class="col-md-12">

                        

                           

							<div class="row" style="height:60px;">&nbsp;</div>

                            <div class="header-for-light">

                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Buying <span>Guides</span></h1>



                            </div>

                            <!--style for detail summary below-->

							<style>*, *:before, *:after {

                              -moz-box-sizing: border-box;

                              -webkit-box-sizing: border-box;

                              box-sizing: border-box;

                            }

                            

                            

                            

                            details {

                              border-radius: 3px;

                              background: #EEE;

                              margin: 1em 0;

                            }

                            

                            summary {

                              background: #333;

                              color: #FFF;

                              border-radius: 3px;

                              padding: 5px 10px;

                              outline: none;

                            }

                            

                            /* Style the summary when details box is open */

                            details[open] summary {

                              background: #69c773;

                              color: #333;

                            }

                            

                            /* Custom Markers */

                            #custom-marker summary {

                              font-size: 17px;

                              vertical-align: top;

                            }

                            

                            #custom-marker summary::-webkit-details-marker {

                              display: none;

                            }

                            

                            #custom-marker summary:before {

                              display: inline-block;

                              width: 18px;

                              height: 18px;

                              margin-right: 8px;

                              content: "";

                              background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/4621/treehouse-icon-sprite.png);

                              background-repeat: no-repeat;

                              background-position: 0 0;

                            }

                            

                            #custom-marker[open] summary:before {

                              background-position: -18px 0;

                            }

                            

                            

                            table {

                              border: 0;

                              width: 100%;

                            }

                            

                            th, td {

                              vertical-align: top;

                              text-align: left;

                              padding: 0.5em;

                              border-bottom: 1px solid #E6E6E6;

                            }

                            

                            th {

                              width: 200px;

                            }

                            

                           

                            </style>

                            

                            

							<!--discussion-->

                            

                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                               

                                

                                <details>

                                <summary>A</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

																		   <?php	 	

                                              $sql="select * from product_categories where name LIKE 'A%'";

                                              $product_categories1=mysql_query("$sql");

                                              $crows=mysql_num_rows($product_categories1);					  

                                              for($i=0;$i<mysql_num_rows($product_categories1);$i++)

                                              {

                                                 echo "<tr>";

                                                 $n=$i+3;

                                                 for($k=$i;$k<$n;$k++)

                                                 {

                                                    if($k>=$crows)

                                                     break;

                                                     $cid=mysql_result($product_categories1,$k,id);

                                                     $cname=mysql_result($product_categories1,$k,name);

                                      ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

                        

                                                                            <td>

                                                                                <a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

                                             }

                                               echo "</tr>";

                                                $i=$i+2;

                                            } 				

                                         ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              

                              <details>

                                <summary>B</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'B%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              <details>

                                <summary>C</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'C%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              <details>

                                <summary>D</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'D%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>E</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'E%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                             <details>

                                <summary>F</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'F%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              <details>

                                <summary>G</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'G%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              <details>

                                <summary>H</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'H%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>I</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'I%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              

                              <details>

                                <summary>J</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'J%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              

                              <details>

                                <summary>K</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'K%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>L</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'L%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>M</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'M%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>N</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'N%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>O</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'O%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>P</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'P%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>Q</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'Q%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>R</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'R%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>S</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'S%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>T</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'T%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>U</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'U%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>V</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'V%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>W</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'W%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>X</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'X%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>Y</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'Y%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                              <details>

                                <summary>Z</summary>

                                

                                <div class="table-responsive">

                                        <table class="table table-hover">

                                            

                                            <tbody>

                                                <tr>

                                                   <?php	 	

											  $sql="select * from product_categories where name LIKE 'Z%'";

											  $product_categories1=mysql_query("$sql");

											  $crows=mysql_num_rows($product_categories1);					  

											  for($i=0;$i<mysql_num_rows($product_categories1);$i++)

											  {

												 echo "<tr>";

												 $n=$i+3;

												 for($k=$i;$k<$n;$k++)

												 {

													if($k>=$crows)

													 break;

													 $cid=mysql_result($product_categories1,$k,id);

													 $cname=mysql_result($product_categories1,$k,name);

									  ?> <td><img src="images/bullet2.gif" width="9" height="12" /></td>

						

																			<td>

																				<a  href="amplifier_buying_guide1.php?cat_id=<?php	 	 echo $cid; ?>"><?php	 	 echo $cname;?></a></td><?php	 	

											 }

											   echo "</tr>";

												$i=$i+2;

											} 				

										 ?>

                                            </tbody>

                                        </table>

                                    </div><a href="#">Back to Top</a>

                              </details>

                              

                                                           

                                                        </article>

                            

                            <!--end discussion-->





                        </div>

                        



                    </div>

                </div>  

            </div>



        </section>

   <!-- start footer--->

   

   <!--for buying guide only this footer-->

   <link rel="stylesheet" type="text/css" href="css/theme-style.css">

        <link rel="stylesheet" href="css/ie.style.css">

        <!--[if lt IE 9]>

        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

        <![endif]-->

        <!--[if IE 7]>

          <link rel="stylesheet" href="css/font-awesome-ie7.css">

        <![endif]-->

        <script src="js/vendor/modernizr.js"></script>

        <!--[if IE 8]><script src="js/vendor/less-1.3.3.js"></script><![endif]-->

        <!--[if gt IE 8]><!--><script src="js/vendor/less.js"></script><!--<![endif]-->

   <?php include("footer.php");?>   

        