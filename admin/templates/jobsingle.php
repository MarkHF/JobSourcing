<?php include 'inc/header.php'; ?>
<div style="border: 3px solid #ddd;background-color:#90EE90;">
        <h2 class="page-header"><b><?php echo $job->jobTitle ?></b></h2>
        <small><b>Date Posted <?php echo $job->dateTimeUpdated ?></b></small></div>
        <hr>
        <p class="lead" >Company : <?php echo $job->company ?></p>
        <ul class="group" style="border: 3px solid #ddd;background-color:#90EE90;">
            <li class="group-item"><strong>Location : <?php echo $job->location ?></strong></li>
            <li class="group-item"><strong>Looking For : <?php echo $job->time ?></strong></li>
            <li class="group-item"><strong>Salary : <?php echo $job->salary ?></strong></li>
            <li class="group-item"><strong>Job Description : <?php echo $job->description ?></strong></li>

        </ul>
        <p class="lead">Requirements</p>
        <ul class="list-group" style="border: 3px solid #ddd;">
            <li class="list-group-item" style="background-color:#90EE90;"><strong><?php echo $job->requirements ?></strong></li>
        </ul>
        <p class="lead">Company Overview</p>
        <ul class="list-group" style="border: 3px solid #ddd;">
            <li class="list-group-item" style="background-color:#90EE90;"><strong><?php echo $job->companyOverview ?></strong></li>
        </ul>
        <br><br>
        <a href="index.php"><b>Go Back</b></a>
        <br><br>
        <div class="well" style="background-color:#ECF87F;">
            <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-default" style="background-color:#2C3E50;">Edit</a>
            <form style="display:inline;" method="post" action="job.php">
            <input type="hidden" name="delID" value="<?php echo $job->id; ?>">
            <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure?');">

            </form>

        </div>

<?php include 'inc/footer.php'; ?>