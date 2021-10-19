<?php include_once 'config/init.php'; ?>

<?php
session_start();

$job = new Job;

$template = new Template('templates/jobsingle.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;