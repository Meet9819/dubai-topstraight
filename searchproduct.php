<?php include_once "includes/header.php";?>
<?php include_once "includes/manu.php";?>        
 <div class="jb-subheader subheader-height">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        Products</h1>
                </div>
                <div class="col-md-6">
                    <ul class="jb-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
         <div id="ContentPlaceHolder1_divView">
        
        <div class="jb-content">
            <div class="jb-pagesection">
                <div class="container">
                    <div class="row">
                    <?php 
								$temp=$_REQUEST['eid'];
								$result=mysql_query("SELECT * FROM product_table WHERE homepro_id=$temp");
								while($data=mysql_fetch_assoc($result))
								{
								?>
                        <div class="col-md-12 col-lg-12">
                            <h3 id="ContentPlaceHolder1_h4ProductName" class="blockhead"><?php echo $data['product_name'];?></h3>
                            <div class="inner-content">
                                <div class="col-sm-5 col-md-4 col-lg-4">
                                    <div id="examples">
                                       
                                                <img id="ContentPlaceHolder1_imgLarge" class="etalage_thumb_image" src="images/<?php echo $data['image'];?>" />
                                               
                                          
                                        <br clear="all" />
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-8 col-lg-8 proddesc">
                                    <div id="ContentPlaceHolder1_divDescription"><p><?php echo $data['discription'];?></p></div>
                                </div>
                                <br clear="all" />
                            </div>
                        </div>
                        <br />
                        <?php }?>
                    </div>
                    <br />
                </div>
            </div>
        </div>
    </div>
<?php include_once "includes/footer.php";?>