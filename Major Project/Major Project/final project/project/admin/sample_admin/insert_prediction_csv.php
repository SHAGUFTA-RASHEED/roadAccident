<?php 
	
	require_once __DIR__.'/db_connect.php';

	$db = new DB_CONNECT();

	$conn = $db->connect();

	ob_start();
	session_start();

	include 'session.php';

if(isset($_POST['submit'])){

	$filename=$_FILES["prd_file"]["tmp_name"];	

	$lgid = $_SESSION['login_id'];

	unset($_SESSION['prdinsids']);

	$idsarray = array();

	$c = 0;
	if($_FILES['prd_file']['size']>0){ 

		$handle = fopen($filename, "r");

		if($handle){
		    while(!feof($handle)){
		          $content = fgets($handle);
		      if($content)    $c++;
		    }
		}

	}

	//echo $c;


	if($_FILES['prd_file']['size']>0){

		$handle = fopen($filename, "r");
		//echo $c;
		$num = $c-1;
		$i = 0;
		while (($data = fgetcsv($handle,1000,','))!= FALSE) {

			if($i>0){

				if($data[0]!=''){

				$query = mysqli_query($conn,"INSERT INTO `accident_prediction` (`prediction_country`, `prediction_state`, `prediction_city`, `prediction_place`, `prediction_area`, `prediction_junction`, `prediction_lattitude`, `prediction_longitude`, `prediction_vehiclenmae`, `prediction_vehicletype`, `prediction_licensetype`, `prediction_vehicleage`, `prediction_vehicleload`, `prediction_rulesviolation`, `prediction_accidenttime`, `prediction_membersinvehicle`, `prediction_desription`, `prediction_roadtype`, `prediction_weather`, `prediction_persontype`, `prediction_age`, `prediction_gender` , `prediction_status`) VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."', '".$data[7]."', '".$data[8]."', '".$data[9]."', '".$data[10]."', '".$data[11]."', '".$data[12]."', '".$data[13]."', '".$data[14]."', '".$data[15]."', '".$data[16]."', '".$data[17]."', '".$data[18]."', '".$data[19]."', '".$data[20]."', '".$data[21]."' , 'Verified')");


				//echo mysqli_error($conn);

						
				$last_id = mysqli_insert_id($conn);

				array_push($idsarray, $last_id);

					if($query){

						if($i>=$num){

								$ids = implode(',', $idsarray);
								$id = base64_encode($ids);

								$_SESSION['prdinsids'] = $id;
						}


							if(isset($_SESSION['prdinsids'])){

								echo '<script type="text/javascript">'; 
								echo 'alert("yes!");'; 
								
								echo '</script>';
							}ELSE{
								echo '<script type="text/javascript">'; 
								echo 'alert("No!");'; 
								
								echo '</script>';
							}

						echo '<script type="text/javascript">'; 
						echo 'alert("Prediction Created Successful!");'; 
						echo 'window.location.href = "view_preditions.php";';
						echo '</script>';
							
					}else{

						echo '<script type="text/javascript">'; 
						echo 'alert("Prediction Creation Failed!Please Try After Sometime.");'; 
						echo 'window.location.href = "create-manual-entry.php";';
						echo '</script>';

					}


				
				//header("Location: midmarks_calculate.php");
				}

			
		}

			

			$i++;
		}
		
	}else{

		echo '<script type="text/javascript">'; 
		echo 'alert("Oops!Something Went Wrong Please Try After Sometime.");'; 
		echo 'window.location.href = "accepted_data_sets.php";';
		echo '</script>';
	}

}else{

	echo '<script type="text/javascript">'; 
	echo 'alert("Oops!Something Went Wrong Please Try After Sometime.");'; 
	echo 'window.location.href = "accepted_data_sets.php";';
	echo '</script>';

}

?>