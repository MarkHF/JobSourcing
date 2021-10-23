<?php include_once 'config/init.php'; ?>

<?php
session_start();
require_once 'functions.php';
require 'templates/config.php';
$job = new Job;

if(isset($_POST['delID'])){
    $delID = $_POST['delID'];
    $sql_register = "DELETE FROM jobs WHERE id = '$delID'";
				  $execute_query = $connect->query($sql_register);
				  echo "Success";
				  header("Location: index.php");
				  die;
}

$template = new Template('templates/jobsingle.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;