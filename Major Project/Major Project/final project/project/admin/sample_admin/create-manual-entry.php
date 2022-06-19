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
<title>Create Manual Enty | A Road Accident Prediction</title>
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
<form action="insert_prediction.php" method="post" enctype="multipart/form-data">

<div class="form-body">
<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-globe mr-10"></i>Select Geo Location</h6>
<hr class="light-grey-hr"/>

<div class="row">

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Select County *</label>
<select class="form-control" name="country" id="" required="">
<option value="">Select Your County *</option>
<option>India</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Select  States *</label>
<select class="form-control" name="state" id="" required="">
<option value="">Select Your States</option>
<option>Telangana</option>
<option>Andhra Pradesh</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Select Cities *</label>
<select class="form-control" name="city" id="" required="">
<option value="">Select Your Cities *</option>
<option>Hyderabad</option>
<option>Nizamabad</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Section Place *</label>
<select class="form-control" name="place" id="" required="">
<option value="">Select Your Place</option>
<option>Urban</option>
<option>Rural</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Area *</label>
<select class="form-control" name="area" id="" required="">
<option value="">Select Your Area</option>
<option>Residental Area</option>
<option>Institutional Area</option>
<option>Market</option>
<option>Commercial Area</option>
<option>Open Area</option>
<option>Other</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Junction *</label>
<select class="form-control" name="junction" id="" required="">
<option value="">Select Your Junction</option>
<option>T-Junction</option>
<option>Y-Junction</option>
<option>Four Arm Junction</option>
<option>Staggered Junction</option>
<option>Round about Junction</option>
<option>Others</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Lattitude *</label>
<input type="text" class="form-control" placeholder="Enter Lattitude" name="lattitude">
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Longitude *</label>
<input type="text" class="form-control" placeholder="Enter Longitude" name="longitude">
</div>
</div>

</div>
<br>

<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-car mr-10"></i>Create Vehicle Details</h6>
<hr class="light-grey-hr"/>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10 text-left">Vehicle Name *</label>
<input type="text" class="form-control" name="vech_name" placeholder="Enter Vehicle Name">
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Vehicle Type *</label>
<select class="form-control" name="vech_type" id="" required="">
<option value="">Select Vehicle Type</option>
<option>Pedestrian</option>
<option>Bicycle</option>
<option>Moter Cycle</option>
<option>Auto Rickshaws</option>
<option>4 Wheel Car</option>
<option>4 wheel truck</option>
<option>Mini Bus</option>
<option>Bus</option>
<option>Mini Bus</option>
<option>Lorry</option>
<option>6 Wheel</option>
<option>12 Wheeler Truck</option>
<option>Others</option>
</select>
</div>
</div>													
<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Select License *</label>
<select class="form-control" name="lic_type" id="" required="">
<option value="">Select Your License</option>
<option>License valid Parmanent</option>
<option>Learning License</option>
<option>Without License</option>
</select>
</div>
</div>
<!--
<div class="col-sm-3">
<div class="form-group">
<label class="control-label mb-10 text-left">time pick (HH:MM:SS)</label>
<div class="input-group date" id="datetimepicker2">
<input type="text" class="form-control" placeholder="00:60:00">
<span class="input-group-addon">
<span class="fa fa-clock-o"></span>
</span>
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Required Pass Mark *</label>
<input type="text" class="form-control" placeholder="Enter Required Pass Mark Ex: 30">
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Credit For Right Answer *</label>
<input type="text" class="form-control" placeholder="Enter Right Answer Credit: Ex: 1">
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Credit For Negative Answer *</label>
<input type="text" class="form-control" placeholder="Enter Negative Answer: Ex: 2">
</div>
</div>
-->
<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Vehicle Age *</label>
<select class="form-control" name="vech_age" id="" required="">
<option value="">Select Your Vehicle Age</option>
<option>Less then 5 Years</option>
<option>5.1-10 Years</option>
<option>10.1-15 Years</option>
<option>> 15 Years</option>
<option>Age not known</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Vehicle Load *</label>
<select class="form-control" name="vech_load" id="vech_load" required="">
<option value="">Select Vehicle Load</option>
<option>Normal Loaded</option>
<option>Overloaded/Hangin</option>
<option>Others</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Traffic Rules Violation *</label>
<select class="form-control" name="traf_violation" id="traf_violation" required="">
<option value="">Select Traffic Rules Violation</option>
<option>Over Speeding</option>
<option>Drunking Driving</option>
<option>Consumption of Alcohol</option>
<option>Consumption of Drugs</option>
<option>Driving on Wrong Side</option>
<option>Jumping Red Light</option>
<option>Use of Mobile Phone</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group mb-30">
<label class="control-label mb-10 text-left">Upload Accident Image</label>
<div class="fileinput fileinput-new input-group" data-provides="fileinput">
<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
<input type="file" name="acd_image">
</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
</div>
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Accident Time (HH:MM:SS)</label>
<div class="input-group date" id="datetimepicker2">
<input type="text" class="form-control" placeholder="00:60:00" name="acd_time">
<span class="input-group-addon">
<span class="fa fa-clock-o"></span>
</span>
</div>
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Total Members In Vehicle</label>
<input type="text" class="form-control" placeholder="Enter Total Members In Vehicle" name="memembers_invech">
</div>
</div>

<div class="col-md-6">
<div class="form-group mb-30">
<label class="control-label mb-10 text-left">Accident Short Description *</label>
<textarea class="form-control" placeholder="Enter Short Description About Accident Here." name="shrt_desc" rows="5"></textarea>
</div>
</div>
</div>

<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-cloud mr-10"></i> Road Type & Wether</h6>
<hr class="light-grey-hr"/>

<div class="row">

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Select Road Type *</label>
<select class="form-control" name="road_type" id="road_type" required="">
<option value="">Select Road Type</option>
<option>Straight Road</option>
<option>Curved Road</option>
<option>Bridge</option>
<option>Culvert</option>
<option>Port Holes</option>
<option>Steep Grade</option>
<option>Ongoing Road works</option>
<option>Under Construction</option>
<option>Others</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Select  Weather *</label>
<select class="form-control" name="weather" id="weather" required="">
<option value="">Select Your Wether</option>
<option>Clear</option>
<option>Sunny</option>
<option>Rainy</option>
<option>Foggy</option>
<option>Misty</option>
<option>Hail</option>
<option>Sleet</option>
<option>Others</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Select Person Type *</label>
<select class="form-control" name="person_type" id="person_type" required="">
<option value="">Select Your Person Type *</option>
<option>Driver</option>
<option>Owners</option>
<option>Passengers</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Human's Age *</label>
<select class="form-control" name="age" id="age" required="">
<option value="">Select Age Group</option>
<option>18 Yrs</option>
<option>18-25 Yrs</option>
<option>25-35 Yrs</option>
<option>35-45 Yrs</option>
<option>45-60 Yrs</option>
<option>60 Yrs Above</option>
<option>Age not Know</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Gender *</label>
<select class="form-control" name="gender" id="gender" required="">
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>

</select>
</div>
</div>


<!--
<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Area *</label>
<select class="form-control" name="" id="" required="">
<option value="">Select Your Area</option>
<option>All</option>
<option>Residental Area</option>
<option>Institutional Area</option>
<option>Market</option>
<option>Commercial Area</option>
<option>Open Area</option>
<option>Other</option>
</select>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10 text-left">Junction *</label>
<select class="form-control" name="" id="" required="">
<option value="">Select Your Junction</option>
<option>All</option>
<option>T-Junction</option>
<option>Y-Junction</option>
<option>Four Arm Junction</option>
<option>Staggered Junction</option>
<option>Round about Junction</option>
<option>Others</option>
</select>
</div>
</div>
-->
</div>
<br>

<button type="submit" name="submit" class="btn btn-danger">Submit</button>
</div>
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

</body>
</html>
