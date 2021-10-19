
<?php  
 session_start(); 
include_once 'templates/config.php';    
 
		   if(isset($_POST["login"]))  
      {  
           if(empty($_POST["id"]) || empty($_POST["password"]))  
           {  
			echo "ID Number and Password Required"; 
           }  
           else  
           {  
			
                $query = "SELECT * FROM students WHERE id = :id AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'id'     =>     $_POST["id"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["id"] = $_POST["id"];  
                     header("location:index.php");  
                }  
                else  
                {  
                     echo "Wrong ID Number Or Password";  
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
		max-width:1350px;
	    min-height:600px; 
        margin: auto;
        color: grey;
        font-family: myFont;
        font-size: 13px;
        background: url(ui/icons/login.png);
        background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: 1350px 700px;
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
		<form method = "post" id="myform" style = "position:relative; left:800px; top:200px;">
        <br>
        <br>
        <br>
            <input type="number" name="id" placeholder="ID Number"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input name="login" type="submit" value="Login" id="login_button"><br>
			<br>
			<a href="signup.php" style="display: block;text-align: center;text-decoration: none;">
				Don't have an Account? Signup here..
			</a>
		</form>
			
	</div>
</body>
</html>
</html> 