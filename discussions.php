<div id="collapseOne" class="panel-collapse collapse">
                 <div class="row">
                    <div class="col-md-12">
                        <h3>Discussions</h3>
                        <hr>
                            <?php	 	
                             $sql="SELECT * FROM discussions_question where productid='$productid' ORDER BY  d_datetime DESC";
                            // OREDER BY id DESC is order result by descending 
                            $result=mysql_query($sql) or print("Sorry".mysql_error());
                            ?>
                        
                          <div class="row">
                          
                                <?php	 	
                                $counter=0;
								if(mysql_num_rows($result)>0){
                                for($i=0;$i<mysql_num_rows($result);$i++)
                                {
                                    $discid=mysql_result($result,$i,"disc_id");
                                    $counter=$counter+1; ?>
                            
                                <article class="col-md-6 text-center">
                                        <div class="blog">
                                            <figure class="figure-hover-overlay">                                                                        
                                                <a href="#"  class="figure-href"></a>

                                               

                                                <span class="bar"></span>
                                            </figure>
                                            <div class="blog-caption">
                                                <h3><a href="dview_topic.php?productid=<?=$productid?>&discid=<?=$discid;?>" class="blog-name"><?php	 	 echo mysql_result($result,$i,"disc_topic"); ?></a></h3>
                                                <p class="post-information">
                                                    <span><i class="fa fa-user"></i><?php	 	 echo mysql_result($result,$i,"disc_view"); ?></span>
                                                    <span><i class="fa fa-clock-o"></i><?php	 	 echo mysql_result($result,$i,"d_datetime"); ?></span>
                                                </p>
                                                <p><?php	 	 echo mysql_result($result,$i,"disc_reply"); ?>
                                                   
                                                </p>
                                                <a <a href="dview_topic.php?productid=<?=$productid?>&discid=<?=$discid;?>" class="btn-read">Read more</a>
                                            </div>
                                        </div>
                                    </article>  
                                <?
                                }
								}else {
								?>
                                <div class="row">
                                  <div class="col-md-4"></div>
                                  <div class="col-md-8">
                                  <div class="blog-caption"><h4>No discussions Exist for this Product</h4></div>
                                  </div><div class="col-md-4"></div>
                                  </div>
                                  <?php
								}
                                ?>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                  <a href="main_discussions.php?productid=<?=$productid;?>">Discussions</a>
                                  </div>
                                  </div>
                                  
                                
                     </div>
                  </div>
            
        </div>
       
    </div>
    
    
</div>