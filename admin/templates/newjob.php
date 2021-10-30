<?php include 'inc/header.php'; ?> 

<h2 class="page-header">Add New Job</h2>
<form method="post" action="create.php">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company">
    </div>
    <div class="form-group">
        <label>Department</label>
        <select class="form-control" name="department">
        <option value="0">Course</option>
                    <?php foreach($department as $course): ?>
                        <option value="<?php echo $course->id; ?>"><?php echo $course->course; ?></option>
                    <?php endforeach; ?>
        </select>
    </div> 
    <div class="form-group">
        <label>Company Overview</label>
        <input type="text" class="form-control" name="companyOverview">
    </div>
    <div class="form-group">
        <label>Job Title</label>
        <input type="text" class="form-control" name="jobTitle">
    </div>
    <div class="form-group">
        <label>Part-Time/Full-Time</label><br>
        <small><b>(Or Number Of Hours Needed Per Week/Day)</b></small>
        <input type="text" class="form-control" name="time">
    </div>
    <div class="form-group">
        <label>Job Descrition</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
        <label>Requirements</label>
        <input type="text" class="form-control" name="requirements">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" name="salary">
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input type="text" class="form-control" name="contactUser">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input type="text" class="form-control" name="contactEmail">
    </div>
    <input type="submit" class="btn btn-default" value="Submit" name="submit" style="background-color:#2C3E50;">

</form>


<?php include 'inc/footer.php'; ?>  