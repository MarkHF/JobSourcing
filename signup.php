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

        <form id="myform" style = "position:relative; left:550px;">
			<input type="number" name="idnumber" placeholder="ID Number"><br>
            <input type="text" name="firstname" placeholder="Firstname"><br>
            <input type="text" name="middlename" placeholder="Middle Name"><br>
            <input type="text" name="lastname" placeholder="Last Name"><br>
            <label for="birthday" id="bd">Birthday:</label>
            <input type="date" name="birthday" placeholder="Birthday"><br>
			<input type="number" name="contactNumber" placeholder="Contact Number"><br>
			<input type="text" name="email" placeholder="Email"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="password" name="password2" placeholder="Retype Password"><br>
			<input type="submit" value="Sign up" id="signup_button" ><br>

			<br>
			<a href="login.php" style="display: block;text-align: center;text-decoration: none;">
				Already have an Account? Login here..
			</a>

		</form>
			
	</div>

</body>
</html>
