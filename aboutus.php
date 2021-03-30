<?php include_once "includes/header.php";?>
<?php include_once "includes/manu.php";?>        
 <div class="jb-subheader subheader-height">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        About us</h1>
                </div>
                <div class="col-md-6">
                    <ul class="jb-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About</a></li>
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
                                About<span> Us</span></h3>
                            <div class="clearfix">
                            </div>
                            <div id="ContentPlaceHolder1_lblCms"><p><?php 
						$result=mysql_query("SELECT * FROM cmsmain WHERE CmsId=2");
						while($data=mysql_fetch_assoc($result))
						{
						?>
                        <?php echo $data['CmsContent'];}?></p></div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
    </div>
<?php include_once "includes/footer.php";?>