<?php 

require_once __DIR__.'/db_connect.php';

$db = new DB_CONNECT();

$conn = $db->connect();

ob_start();
session_start();



?>

<?php include 'session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Create Bulk Enty | A Road Accident Prediction</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content=""/>

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- Data table CSS -->
<link href="../../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

<!-- select2 CSS -->
<link href="../../vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>

<!-- bootstrap-select CSS -->
<link href="../../vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

<!-- multi-select CSS -->
<link href="../../vendors/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>

<!-- Custom CSS -->
<link href="dist/css/style.css" rel="stylesheet" type="text/css">

<!-- Bootstrap Colorpicker CSS -->
<link href="../../vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css"/>

<!-- select2 CSS -->
<link href="../../vendors/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>

<!-- switchery CSS -->
<link href="../../vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>

<!-- bootstrap-select CSS -->
<link href="../../vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

<!-- bootstrap-tagsinput CSS -->
<link href="../../vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>

<!-- bootstrap-touchspin CSS -->
<link href="../../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css"/>

<!-- multi-select CSS -->
<link href="../../vendors/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>

<!-- Bootstrap Switches CSS -->
<link href="../../vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>

<!-- Bootstrap Datetimepicker CSS -->
<link href="../../vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>

<!-- Jasny-bootstrap CSS -->
<link href="../../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- Bootstrap Dropify CSS -->
<link href="../../vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>

<!-- Custom CSS -->
<link href="dist/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<!--Preloader-->
<div class="preloader-it">
<div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<div class="wrapper theme-1-active pimary-color-red">

<!-- Top Menu Items -->
<?php include("include_sidebar_top_menu.php"); ?>
<!-- /Top Menu Items -->

<!-- Left Sidebar Menu -->
<?php include("include_left_sidebar_menu.php"); ?>
<!-- /Left Sidebar Menu -->

<!-- Right Sidebar Menu -->
<?php include("include_right_sidebar_menu.php"); ?>
<!-- /Right Sidebar Menu -->

<!-- Right Setting Menu -->
<?php include("include_right_sidebar_menu.php"); ?>
<!-- /Right Setting Menu -->

<!-- Right Sidebar Backdrop -->
<div class="right-sidebar-backdrop"></div>
<!-- /Right Sidebar Backdrop -->

<!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">

<!-- Title -->
<div class="row heading-bg">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-dark">Create Road Accident Prediction</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
<li><a href="">Dashboard</a></li>
<li class="active"><span>Road Accident Prediction</span></li>
</ol>
</div>
<!-- /Breadcrumb -->
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-wrapper collapse in">
<div class="panel-body">	
<div class="form-wrap">
<form action="insert_prediction_csv.php" method="post" enctype="multipart/form-data">
<label class="control-label mb-10 text-left">
<strong>*Note: The CSV file should be in the given format <a href=""><code>example.csv <i class="fa fa-download mr-30"></i></code></a>
</strong>
</label>
<div class="col-sm-12 ol-md-6 col-xs-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">File Upload (Accident Data Collection)</h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">
<div class="mt-40">
<input type="file" id="prd_file" name="prd_file" class="dropify" data-max-file-size="2M" />
</div>	
</div>
</div>
</div>
</div>
<br>
<button type="submit" name="submit" class="btn btn-success">Submit</button>

<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Cancel</button>
</form>
</div>
</div>
</div>	
</div>
</div>
</div>
<!-- /Row -->

</div>

<!-- Footer -->
<?php include("footer.php"); ?>			
<!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Data table JavaScript -->
<script src="../../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="dist/js/dataTables-data.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Owl JavaScript -->
<script src="../../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="../../vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>

<!-- Form Advance Init JavaScript -->
<script src="dist/js/form-advance-data.js"></script>

<!-- jQuery -->
<script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Moment JavaScript -->
<script type="text/javascript" src="../../vendors/bower_components/moment/min/moment-with-locales.min.js"></script>

<!-- Bootstrap Colorpicker JavaScript -->
<script src="../../vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

<!-- Switchery JavaScript -->
<script src="../../vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Select2 JavaScript -->
<script src="../../vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- Bootstrap Select JavaScript -->
<script src="../../vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Bootstrap Tagsinput JavaScript -->
<script src="../../vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<!-- Bootstrap Touchspin JavaScript -->
<script src="../../vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

<!-- Multiselect JavaScript -->
<script src="../../vendors/bower_components/multiselect/js/jquery.multi-select.js"></script>


<!-- Bootstrap Switch JavaScript -->
<script src="../../vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>

<!-- Bootstrap Datetimepicker JavaScript -->
<script type="text/javascript" src="../../vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- Form Advance Init JavaScript -->
<script src="dist/js/form-advance-data.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Owl JavaScript -->
<script src="../../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>

<!-- jQuery -->
<script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap Daterangepicker JavaScript -->
<script src="../../vendors/bower_components/dropify/dist/js/dropify.min.js"></script>

<!-- Form Flie Upload Data JavaScript -->
<script src="dist/js/form-file-upload-data.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Owl JavaScript -->
<script src="../../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="../../vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>

</body>
</html>
