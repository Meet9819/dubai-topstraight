
<!doctype html>
<html class="fixed">
<head>
		<meta charset="UTF-8">
		<title>Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />		
        <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
		<script src="assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">
			<?php include("header.php"); 
			include("include/nicePaging.php");
include("include/config.inc.php");
include("include/database.class.php");
			?>
			<div class="inner-wrapper">
					<?php include ("menu.php"); ?>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>List Of Products</h2>
					</header>
						<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
                                 <form id="mainform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<thead>
										<tr>
											<th>No.</th>
											<th> Name</th>
											<th>Categories</th>
                                            
                                           
                                          
                                   			<th> Action</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
                                        <?php
		$count=1;
		$objDB = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
		$objDB->connect();
		$rowsPerPage=100000;
		$paging=new nicePaging();
		$result=$paging->pagerQuery("SELECT * FROM tbl_homepro", $rowsPerPage);
		$total_id = '0';
		$tmpid=1;
		while($data=mysql_fetch_assoc($result))
		{
			$total_id .= ",".$tmpid;
			$xid=$data['homepro_id'];
			 echo   '<td>'.$count++.'</td>';
			echo    '<td >'.$data['homepro_name'].'</td>';
				$tmpx=$data['category_id'];
				$result1=mysql_query("select category_name from tbl_category where category_id=$tmpx");
				if(isset($result1))
				{
					$tmp_val = mysql_fetch_row($result1);
					echo    '<td>'.$tmp_val[0].'</td>';								
				}
				else
				{
					echo    '<td><font face="times new roman" color="#333333">No Category For These Product</font></td>';
					
				}
				
			
			
			echo    '<td>';
			echo    '<div class="col-sm-6 text-right">';
			echo	'<a href="edit_homepro.php?eid='.$xid.'"><button type="update" class="btn btn-primary hidden-xs">Update</button></a>';
			echo	'</div>';
            echo    '<div class="col-sm-2 text-right">';
			echo    '<a href="delete_homepro.php?eid='.$xid.'"><button type="delete" class="btn btn-primary hidden-xs">Delete</button></a>';
			echo	'</div>';
			echo	'</td>';
		    echo  	'</tr>';
			$tmpid++;
		}
		echo '<input type="hidden" name="total_ids" size="2" value='.$total_id.' />';
		$link="view_product.php"; // Page name
	?>
										</tr>
									</tbody>
                                    </form>
								</table>
							</div>
						</section>
				</section>
			</div>
		</section>
		<script src="assets/vendor/jquery/jquery.js"></script>		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="assets/vendor/style-switcher/style.switcher.js"></script>		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
<script src="assets/vendor/select2/select2.js"></script>		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="assets/javascripts/theme.js"></script>
		<script src="assets/javascripts/theme.custom.js"></script>
		<script src="assets/javascripts/theme.init.js"></script>
		<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
	</body>
</html>