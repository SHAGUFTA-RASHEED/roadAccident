<?php 

	require_once __DIR__.'/db_connect.php';

	$db = new DB_CONNECT();

	$conn = $db->connect();

	session_start();


	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];


		$_SESSION['username'] = $username;


		//echo $_SESSION['company_mail'];

		$login_query = mysqli_query($conn,"SELECT * from admin_login where user_name='$username' and password='$password'");

		if(mysqli_num_rows($login_query)>0){



			$_SESSION['login_id']="1";

			header('Location: index.php');

		}else{

		echo '<script type="text/javascript">'; 
		echo 'alert("Invalid Credentials!");'; 
		echo 'window.location.href = "login.php";';
		echo '</script>';
	}

	}

?>