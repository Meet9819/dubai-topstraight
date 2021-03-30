<?php include_once "includes/header.php";?>
<?php include_once "includes/manu.php";?>        
   <div class="jb-subheader subheader-height">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        Gallery</h1>
                </div>
                <div class="col-md-6">
                    <ul class="jb-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
       <div class="jb-content">
        <div class="jb-pagesection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="jb-maintitle">
                            <h3 class="blockhead">
                                Our<span> Gallery</span></h3>
                            <div class="clearfix">
                            </div>
                            <div id="ContentPlaceHolder1_lblCms"><p>
                           <div class="gallery">
                            <?php 
								$result=mysql_query("SELECT * FROM tbl_product_img");
								while($data=mysql_fetch_assoc($result))
								{
								?>
                                    <div class="col-sm-3">
                                        <div class="box2_img">
                                            <a id="ContentPlaceHolder1_rpGallery_hlImgLink_0" class="zm" href=""><img id="ContentPlaceHolder1_rpGallery_imgGallery_0" class="img-responsive" src="images/<?php echo $data['image'];?>" width="300" height="300" /></a>
                                        </div><?php echo $data['productname'];?>
                                    </div>
                                <?php } ?>
                            <br clear="all" />
                        </div>
                           </div>
                        </div>
                        
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<?php include_once "includes/footer.php";?>