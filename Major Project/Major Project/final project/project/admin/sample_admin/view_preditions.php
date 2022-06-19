<?php 

require_once __DIR__.'/db_connect.php';

$db = new DB_CONNECT();

$conn = $db->connect();

ob_start();
session_start();

$lgid = $_SESSION['login_id'];

?>

<?php include 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title> View Predictions</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content=""/>
<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">


<!-- Jasny-bootstrap CSS -->
<link href="../../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>

<!-- Custom CSS -->
<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body onload="getvalues();">
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
<h5 class="txt-dark">Create Predictions</h5>
</div>
<!-- Breadcrumb -->
<!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
<li><a href="index.html">Dashboard</a></li>
<li><a href="#"><span>form</span></a></li>
<li class="active"><span>form-element</span></li>
</ol>
</div> -->
<!-- /Breadcrumb -->
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<!-- <h6 class="panel-title txt-dark">Basic Form</h6> -->
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">

<?php 

    
    if(isset($_SESSION['prdinsids'])){

      
    $prdinsids = base64_decode($_SESSION['prdinsids']);

    //unset($_SESSION['prdinsids']);

    $ids = explode(',', $prdinsids);




 ?>



<div class="panel-body">
<div class="form-wrap">
<form action="insert_predictionimages.php" method="post" enctype="multipart/form-data">




<?php 

  foreach ($ids as $key => $value) {
      
      $id = $ids[$key];

      //echo $id;

      $prdquery = mysqli_query($conn,"SELECT * FROM accident_prediction WHERE prediction_id='$id'");

      $prdfetch = mysqli_fetch_array($prdquery);

?>

<div class="row">

<div class="col-md-3">
<label class="control-label mb-10">Country</label> 
<input type="text" name="country[]" class="form-control" placeholder="Enter Country" readonly value="<?php echo $prdfetch['prediction_country'] ?>" required>

</div>
<!--/span-->

<div class="col-md-3">
<label class="control-label mb-10">State</label> 
<input type="text" name="state[]" class="form-control" placeholder="Enter State" value="<?php echo $prdfetch['prediction_state'] ?>" readonly required>

</div>


<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10">Vehicle Name</label>
<input type="text" name="vech_name[]" class="form-control" placeholder="Enter Vehicle Name" value="<?php echo $prdfetch['prediction_vehiclenmae'] ?>" readonly required>
</div>
</div>

<input hidden="true" type="text" name="prdids[]" value="<?php echo $id?>">

<div class="col-md-3">
<div class="form-group">
<label class="control-label mb-10">Model Image</label>
<input type="file" name="prdimage[]" accept="image/*" class="form-control" placeholder="" required>

</div>
</div>

<!--/span-->
</div>

<?php } ?>



<button type="submit" name="submit" class="btn btn-danger">Submit</button>

<a href="view_modelsection.php"><button type="button" name="cancel" class="btn btn-danger">Cancel</button>
</a>

</form>
</div>
</div>


<?php }else{?>

<div class="alert alert-danger alert-dismissable alert-style-1">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="zmdi zmdi-block"></i>Opps! Somthing went wrong. 
</div>

<?php } ?>

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

<script src="../../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

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

<script type="text/javascript">

$(document).ready(function(){

var counter = 2;

$("#addunits").click(function () {

if(counter>50){
alert("Only 50 are allowed");
return false;
}   

var newTextBoxDiv1 = $(document.createElement('div'))
.attr("id", 'textboxdiv2' + counter);


newTextBoxDiv1.after().html('<div class="row"><div class="col-md-3"><div class="form-group"><label class="control-label mb-10">Bag Size</label><input type="text" name="bagsize[]" class="form-control" placeholder="Enter Size"></div></div>' 
  + 
  '<div class="col-md-3"><div class="form-group"><label class="control-label mb-10">Bag GSM</label><input type="text" name="baggsm[]" class="form-control" placeholder="Enter GSM"></div></div>' +

  '<div class="col-md-3"><div class="form-group"><label class="control-label mb-10">Bags(Per KG)</label><input type="text" name="bagsperkg[]" class="form-control" placeholder="Enter No. Of Bags Per KG"></div></div>' +

  '<div class="col-md-3"><div class="form-group"><label class="control-label mb-10">Bag Cost With Printing</label><input type="text" name="bagcostwithprinting[]" class="form-control" placeholder="Enter Bag Cost With Printing"></div></div>'+ 

  '</div>');


newTextBoxDiv1.appendTo("#textboxesgroup2");

counter++;
});

$("#removeunits").click(function () {
if(counter==1){
alert("No more to remove");
return false;
}   

counter--;

$("#textboxdiv2" + counter).remove();


});

});
</script>

</html>