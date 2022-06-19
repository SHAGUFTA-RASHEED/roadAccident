<?php 

	require_once __DIR__.'/db_connect.php';

	$db = new DB_CONNECT();

	$conn = $db->connect();

	ob_start();
	session_start();

?>


<?php	

	if(isset($_POST['submit'])){ 

		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$place = $_POST['place'];
		$area = $_POST['area'];
		$junction = $_POST['junction'];
		$lattitude = $_POST['lattitude'];
		$longitude = $_POST['longitude'];
		$vech_name = $_POST['vech_name'];
		$vech_type = $_POST['vech_type'];
		$lic_type = $_POST['lic_type'];
		$vech_age = $_POST['vech_age'];
		$vech_load = $_POST['vech_load'];
		$traf_violation = $_POST['traf_violation'];
		$acd_time = $_POST['acd_time'];
		$memembers_invech = $_POST['memembers_invech'];
		$shrt_desc = mysqli_real_escape_string($conn,$_POST['shrt_desc']);
		$road_type = $_POST['road_type'];
		$weather = $_POST['weather'];
		$person_type = $_POST['person_type'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];

		if(empty($_FILES['acd_image']['name'])){
			
			$acdimg = '';
		
		}else{

			$acdimg = $_FILES['acd_image']['name'];
			$acd_image = $_FILES['acd_image']['tmp_name'];
			$taregt_dir = 'images/accidentimages/'.$billimg;

			move_uploaded_file($acd_image, $taregt_dir);

		}

		$query = mysqli_query($conn,"INSERT INTO `accident_prediction` (`prediction_country`, `prediction_state`, `prediction_city`, `prediction_place`, `prediction_area`, `prediction_junction`, `prediction_lattitude`, `prediction_longitude`, `prediction_vehiclenmae`, `prediction_vehicletype`, `prediction_licensetype`, `prediction_vehicleage`, `prediction_vehicleload`, `prediction_rulesviolation`, `prediction_accidentimage`, `prediction_accidenttime`, `prediction_membersinvehicle`, `prediction_desription`, `prediction_roadtype`, `prediction_weather`, `prediction_persontype`, `prediction_age`, `prediction_gender`) VALUES ('$country', '$state', '$city', '$place', '$area', '$junction', '$lattitude', '$longitude', '$vech_name', '$vech_type', '$lic_type', '$vech_age', '$vech_load', '$traf_violation', '$acdimg', '$acd_time', '$memembers_invech', '$shrt_desc', '$road_type', '$weather', '$person_type', '$age', '$gender')");

		if($query){

			echo '<script type="text/javascript">'; 
			echo 'alert("Prediction Created Successful!");'; 
			echo 'window.location.href = "new_data_sets.php";';
			echo '</script>';
		
		}else{

			echo '<script type="text/javascript">'; 
			echo 'alert("Prediction Creation Failed!Please Try After Sometime.");'; 
			echo 'window.location.href = "create-manual-entry.php";';
			echo '</script>';
		}


	}else{

		echo '<script type="text/javascript">'; 
		echo 'alert("Something Went Wrong.Please Try After Somethime!");'; 
		echo 'window.location.href = "create-manual-entry.php";';
		echo '</script>';
	}


?>