<!doctype html>
<html class="fixed">
	
<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.3.0/tables-advanced.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 29 Dec 2014 11:15:51 GMT -->
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Advanced Tables | Porto Admin - Responsive HTML5 Template 1.3.0</title>
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

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
						<h2>Add New Category</h2>
					
						
					</header>

					<!-- start: page -->
						<section class="panel">
							
							<div class="panel panel-sign">
					
					<div class="panel-body">
						<form >
                          <?php
if(isset($_REQUEST['SAVE'])) 
{
	$ColumName= array('homecat_name');
	$ColumValue= array($_REQUEST['pname']);
	$objDB->Update('tbl_homecat','homecat_id',$_REQUEST['cid'],$ColumName,$ColumValue);
	$objDB->close();
	print "<META http-equiv='refresh' content='0;URL=view_homecat.php'>";	
	exit;
}
?>

              <?php
			  echo '<input type="hidden" name="cid" value="'.$_REQUEST['eid'].'" />';
		$tempid= $_REQUEST['eid'];
		$result=mysql_query("select * from tbl_homecat where homecat_id=$tempid") or die("error");
		if(isset($result))
		{
			$tmp_val = mysql_fetch_row($result);
	  ?>
                         
							<div class="form-group mb-lg">
								<label class="col-md-2 control-label">Category Name</label>
								<div class="col-md-7">
								<input name="pname" type="text" class="form-control input-lg" value="<?php  echo $tmp_val[1];  ?>" />
                                </div>
							</div>

							<div class="mb-xs text-center">
                            
							   
                               <button type="submit" class="mb-xs mt-xs mr-xs btn btn-success" name="SAVE">Update</button>
                              
								
								<button type="reset" class="mb-xs mt-xs mr-xs btn btn-success">Reset </button>
							</div>

							

							

							

							
 <?php

		}
		?>
							
		</form>
       
				
					</div>
				</div>
						</section>
						
						
						
						
					<!-- end: page -->
				</section>
			</div>

			
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="assets/vendor/style-switcher/style.switcher.js"></script>		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="assets/vendor/select2/select2.js"></script>		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>

		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.3.0/tables-advanced.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 29 Dec 2014 11:16:04 GMT -->
</html>