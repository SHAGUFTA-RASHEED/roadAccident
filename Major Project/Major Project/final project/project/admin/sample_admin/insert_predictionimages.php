<?php 
	
	require_once __DIR__.'/db_connect.php';

	$db = new DB_CONNECT();

	$conn = $db->connect();

	ob_start();
	session_start();

	include 'session.php';

	if(isset($_POST['submit'])){

		
		$country = $_POST['country'];
		$state = $_POST['state'];
		$vech_name = $_POST['vech_name'];
		$prdids = $_POST['prdids'];
		

		$lgid = $_SESSION['login_id'];

		$total = sizeof($country);

	
		//echo $bagname;
	

		for($i=0;$i<$total;$i++) {


	    $cun = $country[$i];
	    $sta = $state[$i];
	    $vname = $vech_name[$i];
	    $id = $prdids[$i];
	  	
	  	//echo $img.'<br>';

	  	$uploads_dir = 'images/accidentimages/';
	  	$tmp_name = $_FILES["prdimage"]["tmp_name"][$i];
        $name = $_FILES["prdimage"]["name"][$i];

        //echo $name.'<br>';
           
        move_uploaded_file($tmp_name, "$uploads_dir/$name");


	    $query = "UPDATE `accident_prediction` SET prediction_accidentimage='$name' WHERE prediction_id='$id'";

	    //echo $name;

	           $q = mysqli_query($conn,$query) or die(mysqli_error($conn));

	           //header("Location: view_bagsection.php");

	           if($q){


				echo '<script type="text/javascript">'; 
				echo 'alert("Images Updated!");'; 
				echo 'window.location.href = "accepted_data_sets.php";';
				echo '</script>';
				}else {

				echo '<script type="text/javascript">'; 
				echo 'alert("Image Updation Failed!");'; 
				echo 'window.location.href = "accepted_data_sets.php";';
				echo '</script>';
				}

	         
	       }

   	}else{

   		echo '<script type="text/javascript">'; 
		echo 'alert("Oops!Something Went Wrong Please Try After Sometime.");'; 
		echo 'window.location.href = "accepted_data_sets.php";';
		echo '</script>';
   }
	   

	


?>