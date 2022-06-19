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
<title>All Accepted Data Sets | A Road Accident Prediction</title>
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
<h5 class="txt-dark">Road Accident Prediction</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
<li><a href="">Dashboard</a></li>
<li class="active"><span>Accepted Road Accident Prediction</span></li>
</ol>
</div>
<!-- /Breadcrumb -->
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Verified Data Sets</h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">

<?php 

	$prdquery = mysqli_query($conn,"SELECT * FROM accident_prediction WHERE prediction_status='Verified'");

	if(mysqli_num_rows($prdquery)>0){

	

?>


<div class="table-wrap">
<div class="table-responsive">
<table id="datable_1" class="table table-bordered table-hover display dataTable" >
<thead style="background-color: #177ec1;color: #ffffff ">
<tr>
<th style="color:white;">Area</th>
<th style="color:white;">Date</th>
<th style="color:white;">Time</th>
<th style="color:white;">Vehicle Type</th>
<th style="color:white;">Traffic Violation</th>
<th style="color:white;">Weather</th>
<th style="color:white;">Gender</th>
<th style="color:white;">Status</th>
<th style="color:white;">More Details</th>
</tr>
</thead>
<tbody>

<?php 
	
	$i = 1;
	while($prdfetch = mysqli_fetch_array($prdquery)){

?>	

<tr>
<td >
<strong><code><?php echo $prdfetch['prediction_area'] ?></code></strong>
</td>

<?php 

	$new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $prdfetch["prediction_cdate"] );
	$date = $new_datetime->format('d/m/y');

?>

<td><?php echo $date ?></td>
<td><?php echo $prdfetch['prediction_accidenttime'] ?></td>
<td><?php echo $prdfetch['prediction_vehiclenmae'] ?></td>
<td><?php echo $prdfetch['prediction_rulesviolation'] ?></td>
<td><?php echo $prdfetch['prediction_weather'] ?></td>
<td><?php echo $prdfetch['prediction_gender'] ?></td>

<td><span class="label label-primary"><?php echo $prdfetch['prediction_status'] ?></span></td>

<td class="text-nowrap" align="center">

<a target="_blank" style="color:#2f90b2;" href="" class="mr-25" data-original-title="Edit">
<i class="fa fa-eye text-inverse m-r-10" aria-hidden="true"></i>
</a>




<a href="delete_prediction2.php?prdid=<?php echo $prdfetch['prediction_id'] ?>" onclick='return confirm_alert(this);'  data-original-title="Delete"> <i class="fa fa-trash text-danger"></i> </a> 



</td>
</tr>

<?php $i++; } ?>




</tbody>
</table>
</div>
</div>


<script>
function confirm_alert(node) {
return confirm("You are about to permanently DELETE a record. Click OK to continue or CANCEL to quit.");
}
</script>


<?php }else{?>


<div align="center" class="mt-30 mb-50"><sup><i class="fa fa-quote-left" aria-hidden="true"></i></sup><spam style="font-size: 20px;">&nbsp; Details Not Found&nbsp;&nbsp;</spam><sup><i class="fa fa-quote-right" aria-hidden="true"></i></sup>
</div>

<?php } ?>

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

</body>
</html>
