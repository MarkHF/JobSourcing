<?php include_once '../config/init.php'; ?>

<?php

session_start();
require '../templates/config.php';
require_once 'functions.php';


$job = new Job;


$template = new Template('templates/newjob.php');


if(isset($_POST['submit'])){
    $company= $_POST['company'];
    $departmentID = $_POST['department'];
    $companyOverview = $_POST['companyOverview'];
    $jobTitle = $_POST['jobTitle'];
    $time = $_POST['time'];
    $description = $_POST['description'];
    $requirements = $_POST['requirements'];
    $salary = $_POST['salary'];
    $location = $_POST['location'];
    $contactUser = $_POST['contactUser'];
    $contactEmail = $_POST['contactEmail'];

    if(empty($_POST["company"]) || empty($_POST["companyOverview"]) || empty($_POST["jobTitle"]) || empty($_POST["time"])
		 || empty($_POST["description"]) || empty($_POST["requirements"]) || empty($_POST["salary"]) || empty($_POST["location"])
         || empty($_POST["contactUser"]) || empty($_POST["contactEmail"]))  
		 {  
		  echo "Fill-out all Information"; 
		 }  
		 else  
		 {  
		  
				  $sql_register = "INSERT INTO jobs (departmentID,company,companyOverview,jobTitle,time,description,requirements	
                  ,salary,location,contactUser,contactEmail) VALUES ('$departmentID','$company','$companyOverview','$jobTitle','$time','$description','$requirements'	
                  ,'$salary','$location','$contactUser','$contactEmail')";
				  $execute_query = $connect->query($sql_register);
				  echo "Success";
				  header("Location: index.php");
				  die;
				
			  
			}			
}


$template->department = $job->getDepartment();




echo $template;