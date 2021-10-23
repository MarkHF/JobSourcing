<?php include 'inc/header.php'; ?>
        <h2 class="page-header"><?php echo $job->jobTitle ?></h2>
        <small><b>Date Posted <?php echo $job->dateTimeUpdated ?></b></small>
        <hr>
        <p class="lead">Company : <?php echo $job->company ?></p>
        <ul class="group" >
            <li class="group-item"><strong>Location : <?php echo $job->location ?></strong></li>
            <li class="group-item"><strong>Looking For : <?php echo $job->time ?></strong></li>
            <li class="group-item"><strong>Salary : <?php echo $job->salary ?></strong></li>
            <li class="group-item"><strong>Job Description : <?php echo $job->description ?></strong></li>

        </ul>
        <p class="lead">Requirements</p>
        <ul class="list-group" >
            <li class="list-group-item"><strong><?php echo $job->requirements ?></strong></li>
        </ul>
        <p class="lead">Company Overview</p>
        <ul class="list-group" >
            <li class="list-group-item"><strong><?php echo $job->companyOverview ?></strong></li>
        </ul>
        <br><br>
        <a href="index.php"><b>Go Back</b></a>
        <br><br>
        <div class="well">
            <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-default">Edit</a>
            <form style="display:inline;" method="post" action="job.php">
            <input type="hidden" name="delID" value="<?php echo $job->id; ?>">
            <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure?');">

            </form>

        </div>

<?php include 'inc/footer.php'; ?>