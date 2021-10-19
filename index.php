<?php include_once 'config/init.php'; ?>

<?php

session_start();

require_once 'functions.php';
$job = new Job;
$template = new Template('templates/frontpage.php');
$department = isset($_GET['department']) ? $_GET['department'] : null;
if($department){
    $template->jobs = $job->getByDepartment($department);
}else{
    $template->jobs = $job->getAllJobs();
}

$template->department = $job->getDepartment();




echo $template;