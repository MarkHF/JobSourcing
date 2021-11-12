<?php include_once '../config/init.php'; ?>

<?php

session_start();
require '../templates/config.php';
require_once 'functions.php';


$job = new Job;


$template = new Template('templates/editjob.php');
$job_id = isset($_GET['id']) ? $_GET['id'] : null;


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
      $sql = "select * from jobs where id = '$id'";
      $result = $connect->query($sql);
      $result_query = $result->fetch(PDO::FETCH_ASSOC);
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
		  
				  $sql_register = "UPDATE jobs SET departmentID = '$departmentID',company = '$company',companyOverview = '$companyOverview',
                  jobTitle = '$jobTitle',time = '$time',description = '$description',requirements = '$requirements'	
                  ,salary = '$salary',location = '$location',contactUser = '$contactUser',contactEmail = '$contactEmail', dateTimeUpdated = CURRENT_TIMESTAMP
                   WHERE id = '$id'";
				  $execute_query = $connect->query($sql_register);
                  if(isset($execute_query)) {
                    $message = "Successfully updated ".$name."!";
                    header("Location:index.php?message=".$message);
                  }
				
			  
			}	
            		
        }
    }catch (Exception $e) {
        echo "Error occured: ".$e;
      }
}


$template->department = $job->getDepartment();
$template->job = $job->getJob($job_id);



echo $template;