
<?php  
 session_start(); 
include_once 'templates/config.php';    
 
		   if(isset($_POST["login"]))  
      {  
           if(empty($_POST["userName"]) || empty($_POST["password"]))  
           {  
			echo "User Name and Password Required"; 
           }  
           else  
           {  
			
                $query = "SELECT * FROM admin WHERE userName = :userName AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'userName'     =>     $_POST["userName"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["userName"] = $_POST["userName"];  
                     header("location:index.php");  
                }  
                else  
                {  
                     echo "Wrong User Name Or Password";  
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
	    min-height:850px; 
        margin: auto;
        color: grey;
        font-family: myFont;
        font-size: 13px;
        background: url(../ui/icons/login.png);
        background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: 1350px 800px;
	}

	form{

		padding: 15px;
		width: 100%;
		max-width: 350px;
        background-color: rgba(125,149,185,0.8);
        border-radius: 15px 15px 15px 15px;
        
        
        
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
		<label>Admin Login</label>
        <br>
        <br>
            <input type="text" name="userName" placeholder="User Name"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input name="login" type="submit" value="Login" id="login_button"><br>
			<br>
			
		</form>
			
	</div>
</body>
</html>
</html> 
