
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
                                    
										<form action="track_add_process.php" class="form-horizontal" method="post" enctype="multipart/form-data">
								
								<div class="control-group">
									<label class="control-label">AWB NO</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="awb" />
										</div>
								</div>
								<div class="control-group">
									<label class="control-label">Consignee</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="consignee" />
										</div>
								</div>
								<div class="control-group">
									<label class="control-label">Book Date</label>
										<div class="controls">
											<input type="date" class="span6 m-wrap" name="bookdate" />
										</div>
								</div>
								<div class="control-group">
									<label class="control-label">Country</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="country" />
										</div>
								</div>
								<div class="control-group">
									<label class="control-label">Status</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="status" />
										</div>
								</div>						
								<div class="control-group">			
									<label class="control-label">Delivery Date</label>	
									<div class="controls">		
									<input type="date" class="span6 m-wrap" name="ddate" />
									</div>			
								</div>
								<div class="control-group">			
									<label class="control-label">Receiver Name</label>	
									<div class="controls">		
									<input type="text" class="span6 m-wrap" name="rcvrname" />
									</div>			
								</div>
								<div class="control-group">			
									<label class="control-label">Website</label>
									<div class="controls">		
									<input type="text" class="span6 m-wrap" name="web" />
									</div>			
								</div>
								<div class="control-group">			
									<label class="control-label">forwarding No</label>
									<div class="controls">		
									<input type="text" class="span6 m-wrap" name="forwn" />
									</div>			
								</div>
								
							<!--	<div class="control-group">
										<label class="control-label">											Category Description										</label>
										<div class="controls">
											<textarea class="span12 ckeditor m-wrap" name="description" rows="6"></textarea>
										</div>
								</div><div class="control-group">
									<label class="control-label">Order</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="order" />
										</div>
								</div>-->

								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="cancle" class="btn" >Cancel</button>                            
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