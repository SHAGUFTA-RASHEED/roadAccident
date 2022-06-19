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
<title>All Accepted Data Sets | A Road Accident Prediction</title>
<meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="hencework"/>

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
<?php include('include_sidebar_top_menu.php'); ?>
<!-- /Top Menu Items -->

<!-- Left Sidebar Menu -->
<?php include('include_left_sidebar_menu.php'); ?>
<!-- /Left Sidebar Menu -->

<!-- Right Sidebar Menu -->
<?php include('include_right_sidebar_menu.php'); ?>
<!-- /Right Sidebar Menu -->

<!-- Right Setting Menu -->
<?php include('include_right_sidebar_menu.php'); ?>
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


<div style="color: #000" class="panel-wrapper collapse in">



<?php 
    

   $plcregquery = mysqli_query($conn,"SELECT * FROM accident_prediction");

	
	

	if(mysqli_num_rows($plcregquery)>0){


?>


<div class="panel-body mb-10">



<div class="table-wrap">
<div class="table-responsive">
<table  class="table table-bordered table-hover display" >
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

	
	
	$plcrefetch = mysqli_fetch_array($plcregquery);

?>


<tr>
<td align="center">
<strong><code><?php echo $prdfetch['prediction_area'] ?></code></strong>
</td>


<td><?php echo $date ?></td>
<td><?php echo $prdfetch['prediction_accidenttime'] ?></td>
<td><?php echo $prdfetch['prediction_vehiclenmae'] ?></td>
<td><?php echo $prdfetch['prediction_rulesviolation'] ?></td>
<td><?php echo $prdfetch['prediction_weather'] ?></td>
<td><?php echo $prdfetch['prediction_gender'] ?></td>

<td><span class="label label-primary">Not Verified</span></td>
<td class="text-nowrap" align="center">
<a target="_blank" style="color:#2f90b2;" href="" class="mr-25" data-original-title="Edit">
<i class="fa fa-eye text-inverse m-r-10" aria-hidden="true"></i>
</a>

<a target="_blank" style="color:#2f90b2;" href="" class="mr-25" data-original-title="Edit"> 
<i class="fa fa-trash text-inverse m-r-10" aria-hidden="true"></i>
</a>
</td>
</tr>


</tbody>
</table>
</div>
</div>

<br>

<?php 

   if($cur_fullname=="All"){ 

        $plcregquery2 = mysqli_query($conn,"SELECT * FROM college_placementregistrations WHERE collegereg_id='$lgid' and placementreg_collegename='$clg_name' and placementreg_programname='$prg_name'");


    }else{

        $plcregquery2 = mysqli_query($conn,"SELECT * FROM college_placementregistrations WHERE collegereg_id='$lgid' and placementreg_collegename='$clg_name' and placementreg_programname='$prg_name' and placementreg_coursename='$cur_fullname'");

    }

    if(mysqli_num_rows($plcregquery2)>0){


?>


<div class="table-wrap">
<div class="table-responsive">
<table id="example" class="table table-bordered table-hover display" >
<thead style="background-color: #177ec1;color: #ffffff ">
<tr >
<th hidden="true" style="color: #ffffff">S.No</th>

<th hidden="true" style="color: #ffffff">College </th>
<th hidden="true" style="color: #ffffff">Program </th>
<th hidden="true" style="color: #ffffff">Course </th>

<th style="color: #ffffff">Company </th>
<th style="color: #ffffff">Position </th>
<th style="color: #ffffff">Date/Time </th>
<th style="color: #ffffff">Name</th>
<th style="color: #ffffff">Roll No. </th>
<th style="color: #ffffff">Phone </th>
<th style="color: #ffffff">Email </th>
<!-- <th style="color: #ffffff">Gender </th> -->
<th style="color: #ffffff">Reg. Status </th>
<th style="color: #ffffff">Placement Status </th>
<th style="color: #ffffff">Offer Status </th>
</tr>
</thead>
<tfoot>
<tr>
<th hidden="true">S.No</th>
<th>Company </th>
<th>Position </th>
<th>Date/Time </th>
<th>Name</th>
<th>Roll No. </th>
<th>Phone </th>
<th>Email </th>
<!-- <th>Gender </th> -->
<th>Reg. Status </th>
<th>Placement Status </th>
<th>Offer Status </th>
</tr>
</tfoot>
<tbody>

<?php 

    
    $i=1;
    while($plcregfetch2 = mysqli_fetch_array($plcregquery2)){

    	$pid = $plcregfetch2['placementreg_placementtbid'];

    	$plcquery = mysqli_query($conn,"SELECT * FROM college_placements WHERE placements_id='$pid'");

    	$plcfetch = mysqli_fetch_array($plcquery);

?>


<tr>
<td hidden="true"><?php echo $i; ?></td>

<td hidden="true"><?php echo $clg_name ?></td>
<td hidden="true"><?php echo $prg_name ?></td>
<td hidden="true"><?php echo $cur_fullname ?></td>

<td><strong><code><?php echo $plcfetch['placement_companyname'] ?></code></strong></td>
<td><?php echo $plcfetch['placement_job_position'] ?></td>
<td><?php echo $plcfetch['placement_interview_date'].'<br> '.$plcfetch['placement_interview_time'] ?></td>
<td> <?php echo $plcregfetch2['placementreg_stuname'] ?></td>
<td> <?php echo $plcregfetch2['placementreg_sturollnum'] ?></td>
<td><?php echo $plcregfetch2['placementreg_stuphone'] ?></td>

<td><?php echo $plcregfetch2['placementreg_stumail'] ?></td>
<!-- <td><?php echo $plcregfetch2['placementreg_stugender'] ?></td> -->

<?php 

	if($plcregfetch2['placementreg_attendingstatus']=='Attending'){

		

		$cls = "label label-success ";
	}else{

		$cls = "label label-info";

	}

?>

<td><span class="<?php echo $cls ?>"><?php echo $plcregfetch2['placementreg_attendingstatus'] ?></span></td>


<?php 

	if($plcregfetch2['placementreg_placementstatus']=='Pending'){

		
		$cls = "label label-info ";
	}else{

		$cls = "label label-success";

	}

?>

<?php 

if($plcregfetch2['placementreg_attendingstatus']=='Attending'){

?>

<td align="center">

	
<?php 

if($plcregfetch2['placementreg_placementstatus']=='Pending'){

?>

<a class="" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $i ?>" href="" style="color: #177ec1;"><span class="<?php echo $cls ?>">Update</span></a>

<?php }else{ ?>

<span class="<?php echo $cls ?>"><?php echo $plcregfetch2['placementreg_placementstatus'] ?></span>

<?php } ?>

</td>

<div class="modal fade bs-example-modal-lg<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg">

<form method="post" action="update_placementstatus.php" enctype="multipart/form-data">

<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h5 class="modal-title" id="myLargeModalLabel">
<code><strong>Update Placement Status</strong></code>
</h5>
</div>

<div class="modal-body">
<div class="row">


<div class="col-md-12">
<div class="form-group">
<label class="control-label mb-10 text-left"> Status *</label>
<select class="form-control" name="plc_status" id="plc_status" required>
<option value="" >Select Status</option>
<option>Placed</option>
<option>Not Placed</option>

</select>
</div>
</div>


</div>			
</div>

<div hidden="true">
	
<input type="text" name="plc_regid" id="plc_regid" value="<?php echo $plcregfetch2['placementreg_id'] ?>">



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


<?php 

	if($plcregfetch2['placementreg_offerstatus']=='Pending'){


		$cls = "label label-info ";
	}else{

		$cls = "label label-success";

	}

?>




<td>





<?php 

if($plcregfetch2['placementreg_offerstatus']=='Pending'){

?>

<a class="" data-toggle="modal" data-target=".bs-example-modal-lgc<?php echo $i ?>" href="" style="color: #177ec1;"><span class="<?php echo $cls ?>">Update</span></a>



<div class="modal fade bs-example-modal-lgc<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg">

<form method="post" action="update_offerstatus.php" enctype="multipart/form-data">

<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h5 class="modal-title" id="myLargeModalLabel">
<code><strong>Update Offer Status</strong></code>
</h5>
</div>

<div class="modal-body">
<div class="row">


<div class="col-md-12">
<div class="form-group">
<label class="control-label mb-10 text-left"> Status *</label>
<select class="form-control" name="ofr_status" id="ofr_status" required>
<option value="" >Select Status</option>
<option>Accepted</option>
<option>Not Accepted</option>

</select>
</div>
</div>


</div>          
</div>

<div hidden="true">
    
<input type="text" name="plc_regid" id="plc_regid" value="<?php echo $plcregfetch2['placementreg_id'] ?>">



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

<?php }else{ ?>

<span class="<?php echo $cls ?>"><?php echo $plcregfetch2['placementreg_offerstatus'] ?></span>

<?php } ?>





</td>





<?php }else{ ?>

<td>NA</td>
<td>NA</td>

<?php } ?>	

</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</div>



<div hidden="true" id="myprinttable">
    

<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 10px;  /* this affects the margin in the printer settings */
}

.table-responsive{

    
    overflow-x: initial;

}

</style> 



<?php 
    
    $clgid = $lgid;

    $clgquery = mysqli_query($conn,"SELECT * FROM college_profile WHERE college_registrationtable_id='$clgid'");

    $clgfetch = mysqli_fetch_array($clgquery);

    $clgaddress = $clgfetch['college_address']." , ".$clgfetch['college_villagemandal']." , ".$clgfetch['college_city']." , ".$clgfetch['college_state']." , ".$clgfetch['college_country']." - ".$clgfetch['college_pincode'];

    $clgfullname = $clgfetch['collge_fullname'];
    $clgemail = $clgfetch['collge_email'];
    $clgphone = $clgfetch['college_phone'];
    $clgshortname = $clgfetch['collge_short_name'];

    $clgtype = $clgfetch['college_type'];

    $clgcountry = $clgfetch['college_country'];

    $clgaltphone = $clgfetch['college_alternate_phone'];

    $clgwebsite = $clgfetch['college_website'];

?>  


<div align="center" style="text-align: center;">
<img width="120" src="images/collegeimages/<?php echo $clgfetch['college_icon'] ?>">    
<br>
<span style="text-transform: uppercase;font-weight: 500;font-size: 24px" class="panel-title txt-dark"><?php echo $clgfullname ?></span> 
<br>
<span style="text-transform: uppercase;font-weight: 500;font-size: 15px" >(<?php echo $clgtype ?> Institution - Govt. Of <?php echo $clgcountry ?>)</span>    
<br>
<p>Affiliated To : <?php echo $clgfetch['college_affiliated_to'] ?>, Accreditation By : <?php echo $clgfetch['college_accreditation_by'] ?> , Approved By : <?php echo $clgfetch['college_approved_by'] ?> , Certified ISO : <?php echo $clgfetch['college_certifiediso'] ?>.</p>

<p><?php echo $clgaddress ?>.</p>

<p>Conatct Number : <?php echo $clgphone.'/'.$clgaltphone ?>, E-Mail ID : <?php echo $clgemail ?>, Website : <?php echo $clgwebsite ?></p>


 <br>



</div>



<hr>


<div class="table-wrap">
<div class="table-responsive">
<table  class="table table-bordered table-hover display" >
<thead style="background-color: #177ec1;color: #ffffff ">
<tr >
<th style="color: #ffffff">College </th>
<th style="color: #ffffff">Program </th>
<th style="color: #ffffff">Course </th>
</tr>
</thead>

<tbody>

<?php 

    
    
    $plcrefetch = mysqli_fetch_array($plcregquery);

?>


<tr>
<td><?php echo $clg_name ?></td>
<td><?php echo $prg_name ?></td>
<td><?php echo $cur_fullname ?></td>




</tr>



</tbody>
</table>
</div>
</div>

<br>


<div class="table-wrap">
<div class="">
<table class="table table-bordered table-hover display" >
<thead style="background-color: #177ec1;color: #ffffff ">
<tr >
<th style="color: #ffffff">S.No</th>
<th style="color: #ffffff">Company </th>
<th style="color: #ffffff">Position </th>
<th style="color: #ffffff">Date/Time </th>
<th style="color: #ffffff">Name</th>
<th style="color: #ffffff">Roll No. </th>
<th style="color: #ffffff">Phone </th>
<th style="color: #ffffff">Email </th>
<!-- <th style="color: #ffffff">Gender </th> -->
<th style="color: #ffffff">Reg. Status </th>
<th style="color: #ffffff">Placement Status </th>
<th style="color: #ffffff">Offer Status </th>
</tr>
</thead>

<tbody>

<?php 
    
    if($cur_fullname=="All"){ 

        $plcregquery3 = mysqli_query($conn,"SELECT * FROM college_placementregistrations WHERE collegereg_id='$lgid' and placementreg_collegename='$clg_name' and placementreg_programname='$prg_name'");


    }else{

        $plcregquery3 = mysqli_query($conn,"SELECT * FROM college_placementregistrations WHERE collegereg_id='$lgid' and placementreg_collegename='$clg_name' and placementreg_programname='$prg_name' and placementreg_coursename='$cur_fullname'");

    }
    
    $i=1;
    while($plcregfetch2 = mysqli_fetch_array($plcregquery3)){

        $pid = $plcregfetch2['placementreg_placementtbid'];

        $plcquery = mysqli_query($conn,"SELECT * FROM college_placements WHERE placements_id='$pid'");

        $plcfetch = mysqli_fetch_array($plcquery);

?>


<tr>
<td><?php echo $i; ?></td>
<td><strong><code><?php echo $plcfetch['placement_companyname'] ?></code></strong></td>
<td><?php echo $plcfetch['placement_job_position'] ?></td>
<td><?php echo $plcfetch['placement_interview_date'].'<br> '.$plcfetch['placement_interview_time'] ?></td>
<td> <?php echo $plcregfetch2['placementreg_stuname'] ?></td>
<td> <?php echo $plcregfetch2['placementreg_sturollnum'] ?></td>
<td><?php echo $plcregfetch2['placementreg_stuphone'] ?></td>

<td><?php echo $plcregfetch2['placementreg_stumail'] ?></td>
<!-- <td><?php echo $plcregfetch2['placementreg_stugender'] ?></td> -->

<?php 

    if($plcregfetch2['placementreg_attendingstatus']=='Attending'){

        

        $cls = "label label-success ";
    }else{

        $cls = "label label-info";

    }

?>

<td><span class="<?php echo $cls ?>"><?php echo $plcregfetch2['placementreg_attendingstatus'] ?></span></td>


<?php 

    if($plcregfetch2['placementreg_placementstatus']=='Pending'){

        
        $cls = "label label-info ";
    }else{

        $cls = "label label-success";

    }

?>

<?php 

if($plcregfetch2['placementreg_attendingstatus']=='Attending'){

?>

<td align="center">

    
<?php 

if($plcregfetch2['placementreg_placementstatus']=='Pending'){

?>

<span class="<?php echo $cls ?>">Update</span>

<?php }else{ ?>

<span class="<?php echo $cls ?>"><?php echo $plcregfetch2['placementreg_placementstatus'] ?></span>

<?php } ?>

</td>


<?php 

    if($plcregfetch2['placementreg_offerstatus']=='Pending'){

        

        $cls = "label label-info ";
    }else{

        $cls = "label label-success";

    }

?>




<td>





<?php 

if($plcregfetch2['placementreg_offerstatus']=='Pending'){

?>

<span class="<?php echo $cls ?>">Update</span>

<?php }else{ ?>

<span class="<?php echo $cls ?>"><?php echo $plcregfetch2['placementreg_offerstatus'] ?></span>

<?php } ?>




</td>





<?php }else{ ?>

<td>NA</td>
<td>NA</td>

<?php } ?>  

</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</div>

</div>






<?php } ?>

</div>


<?php }else{ ?>


<div align="center" class="mt-30 mb-50"><sup><i class="fa fa-quote-left" aria-hidden="true"></i></sup><spam style="font-size: 20px;">&nbsp; Prediction Details Not Found&nbsp;&nbsp;</spam><sup><i class="fa fa-quote-right" aria-hidden="true"></i></sup>
</div>	



<?php } ?>	

</div>



</div>	
</div>
</div>
<!-- /Row -->


</div>

<script>
function confirm_alert(node) {
return confirm("You are about to permanently DELETE a record. Click OK to continue or CANCEL to quit.");
}
</script>

<!-- Footer -->
<footer class="footer container-fluid pl-30 pr-30">
<?php include('footer.php'); ?>
</footer>
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




<script type="text/javascript">
    
    function printWithCss() {
        //Works with Chome, Firefox, IE, Safari
        //Get the HTML of div
        var title = document.title;
        var divElements = document.getElementById('myprinttable').innerHTML;
        var printWindow = window.open("", "_blank", "");
        //open the window
        printWindow.document.open();
        //write the html to the new window, link to css file
        printWindow.document.write('<html><head><title>' + title + '</title><link rel="shortcut icon" href="favicon.ico"><link rel="icon" href="favicon.ico" type="image/x-icon"><link href="../../vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/><link href="../../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/><link href="../../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/><link href="../../vendors/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css"/><link href="../../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css"><link href="dist/css/style.css" rel="stylesheet" type="text/css"></head><body>');
        printWindow.document.write(divElements);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.focus();
        //The Timeout is ONLY to make Safari work, but it still works with FF, IE & Chrome.
        setTimeout(function() {
            printWindow.print();
            printWindow.close();
        }, 100);
    }

</script>

</body>


</html>
