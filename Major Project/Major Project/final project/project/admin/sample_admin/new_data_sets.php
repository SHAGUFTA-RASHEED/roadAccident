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

<!-- Morris Charts CSS -->
<link href="../../vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

<!-- vector map CSS -->
<link href="../../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>

<!-- Data table CSS -->
<link href="../../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

<!-- Chartist CSS -->
<link href="../../vendors/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css"/>

<link href="../../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="dist/css/style.css" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


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
<li class="active"><span>New Road Accident</span></li>
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
<h6 class="panel-title txt-dark">New Data Sets</h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">

<?php 

	$prdquery = mysqli_query($conn,"SELECT * FROM accident_prediction WHERE prediction_status='Not Verified'");

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

<a class="" data-toggle="modal" data-target=".bs-example-modal-lgc<?php echo $i ?>" href="" style="color: #177ec1;"><i class="fa fa-file text-inverse" aria-hidden="true"></i></a>





<div class="modal fade bs-example-modal-lgc<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg">

<form method="post" action="update_predictionstatus.php" enctype="multipart/form-data">

<div class="modal-content">

<div  class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h5 class="modal-title" id="myLargeModalLabel">
<code><strong>Update Status</strong></code>
</h5>
</div>

<div  align="left" class="modal-body">
<div class="row">


<div class="col-md-12">
<div class="form-group">
<label class="control-label mb-10 text-left"> Status *</label>
<select class="form-control" name="prd_status" id="prd_status" required>
<option value="" >Select Status</option>
<option>Verified</option>
<option>Not Verified</option>
<option>Rejected</option>

</select>
</div>
</div>


</div>          
</div>

<div hidden="true">
    
<input type="text" name="prd_id" id="prd_id" value="<?php echo $prdfetch['prediction_id'] ?>">



</div>


<div class="modal-footer">

<button type="submit" name="submit" class="btn btn-success text-left" >Save</button>


<a href="">
<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Cancel</button>
</a>
</div>
</div>

</form>

</div>
</div>


<a href="delete_prediction.php?prdid=<?php echo $prdfetch['prediction_id'] ?>" onclick='return confirm_alert(this);'  data-original-title="Delete"> <i class="fa fa-trash text-danger"></i> </a> 



</td>
</tr>

<?php $i++; } ?>


</tbody>
</table>
</div>
</div>

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


<script>
function confirm_alert(node) {
return confirm("You are about to permanently DELETE a record. Click OK to continue or CANCEL to quit.");
}
</script>


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

<!-- Counter Animation JavaScript -->
<script src="../../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../../vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Data table JavaScript -->
<script src="../../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../../vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="../../vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
<script src="../../vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>

<script src="../../vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../../vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="dist/js/export-table-data.js"></script>

<!-- Owl JavaScript -->
<script src="../../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="../../vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Sparkline JavaScript -->
<script src="../../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../../vendors/bower_components/raphael/raphael.min.js"></script>
<script src="../../vendors/bower_components/morris.js/morris.min.js"></script>

<!-- Chartist JavaScript -->
<script src="../../vendors/bower_components/chartist/dist/chartist.min.js"></script>
<script src="dist/js/chartist-data.js"></script>

<!-- ChartJS JavaScript -->
<script src="../../vendors/chart.js/Chart.min.js"></script>

<script src="../../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
<script src="dist/js/dashboard3-data.js"></script>


</body>
</html>


