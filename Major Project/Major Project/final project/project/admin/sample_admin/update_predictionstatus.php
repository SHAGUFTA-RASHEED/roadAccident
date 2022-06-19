<?php 
	
	require_once __DIR__.'/db_connect.php';

	$db = new DB_CONNECT();

	$conn = $db->connect();

	ob_start();
	session_start();

	

	if(isset($_POST['prd_id'])){

	$prd_id = $_POST['prd_id'];
	$prd_status = $_POST['prd_status'];

	$query = "UPDATE accident_prediction SET prediction_status='".$prd_status."' WHERE `prediction_id`= '".$_POST['prd_id']."'";


	$result = mysqli_query($conn,$query);

	if ($result) {
      
       //echo "Record deleted successfully";
	  
	   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=new_data_sets.php">';

      //header('location:view_material.php');

	} else {
	    echo "Error deleting record: " . mysqli_error($conn);
	}
	
}

?>