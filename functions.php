<?php
require 'templates/config.php';

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "select * from students where id = '$id' limit 1";

		$statement = $connect->query($query);
		$statement->execute();
	    $count = $statement->rowCount(); 
		if($count > 0)
		{

			$user_data = $statement->fetch(PDO::FETCH_ASSOC);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

