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
<title>Performance Analysis | A Road Accident Prediction</title>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>


<script type="text/javascript" src="gstatic/loader.js"></script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
<h5 class="txt-dark">Performance Analysis</h5>
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
<div class="row">

<!-- Age BASED START -->

<?php 

	$egtn_query = mysqli_query($conn,"SELECT count(*) AS eighteen FROM accident_prediction WHERE prediction_age='18 Yrs'");
	$egtn_fetch =mysqli_fetch_array($egtn_query);
	$egtn= $egtn_fetch['eighteen'];

	$egtntwtfv_query = mysqli_query($conn,"SELECT count(*) AS eighteentwentyfive FROM accident_prediction WHERE prediction_age='18-25 Yrs'");
	$egtntwtfv_fetch =mysqli_fetch_array($egtntwtfv_query);
	$egtntwtyfive= $egtntwtfv_fetch['eighteentwentyfive'];


	$twtfvthrtfv_query = mysqli_query($conn,"SELECT count(*) AS twentyfivethirtyfive FROM accident_prediction WHERE prediction_age='25-35 Yrs'");
	$twtfvthrtfv_fetch =mysqli_fetch_array($twtfvthrtfv_query);
	$twtyfivethrtyfive = $twtfvthrtfv_fetch['twentyfivethirtyfive'];

	$hrtfvfurfv_query = mysqli_query($conn,"SELECT count(*) AS thirtyfivefourtyfive FROM accident_prediction WHERE prediction_age='35-45 Yrs'");
	$hrtfvfurfv_fetch =mysqli_fetch_array($hrtfvfurfv_query);
	$thrtyfivefrtyfive = $hrtfvfurfv_fetch['thirtyfivefourtyfive'];

	$furfvsxty_query = mysqli_query($conn,"SELECT count(*) AS fourtyfivesixity FROM accident_prediction WHERE prediction_age='45-60 Yrs'");
	$furfvsxty_fetch =mysqli_fetch_array($furfvsxty_query);
	$frtyfivesixity = $furfvsxty_fetch['fourtyfivesixity'];


	$sxty_query = mysqli_query($conn,"SELECT count(*) AS sixity FROM accident_prediction WHERE prediction_age='60 Yrs Above'");
	$sxty_fetch =mysqli_fetch_array($sxty_query);
	$sixity = $sxty_fetch['sixity'];

	$noage_query = mysqli_query($conn,"SELECT count(*) AS noage FROM accident_prediction WHERE prediction_age='Age not Know'");
	$noage_fetch =mysqli_fetch_array($noage_query);
	$noage = $noage_fetch['noage'];


	//echo $egtn.';'.$egtntwtyfive.';'.$twtyfivethrtyfive.';'.$thrtyfivefrtyfive.';'.$frtyfivesixity.';'.$sixity.';'.$noage;

?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Age', 'Accidents'],
          ['18 Years', <?php echo $egtn ?>],
		  ['18 - 25 Years', <?php echo $egtntwtyfive ?>],
		  ['25 - 35 Years', <?php echo $twtyfivethrtyfive ?>],
		  ['35 - 45 Years', <?php echo $thrtyfivefrtyfive ?>],
		  ['45 - 60 Years', <?php echo $frtyfivesixity ?>],
		  ['60 Above', <?php echo $sixity ?>],
		  ['Not Mentioned', <?php echo $noage ?>]
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>




<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents with respect to age</h6>
</div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">
<div class="table-wrap mt-40">
<div class="table-responsive">

<div id="piechart" style="width: 800px; height: 500px;"></div>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- AGE BASED END -->

</div>


<!-- Gender Based Start -->


<?php 

	$maleb18_query = mysqli_query($conn,"SELECT count(*) AS maleb18 FROM accident_prediction WHERE prediction_age='18 Yrs' AND prediction_gender='Male'");
	$maleb18_fetch =mysqli_fetch_array($maleb18_query);
	$male_b18= $maleb18_fetch['maleb18'];

	$femaleb18_query = mysqli_query($conn,"SELECT count(*) AS femaleb18 FROM accident_prediction WHERE prediction_age='18 Yrs' AND prediction_gender='Female'");
	$femaleb18_fetch =mysqli_fetch_array($femaleb18_query);
	$female_b18= $femaleb18_fetch['femaleb18'];


	$maleab18_query = mysqli_query($conn,"SELECT count(*) AS maleab18 FROM accident_prediction WHERE prediction_age='18-25 Yrs' AND prediction_gender='Male'");
	$maleab18_fetch =mysqli_fetch_array($maleab18_query);
	$male_ab18= $maleab18_fetch['maleab18'];

	$femaleab18_query = mysqli_query($conn,"SELECT count(*) AS femaleab18 FROM accident_prediction WHERE prediction_age='18-25 Yrs' AND prediction_gender='Female'");
	$femaleab18_fetch =mysqli_fetch_array($femaleab18_query);
	$female_ab18= $femaleab18_fetch['femaleab18'];



	$maleab25_query = mysqli_query($conn,"SELECT count(*) AS maleab25 FROM accident_prediction WHERE prediction_age='25-35 Yrs' AND prediction_gender='Male'");
	$maleab25_fetch =mysqli_fetch_array($maleab25_query);
	$male_ab25= $maleab25_fetch['maleab25'];

	$femaleab25_query = mysqli_query($conn,"SELECT count(*) AS femaleab25 FROM accident_prediction WHERE prediction_age='25-35 Yrs' AND prediction_gender='Female'");
	$femaleab25_fetch =mysqli_fetch_array($femaleab25_query);
	$female_ab25= $femaleab25_fetch['femaleab25'];



	$maleab35_query = mysqli_query($conn,"SELECT count(*) AS maleab35 FROM accident_prediction WHERE prediction_age='35-45 Yrs' AND prediction_gender='Male'");
	$maleab35_fetch =mysqli_fetch_array($maleab35_query);
	$male_ab35= $maleab35_fetch['maleab35'];

	$femaleab35_query = mysqli_query($conn,"SELECT count(*) AS femaleab35 FROM accident_prediction WHERE prediction_age='35-45 Yrs' AND prediction_gender='Female'");
	$femaleab35_fetch =mysqli_fetch_array($femaleab35_query);
	$female_ab35= $femaleab35_fetch['femaleab35'];



	$maleab45_query = mysqli_query($conn,"SELECT count(*) AS maleab45 FROM accident_prediction WHERE prediction_age='45-60 Yrs' AND prediction_gender='Male'");
	$maleab45_fetch =mysqli_fetch_array($maleab45_query);
	$male_ab45= $maleab45_fetch['maleab45'];

	$femaleab45_query = mysqli_query($conn,"SELECT count(*) AS femaleab45 FROM accident_prediction WHERE prediction_age='45-60 Yrs' AND prediction_gender='Female'");
	$femaleab45_fetch =mysqli_fetch_array($femaleab45_query);
	$female_ab45= $femaleab45_fetch['femaleab45'];


	$maleab60_query = mysqli_query($conn,"SELECT count(*) AS maleab60 FROM accident_prediction WHERE prediction_age='60 Yrs Above' AND prediction_gender='Male'");
	$maleab60_fetch =mysqli_fetch_array($maleab60_query);
	$male_ab60= $maleab60_fetch['maleab60'];

	$femaleab60_query = mysqli_query($conn,"SELECT count(*) AS femaleab60 FROM accident_prediction WHERE prediction_age='60 Yrs Above' AND prediction_gender='Female'");
	$femaleab60_fetch =mysqli_fetch_array($femaleab60_query);
	$female_ab60= $femaleab60_fetch['femaleab60'];
	

?>



<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Age', 'Male', 'Female'],
          ['18 Year', <?php echo $male_b18 ?>, <?php echo $female_b18 ?>],
          ['Above 18', <?php echo $male_ab18 ?>, <?php echo $female_ab18 ?>],
          ['Above 25', <?php echo $male_ab25 ?>, <?php echo $female_ab25 ?>],
          ['Above 35', <?php echo $male_ab35 ?>, <?php echo $female_ab35 ?>],
          ['Above 45', <?php echo $male_ab45 ?>, <?php echo $female_ab45 ?>],
          ['Above 60', <?php echo $male_ab60 ?>, <?php echo $female_ab60 ?>]
         
        ]);

        var options = {'title':'', 'width':750, 'height':400};

        var chart = new google.charts.Bar(document.getElementById('barchart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Total Accidents By Male And Female</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">

		<div align="center" id="barchart"></div>
</div>
</div>

</div>
</div>
</div>	
</div>
</div>
<!-- /Row -->

<!-- Gender Based End -->


<!-- Weather Based Start -->

<?php

	$clear_query = mysqli_query($conn,"SELECT count(*) AS clear FROM accident_prediction WHERE prediction_weather='Clear'");
	$clear_fetch =mysqli_fetch_array($clear_query);
	$clear= $clear_fetch['clear'];

	$sunny_query = mysqli_query($conn,"SELECT count(*) AS sunny FROM accident_prediction WHERE prediction_weather='Sunny'");
	$sunny_fetch =mysqli_fetch_array($sunny_query);
	$sunny= $sunny_fetch['sunny'];

	$rainy_query = mysqli_query($conn,"SELECT count(*) AS rainy FROM accident_prediction WHERE prediction_weather='Rainy'");
	$rainy_fetch =mysqli_fetch_array($rainy_query);
	$rainy= $rainy_fetch['rainy'];


	$foggy_query = mysqli_query($conn,"SELECT count(*) AS foggy FROM accident_prediction WHERE prediction_weather='Foggy'");
	$foggy_fetch =mysqli_fetch_array($foggy_query);
	$foggy= $foggy_fetch['foggy'];


	$misty_query = mysqli_query($conn,"SELECT count(*) AS misty FROM accident_prediction WHERE prediction_weather='Misty'");
	$misty_fetch =mysqli_fetch_array($misty_query);
	$misty= $misty_fetch['misty'];


	$hail_query = mysqli_query($conn,"SELECT count(*) AS hail FROM accident_prediction WHERE prediction_weather='Hail'");
	$hail_fetch =mysqli_fetch_array($hail_query);
	$hail= $hail_fetch['hail'];

	$sleet_query = mysqli_query($conn,"SELECT count(*) AS sleet FROM accident_prediction WHERE prediction_weather='Sleet'");
	$sleet_fetch =mysqli_fetch_array($sleet_query);
	$sleet= $sleet_fetch['sleet'];

	$others_query = mysqli_query($conn,"SELECT count(*) AS others FROM accident_prediction WHERE prediction_weather='Others'");
	$others_fetch =mysqli_fetch_array($others_query);
	$others= $others_fetch['others'];

?>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Weather', 'Accidents'],
          ['Clear', <?php echo $clear ?>],
		  ['Sunny', <?php echo $sunny ?>],
		  ['Rainy', <?php echo $rainy ?>],
		  ['Foggy', <?php echo $foggy ?>],
		  ['Misty', <?php echo $misty ?>],
		  ['Hail', <?php echo $hail ?>],
		  ['Sleet', <?php echo $sleet ?>],
		  ['Others', <?php echo $others ?>]
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>

<!-- Row -->
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Total Accidents By Weather </h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">
<div id="piechart2" style="width: 800px; height: 500px;"></div>

</div>
</div>

</div>
</div>
</div>	
</div>
</div>
<!-- /Row -->

<!-- Weather Based End -->

<!-- Traffic Rules Start -->


<?php

	$ovrspd_query = mysqli_query($conn,"SELECT count(*) AS ovrspd FROM accident_prediction WHERE prediction_rulesviolation='Over Speeding'");
	$ovrspd_fetch =mysqli_fetch_array($ovrspd_query);
	$ovrspd= $ovrspd_fetch['ovrspd'];

	$drkdrv_query = mysqli_query($conn,"SELECT count(*) AS drkdrv FROM accident_prediction WHERE prediction_rulesviolation='Drunking Driving'");
	$drkdrv_fetch =mysqli_fetch_array($drkdrv_query);
	$drkdrv= $drkdrv_fetch['drkdrv'];

	$cusalc_query = mysqli_query($conn,"SELECT count(*) AS cusalc FROM accident_prediction WHERE prediction_rulesviolation='Consumption of Alcohol'");
	$cusalc_fetch =mysqli_fetch_array($cusalc_query);
	$cusalc= $cusalc_fetch['cusalc'];


	$cusdrg_query = mysqli_query($conn,"SELECT count(*) AS cusdrg FROM accident_prediction WHERE prediction_rulesviolation='Consumption of Drugs'");
	$cusdrg_fetch =mysqli_fetch_array($cusdrg_query);
	$cusdrg= $cusdrg_fetch['cusdrg'];

	$drvwrngside_query = mysqli_query($conn,"SELECT count(*) AS drvwrngside FROM accident_prediction WHERE prediction_rulesviolation='Driving on Wrong Side'");
	$drvwrngside_fetch =mysqli_fetch_array($drvwrngside_query);
	$drvwrngside= $drvwrngside_fetch['drvwrngside'];

	$jmpredlgt_query = mysqli_query($conn,"SELECT count(*) AS jmpredlgt FROM accident_prediction WHERE prediction_rulesviolation='Jumping Red Light'");
	$jmpredlgt_fetch =mysqli_fetch_array($jmpredlgt_query);
	$jmpredlgt= $jmpredlgt_fetch['jmpredlgt'];


	$usemblphn_query = mysqli_query($conn,"SELECT count(*) AS usemblphn FROM accident_prediction WHERE prediction_rulesviolation='Use of Mobile Phone'");
	$usemblphn_fetch =mysqli_fetch_array($usemblphn_query);
	$usemblphn= $usemblphn_fetch['usemblphn'];

	//echo $ovrspd.";".$drkdrv.";".$cusalc.";".$cusdrg.";".$drvwrngside.";".$jmpredlgt.";".$usemblphn;

?>


<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Traffic Rules Violation", "Count", { role: "style" } ],
        ["Over Speeding", <?php echo $ovrspd ?>, "#3366cc"],
        ["Drunking Driving", <?php echo $drkdrv ?>, "#3366cc"],
        ["Consumption of Alcohol ", <?php echo $cusalc ?>, "#3366cc"],
        ["Consumption of Drugs", <?php echo $cusdrg ?>, "#3366cc"],
        ["Driving on Wrong Side ", <?php echo $drvwrngside ?>, "#3366cc"],
        ["Jumping Red Light", <?php echo $jmpredlgt ?>, "#3366cc"],
        ["Use of Mobile Phone", <?php echo $usemblphn ?>, "#3366cc"]
      ]);

      var view = new google.visualization.DataView(data);
      

      var options = {
        title: "",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>


<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents Traffic Rules Violation</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</div>
</div>

</div>
</div>
</div>	
</div>
</div>
<!-- Traffic Rules End -->

<!-- Place Start -->

<?php

	$urbtjun_query = mysqli_query($conn,"SELECT count(*) AS urbtjun FROM accident_prediction WHERE prediction_place='Urban' AND prediction_junction='T-Junction'");
	$urbtjun_fetch =mysqli_fetch_array($urbtjun_query);
	$urbtjun= $urbtjun_fetch['urbtjun'];

	$rultjun_query = mysqli_query($conn,"SELECT count(*) AS rultjun FROM accident_prediction WHERE prediction_place='Rural' AND prediction_junction='T-Junction'");
	$rultjun_fetch =mysqli_fetch_array($rultjun_query);
	$rultjun= $rultjun_fetch['rultjun'];


	$urbyjun_query = mysqli_query($conn,"SELECT count(*) AS urbyjun FROM accident_prediction WHERE prediction_place='Urban' AND prediction_junction='Y-Junction'");
	$urbyjun_fetch =mysqli_fetch_array($urbyjun_query);
	$urbyjun= $urbyjun_fetch['urbyjun'];

	$rulyjun_query = mysqli_query($conn,"SELECT count(*) AS rulyjun FROM accident_prediction WHERE prediction_place='Rural' AND prediction_junction='Y-Junction'");
	$rulyjun_fetch =mysqli_fetch_array($rulyjun_query);
	$rulyjun= $rulyjun_fetch['rulyjun'];



	$urbfrarmjun_query = mysqli_query($conn,"SELECT count(*) AS urbfrarmjun FROM accident_prediction WHERE prediction_place='Urban' AND prediction_junction='Four Arm Junction'");
	$urbfrarmjun_fetch =mysqli_fetch_array($urbfrarmjun_query);
	$urbfrarmjun= $urbfrarmjun_fetch['urbfrarmjun'];

	$rulfrarmjun_query = mysqli_query($conn,"SELECT count(*) AS rulfrarmjun FROM accident_prediction WHERE prediction_place='Rural' AND prediction_junction='Four Arm Junction'");
	$rulfrarmjun_fetch =mysqli_fetch_array($rulfrarmjun_query);
	$rulfrarmjun= $rulfrarmjun_fetch['rulfrarmjun'];


	$urbstgjun_query = mysqli_query($conn,"SELECT count(*) AS urbstgjun FROM accident_prediction WHERE prediction_place='Urban' AND prediction_junction='Staggered Junction'");
	$urbstgjun_fetch =mysqli_fetch_array($urbstgjun_query);
	$urbstgjun= $urbstgjun_fetch['urbstgjun'];

	$rulstgjun_query = mysqli_query($conn,"SELECT count(*) AS rulstgjun FROM accident_prediction WHERE prediction_place='Rural' AND prediction_junction='Staggered Junction'");
	$rulstgjun_fetch =mysqli_fetch_array($rulstgjun_query);
	$rulstgjun= $rulstgjun_fetch['rulstgjun'];



	$urbroujun_query = mysqli_query($conn,"SELECT count(*) AS urbroujun FROM accident_prediction WHERE prediction_place='Urban' AND prediction_junction='Round about Junction'");
	$urbroujun_fetch =mysqli_fetch_array($urbroujun_query);
	$urbroujun= $urbroujun_fetch['urbroujun'];

	$rulroujun_query = mysqli_query($conn,"SELECT count(*) AS rulroujun FROM accident_prediction WHERE prediction_place='Rural' AND prediction_junction='Round about Junction'");
	$rulroujun_fetch =mysqli_fetch_array($rulroujun_query);
	$rulroujun= $rulroujun_fetch['rulroujun'];


	$urbotrjun_query = mysqli_query($conn,"SELECT count(*) AS urbotrjun FROM accident_prediction WHERE prediction_place='Urban' AND prediction_junction='Others'");
	$urbotrjun_fetch =mysqli_fetch_array($urbotrjun_query);
	$urbotrjun= $urbotrjun_fetch['urbotrjun'];

	$rulotrjun_query = mysqli_query($conn,"SELECT count(*) AS rulotrjun FROM accident_prediction WHERE prediction_place='Rural' AND prediction_junction='Others'");
	$rulotrjun_fetch =mysqli_fetch_array($rulotrjun_query);
	$rulotrjun= $rulotrjun_fetch['rulotrjun'];

	//echo $urbtjun.";".$rultjun.";".$urbyjun.";".$rulyjun.";".$urbfrarmjun.";".$rulfrarmjun.";".$urbstgjun.";".$rulstgjun.";".$urbroujun.";".$rulroujun.";".$urbotrjun.";".$rulotrjun;


?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Junctions', 'Urban', 'Rural'],
          ['T-Junction', <?php echo $urbtjun ?>, <?php echo $rultjun ?>],
          ['Y-Junction', <?php echo $urbyjun ?>, <?php echo $rulyjun ?>],
          ['Four Arm Junction', <?php echo $urbfrarmjun ?>, <?php echo $rulfrarmjun ?>],
          ['Staggered Junction', <?php echo $urbstgjun ?>, <?php echo $rulstgjun ?>],
          ['Round about Junction', <?php echo $urbroujun ?>, <?php echo $rulroujun ?>],
          ['Others', <?php echo $urbotrjun ?>, <?php echo $rulotrjun ?>]
         
        ]);

        var options = {'title':'', 'width':900, 'height':400};

        var chart = new google.charts.Bar(document.getElementById('barchart2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents Place Types</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">
<div align="center" id="barchart2"></div>
</div>
</div>

</div>
</div>
</div>	
</div>
</div>
<!-- Place End -->


<!-- <div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents Vehicles Age</h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">

</div>
</div>

</div>
</div>
</div>	
</div>
</div> -->



<!-- <div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents Based On States</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">

</div>
</div>

</div>
</div>
</div>	
</div>
</div> -->



<!-- <div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents Based On Junction</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">

</div>
</div>

</div>
</div>
</div>	
</div>
</div> -->



<!-- <div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents On Road Type</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">

</div>
</div>

</div>
</div>
</div>	
</div>
</div> -->



<!-- <div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Accidents Based On Timing</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">

</div>
</div>

</div>
</div>
</div>	
</div>
</div> -->


<!-- License start -->

<?php 

	$vldprt_query = mysqli_query($conn,"SELECT count(*) AS vldprt FROM accident_prediction WHERE prediction_licensetype='License valid Parmanent'");
	$vldprt_fetch =mysqli_fetch_array($vldprt_query);
	$vldprt= $vldprt_fetch['vldprt'];


	$lrng_query = mysqli_query($conn,"SELECT count(*) AS lrng FROM accident_prediction WHERE prediction_licensetype='License valid Parmanent'");
	$lrng_fetch =mysqli_fetch_array($lrng_query);
	$lrng= $lrng_fetch['lrng'];


	$wthout_query = mysqli_query($conn,"SELECT count(*) AS wthout FROM accident_prediction WHERE prediction_licensetype='Without License'");
	$wthout_fetch =mysqli_fetch_array($wthout_query);
	$wthout= $wthout_fetch['wthout'];



?>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['License Type', 'Accidents'],
          ['License valid Parmanent', <?php echo $vldprt ?>],
		  ['Learning License', <?php echo $lrng ?>],
		  ['Without License', <?php echo $wthout ?>]
		  
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>


<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Charts On License Type</h6>
</div>
<div class="clearfix"></div>
</div>

<div class="panel-wrapper collapse in">
<div class="panel-body">

<div class="table-wrap">
<div class="table-responsive">
<div id="piechart3" style="width: 800px; height: 500px;"></div>
</div>
</div>

</div>
</div>
</div>	
</div>
</div>
<!-- License end -->

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
