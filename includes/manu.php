
            
                <div class="jb-headbar">
            <div class="container">        <div class="row">
                        <div class="col-md-3 ">
                            <a href="index.php" class="logo">
                                <img src="images/logo.png" alt=""></a></div>
                        <div class="col-md-9">
                            <div class="jb-rightsection">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                                class="icon-bar"></span><span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li id="m1"><a href="index.php">Home</a></li>
                                            <li id="m2"><a href="aboutus.php">About Us</a> </li>
                                            <li id="m3"><a href="#">Services</a>
                                                <ul class="children">
                                                     <?php 
											$result=mysql_query("SELECT * FROM tbl_category ORDER BY category_id");
											while($data=mysql_fetch_assoc($result))
											{
											?>
                                                <li><a id="rpCategory_hlLink_1" href="#">
                                                  <?php echo $data['category_name'];?>
                                                </a>
                                                <ul class="children">
                                                <?php 
												$temp=$data['category_id'];
												$result1=mysql_query("select * from tbl_homepro where category_id=$temp ORDER BY homepro_id");
												while($data1=mysql_fetch_assoc($result1))
												{
												?>
                                                <li><a id="rpCategory_hlLink_2" href="searchproduct.php?eid=<?php echo $data1['homepro_id'];?>"><?php echo $data1['homepro_name'];?></a></li>
                                                <?php }?>
                                                </ul>
                                                </li>
                                            <?php } ?>
                                                        
                                                </ul>
                                            </li>
                                           <!-- <li id="m4"><a href="whyus.php">Why Us?</a> </li>-->
                                     
                                            <li id="m5"><a href="gallery.php">Gallery</a> </li>
                                            <li id="m6"><a href="contactus.php">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// jb HeaderBaar //-->
        </div>