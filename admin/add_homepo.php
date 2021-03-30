
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
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />		<link rel="stylesheet" href="assets/vendor/dropzone/css/basic.css" />		<link rel="stylesheet" href="assets/vendor/dropzone/css/dropzone.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />		<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />		<link rel="stylesheet" href="assets/vendor/codemirror/lib/codemirror.css" />		<link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
		<script src="assets/vendor/modernizr/modernizr.js"></script>
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
<link rel="stylesheet" href="assets/stylesheets/theme.css" />
<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
<script src="assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">
			<?php include("header.php");
			include("include/config.inc.php");
include("include/database.class.php");
$objDB = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$objDB->connect();
			 ?>
             <script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>
			<div class="inner-wrapper">
				<?php include ("menu.php"); ?>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Add New Project</h2>
					</header>
						<div class="row">
							<div class="col-xs-12">
								<section class="panel">
									<div class="panel-body">
										<form class="form-horizontal form-bordered" name="mainform" method="post" enctype="multipart/form-data" onSubmit="return checkfrm()">
                                         <?php
 define ("MAX_SIZE","2024"); 
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
	 if($image1)
	 {
 		$filename = stripslashes($_FILES['image']['name']);
  		$extension = getExtension($filename);
	 	$extension = strtolower($extension);
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
		{
			echo '<h1>Please upload the image only extension (Jpg, Jpeg, Gif or Png).!</h1>';
			$errors=1;
		}
		else
		{
	 		$size=filesize($_FILES['image']['tmp_name']);
			if ($size > MAX_SIZE*1024)
			{
				echo '<h1>The size of image is not more than 2 MB.!</h1>';
				$errors=1;
			}
			$image_name=microtime().'.'.$extension;
			$newname="../images/".$image_name;
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
	$resizeObj -> resizeImage(0,0, 'exact');
	$resizeObj -> saveImage('../images/'.$image_name.'', 100);
	$ColumName= array('category_id','homepro_name');
	$ColumValue= array($_REQUEST['pcat'],$_REQUEST['pname']);
	$objDB->insert('tbl_homepro',$ColumName,$ColumValue);
	print "<META http-equiv='refresh' content='0;URL=view_honepro.php'>";		
}
?>
                                            <div class="form-group mb-lg">
								            <label class="col-md-2 control-label">Name</label>
                                            <div class="col-md-7">
								            <input name="pname" type="text" class="form-control input-lg" onKeyPress="return blockSpecialChar(event)" maxlength="40" required/>
                                            </div>
							                </div>
											<div class="form-group">
												<label class="col-md-2 control-label">Category</label>
												<div class="col-md-7">
													<select data-plugin-selectTwo class="form-control populate" name="pcat">
														<?php
				  $result2=mysql_query("select category_id,category_name from tbl_category");
				  if(isset($result2))
				  {
					  
					  while($tmpval = mysql_fetch_assoc($result2))
					  {
						  echo '<option value="'.$tmpval['category_id'].'"> '.$tmpval['category_name'].'</option>';
						  }
				   	}
				  ?>																					
																												
													</select>
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
        <script src="assets/vendor/jquery/jquery.js"></script> <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script> <script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script> <script src="assets/vendor/style-switcher/style.switcher.js"></script> <script src="assets/vendor/bootstrap/js/bootstrap.js"></script> <script src="assets/vendor/nanoscroller/nanoscroller.js"></script> <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> <script src="assets/vendor/magnific-popup/magnific-popup.js"></script> <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script> 
<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script> <script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
<script src="assets/javascripts/theme.js"></script> 
<script src="assets/javascripts/theme.custom.js"></script> 
<script src="assets/javascripts/theme.init.js"></script> 
<script>		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	</body>
</html>