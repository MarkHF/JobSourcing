<?php 

	include_once 'templates/config.php'; 
	if(isset($_POST["signup"]))  
	{  

		$id = $_POST['id'];
		$firstName = $_POST['firstName'];
		$middleName = $_POST['middleName'];
		$lastName = $_POST['lastName'];
		$contactNo = $_POST['contactNo'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		 if(empty($_POST["id"]) || empty($_POST["firstName"]) || empty($_POST["middleName"]) || empty($_POST["lastName"])
		 || empty($_POST["contactNo"]) || empty($_POST["email"]) || empty($_POST["password"]))  
		 {  
		  echo "Fill-out all Information"; 
		 }  
		 else  
		 {  
		  
			try {
				$query = "SELECT * FROM students WHERE id = '$id'";  
				$statement = $connect->prepare($query);  
				$statement->execute();
				$count = $statement->rowCount(); 
				if ($count == 0) {
				  $sql_register = "insert into students (id,firstName,middleName,lastName,contactNo,email,password) values ('$id','$firstName','$middleName','$lastName','$contactNo','$email','$password')";
				  $execute_query = $connect->query($sql_register);
				  echo "Success";
				  header("Location: login.php");
				  die;
				} else {
				  echo "Already registered!";
				}
			  } catch (Exception $e) {
				echo "Error occured: ".$e;
			  }
			}			
}
			
?>

<!DOCTYPE html>
<html>
<head>
	<title>UM Job Sourcing</title>
</head>

<style type="text/css">

	@font-face{
		font-family: headFont;
		src: url(ui/fonts/Assassin.ttf);
	}

	@font-face{
		font-family: myFont;
		src: url(ui/fonts/OpenSans-Regular.ttf);
	}

	#wrapper{
		max-width:auto;
	    min-height:auto; 
        margin: auto;
        color: grey;
        font-family: myFont;
        font-size: 13px;
        background: url(ui/icons/job.gif);
		background-repeat: no-repeat;
		background-size: 1350px 500px;
	}

	form{

		padding: 10px;
		width: 100%;
		max-width: 500px;
        background-color: rgba(125,149,185,0.8);
        
        
        
	}


	input[type=text],input[type=password],input[type=number],input[type=date]{

		padding: 10px;
		margin: 10px;
		width: 92%;
		border-radius: 5px;
		border: solid 1px grey;
	}

    select{
    padding: 10px;
    margin: 10px;
    width: 96%;
    border-radius: 5px;
    border: solid 1px grey;
    }

	input[type=submit]{

		width: 46%;
		cursor: pointer;
		text-align: center;
		padding: 10px;
        border-radius: 5px;
		border: solid 1px grey;
        margin: 10px;
        position:relative;
        left:120px;
        background-color:#4C9A2A;
        color:white;
        
	}

	input[type=radio]{

		transform: scale(1.2);
		cursor: pointer;
	}


	#error{

		text-align: center;
		padding: 0.5em;
		background-color: #ff5252;
		color: white;
	    display: none;
	}
    #bd{
color:black;

}
	
	
</style>
<body>
	<div id="wrapper">

	    <div id = "error">Error</div>

        <form method="post" id="myform" style = "position:relative; left:550px;">
			<input type="number" name="id" placeholder="ID Number"><br>
            <input type="text" name="firstName" placeholder="Firstname"><br>
            <input type="text" name="middleName" placeholder="Middle Name"><br>
            <input type="text" name="lastName" placeholder="Last Name"><br>
			<input type="number" name="contactNo" placeholder="Contact Number"><br>
			<input type="text" name="email" placeholder="Email"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input name="signup" type="submit" value="Sign up" id="signup_button" ><br>

			<br>
			<a href="login.php" style="display: block;text-align: center;text-decoration: none;">
				Already have an Account? Login here..
			</a>

		</form>
			
	</div>

</body>
</html>


