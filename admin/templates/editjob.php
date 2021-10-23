<?php include 'inc/header.php'; ?> 

<h2 class="page-header">Edit New Job</h2>
<form method="post" action="edit.php?id=<?php echo $job->id; ?>">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
    </div>
    <div class="form-group">
        <label>Department</label>
        <select class="form-control" name="department">
        <option value="0">Course</option>
                    <?php foreach($department as $course): ?>
                        <?php if($job->departmentID == $course->id) : ?>
                        <option value="<?php echo $course->id; ?>" selected>
                        <?php echo $course->course; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $course->id; ?>">
                        <?php echo $course->course; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
        </select>
    </div> 
    <div class="form-group">
        <label>Company Overview</label>
        <input type="text" class="form-control" name="companyOverview" value="<?php echo $job->companyOverview; ?>">
    </div>
    <div class="form-group">
        <label>Job Title</label>
        <input type="text" class="form-control" name="jobTitle" value="<?php echo $job->jobTitle; ?>">
    </div>
    <div class="form-group">
        <label>Part-Time/Full-Time</label><br>
        <small><b>(Or Number Of Hours Needed Per Week/Day)</b></small>
        <input type="text" class="form-control" name="time" value="<?php echo $job->time; ?>">
    </div>
    <div class="form-group">
        <label>Job Descrition</label>
        <input type="text" class="form-control" name="description" value="<?php echo $job->description; ?>">
    </div>
    <div class="form-group">
        <label>Requirements</label>
        <input type="text" class="form-control" name="requirements" value="<?php echo $job->requirements; ?>">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input type="text" class="form-control" name="contactUser" value="<?php echo $job->contactUser; ?>">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input type="text" class="form-control" name="contactEmail" value="<?php echo $job->contactEmail; ?>">
    </div>
    <input type="submit" class="btn btn-default" value="Submit" name="submit">

</form>


<?php include 'inc/footer.php'; ?>  