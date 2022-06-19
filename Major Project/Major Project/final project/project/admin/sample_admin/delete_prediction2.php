<?php 
	
	require_once __DIR__.'/db_connect.php';

	$db = new DB_CONNECT();

	$conn = $db->connect();

	ob_start();
	session_start();

	

	if(isset($_GET['prdid'])){

	$prdid = $_GET['prdid'];

	$query = "DELETE FROM accident_prediction WHERE `prediction_id`= '".$_GET['prdid']."'";


	$result = mysqli_query($conn,$query);

	if ($result) {
      
       //echo "Record deleted successfully";
	  
	   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=accepted_data_sets.php">';

      //header('location:view_material.php');

	} else {
	    echo "Error deleting record: " . mysqli_error($conn);
	}
	
}

?>