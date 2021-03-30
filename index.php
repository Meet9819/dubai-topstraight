<?php include_once "includes/header.php";?>
<?php include_once "includes/manu.php";?>        
<?php include_once "includes/banner.php";?>     
    <div class="jb-content">
        <div class="hmwelcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jb-maintitle">
                            <h3 class="blockhead center">
                                Welcome To<span> TOP STRAIGHT-LINE GENERAL TRADING LLC</span></h3>
                            <div class="clearfix">
                            </div>
                            <div id="ContentPlaceHolder1_lblCms"><p style="text-align: center;">
                            <p><?php 
						$result=mysql_query("SELECT * FROM cmsmain WHERE CmsId=1");
						while($data=mysql_fetch_assoc($result))
						{
						?>
                        <?php echo $data['CmsContent'];}?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="sec-center">
            <div class="container">
                <div class="row">
                    <img src="images/centerlogo.png" alt="Beezy Kitchenware" />
                    <p>
                       Free online Lorem Ipsum dummy text generator with great features.
                    </p>
                    <br clear="all" />
                    <a href="" target="_blank" class="brochue-dwn"><i class="fa fa-download"></i>Download</a>
                </div>
            </div>
        </div>
        <div class="newproduct">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                     <h2 class="blockhead center">
                            Our<span> Services</span></h2>
                        <div class="jbcategory">
                             <?php 
								$result=mysql_query("SELECT * FROM tbl_product_img");
								while($data=mysql_fetch_assoc($result))
								{
								?>
                                    <div class="item">
                                        <a id="ContentPlaceHolder1_rpProduct_hlLink_0" class="zm" title="" href="">
                                            <div class="box2">
                                                <div class="box2_img">
                                                    <img id="ContentPlaceHolder1_rpProduct_imgProduct_0" class="img-responsive" src="images/<?php echo $data['image'];?>" width="250" height="200" alt="" />
                                                </div>
                                            </div>
                                            <h4 class="text-uppercase"> <?php echo $data['productname'];?></h4>
                                        </a>
                                    </div>
                                    <?php }?>
                               
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<?php include_once "includes/footer.php";?>