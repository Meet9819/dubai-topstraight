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
			include("include/nicePaging.php");
include("include/config.inc.php");
include("include/database.class.php");
			
			?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
					<?php include ("menu.php"); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>List Of Products</h2>
					
						
					</header>

					<!-- start: page -->
						<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
							
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
                                 <form id="mainform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<thead>
										<tr>
											<th>No.</th>
											<th>Product Name</th>
											
                                           <th> discription</th>
                                             <th> Image</th>
                                             
                                   			<th> Action</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
                                        <?php
		//	Code For Display Categorey List
		$count=1;
		$objDB = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
		$objDB->connect();
		$rowsPerPage=1000;
		$paging=new nicePaging();
		$result=$paging->pagerQuery("SELECT * FROM clientimg", $rowsPerPage);
		$total_id = '0';
		$tmpid=1;
		while($data=mysql_fetch_assoc($result))
		{
			//display the content of table.
			
			$total_id .= ",".$tmpid;
			$xid=$data['cid'];
			 echo   '<td>'.$count++.'</td>';
			echo    '<td >'.$data['cname'].'</td>';
			echo    '<td >'.$data['discription'].'</td>';				
			
			echo    '<td><img src="../images/'.$data['image'].'" width="100" height="70" /></td>';
			
			
			echo    '<td>';
			echo    '<div class="col-sm-6 text-right">';
			echo	'<a href="edit_clients.php?eid='.$xid.'"><button type="update" class="btn btn-primary hidden-xs">Update</button></a>';
			echo	'</div>';
            echo    '<div class="col-sm-2 text-right">';
			echo    '<a href="delete_clients.php?eid='.$xid.'"><button type="delete" class="btn btn-primary hidden-xs">Delete</button></a>';
			echo	'</div>';
			echo	'</td>';
		    echo  	'</tr>';
			$tmpid++;
		}
		echo '<input type="hidden" name="total_ids" size="2" value='.$total_id.' />';
		$link="view_clients.php"; // Page name
		// Create links for paging			
	?>
											
											
										</tr>
										
									</tbody>
                                    </form>
								</table>
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
</html>s