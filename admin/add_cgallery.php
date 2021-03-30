
<!doctype html>
<html class="fixed">
	
<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.3.0/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 29 Dec 2014 11:14:49 GMT -->
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Advanced Forms | Porto Admin - Responsive HTML5 Template 1.3.0</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />		<link rel="stylesheet" href="assets/vendor/dropzone/css/basic.css" />		<link rel="stylesheet" href="assets/vendor/dropzone/css/dropzone.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />		<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />		<link rel="stylesheet" href="assets/vendor/codemirror/lib/codemirror.css" />		<link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

<!-- Theme CSS -->
<link rel="stylesheet" href="assets/stylesheets/theme.css" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

<!-- Head Libs -->
<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include("header.php");
			include("include/config.inc.php");
include("include/database.class.php");
$objDB = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$objDB->connect();

			
			 ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include ("menu.php"); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Add New Products</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index-2.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Advanced</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-xs-12">
								<section class="panel">
									
									<div class="panel-body">
                                    
										<form class="form-horizontal form-bordered" name="mainform" method="post" enctype="multipart/form-data" onSubmit="return checkfrm()">
                                         <?php
									
					
  //define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","2024"); 
//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) 
 {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 $errors=0;
 if(isset($_REQUEST['SAVE'])) 
 {
	 $image1=$_FILES['image']['name'];
	 //if it is not empty
	 if($image1)
	 {
		 //get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['image']['name']);
 		//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
	 	$extension = strtolower($extension);
	 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
		//otherwise we will do more tests
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
		{
			//print error message
			echo '<h1>Please upload the image only extension (Jpg, Jpeg, Gif or Png).!</h1>';
			$errors=1;
		}
		else
		{
			//get the size of the image in bytes
			 //$_FILES['image']['tmp_name'] is the temporary filename of the file
	 		//in which the uploaded file was stored on the server
	 		$size=filesize($_FILES['image']['tmp_name']);
			//compare the size with the maxim size we defined and print error if bigger
			if ($size > MAX_SIZE*1024)
			{
				echo '<h1>The size of image is not more than 2 MB.!</h1>';
				$errors=1;
			}
			//we will give an unique name, for example the time in unix time format
			$image_name=microtime().'.'.$extension;
			//the new name will be containing the full path where will be stored (images folder)
			$newname="../images/".$image_name;
			//we verify if the image has been uploaded, and print error instead
			$copied = copy($_FILES['image']['tmp_name'], $newname);
			if (!$copied) 
			{
				echo '<h1>Copy unsuccessfull!</h1>';
				$errors=1;
			}
		}
	 }
}

if(isset($_REQUEST['SAVE']) && !$errors) 
{
	include("include/resizeclass.php");
	$resizeObj = new resize('../images/'.$image_name.'');
	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(0,0, 'exact');
	// *** 3) Save image
	$resizeObj -> saveImage('../images/'.$image_name.'', 100);
	$ColumName= array('cname','cimg');
	$ColumValue= array($_REQUEST['pname'],$_REQUEST['pdescription']);
	$objDB->insert('clientimg',$ColumName,$ColumValue);
	print "<META http-equiv='refresh' content='0;URL=view_cgallery.php'>";		
}
?>
                                            <div class="form-group mb-lg">
								            <label class="col-md-2 control-label">Product Name</label>
                                            <div class="col-md-7">
								            <input name="pname" type="text" class="form-control input-lg" />
                                            </div>
							                </div>
											
                                            
                                            
						                    
											<div class="form-group">
												<label class="col-md-2 control-label">Image</label>
												<div class="col-md-7">
													 <?php
				  include("../FCKeditor/fckeditor.php");
				  $sBasePath = "../FCKeditor/"; //where the source files are located
				  $oFCKeditor = new FCKeditor('pdescription') ;
				  $oFCKeditor->BasePath	= $sBasePath ;
				  $oFCKeditor->Value	= '';
				  $oFCKeditor->Width  = '700' ;
				  $oFCKeditor->Height = '400' ;
				  $oFCKeditor->Create();

				  
				  
				  ?>
												</div>
											</div>
                                                  <div class="mb-xs text-center">
                            
							   
                               <button type="submit" class="mb-xs mt-xs mr-xs btn btn-success" name="SAVE">Add New Category </button>
                              
								
								<button type="reset" class="mb-xs mt-xs mr-xs btn btn-success">Reset </button>
							</div>
                                        </form>
                                        <br>
                                        
                                        <br>
                                        
									</div>
								</section>
							</div>
						</div>
						
							
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						

			
		</section>
</div>
		<!-- Vendor -->
        <script src="assets/vendor/jquery/jquery.js"></script> <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script> <script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script> <script src="assets/vendor/style-switcher/style.switcher.js"></script> <script src="assets/vendor/bootstrap/js/bootstrap.js"></script> <script src="assets/vendor/nanoscroller/nanoscroller.js"></script> <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> <script src="assets/vendor/magnific-popup/magnific-popup.js"></script> <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script> 

<!-- Specific Page Vendor --> <script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script> <script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 

<!-- Theme Base, Components and Settings --> 
<script src="assets/javascripts/theme.js"></script> 

<!-- Theme Custom --> 
<script src="assets/javascripts/theme.custom.js"></script> 

<!-- Theme Initialization Files --> 
<script src="assets/javascripts/theme.init.js"></script> 
<!-- Analytics to Track Preview Website --> <script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		
	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.3.0/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 29 Dec 2014 11:15:44 GMT -->
</html>