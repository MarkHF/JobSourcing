<?php include 'inc/header.php'; ?> 

<div class="jumbotron" style="background-color:#DBA40E;">
       <form method="GET" action ="index.php">
            <br>
                <input type="submit"  name="submitQuery" class="btn btn-lg btn-default" style="background-color:#2C3E50;" value="Search">
            <div class="col-md-8">
            <input class="form-control" name="company" type="text" placeholder="Search">
            <select name="department" class="form-control">
                    <option value="0">Course</option>
                    <?php foreach($department as $course): ?>
                        <option value="<?php echo $course->id; ?>"><?php echo $course->course; ?></option>
                    <?php endforeach; ?>
            </select>
            </div>  
      </div>                
    <?php foreach($jobs as $job): ?>
      <div class="row marketing" style="border: 3px solid #ddd; background-color:#90EE90;">
        <div class="col-md-10">
          <a href="job.php?id=<?php echo $job->id; ?>"><h4 style="color:black;" ><b><?php echo $job->jobTitle; ?></b></h4></a>
          <p><?php echo $job->time;?></p>
          <p><?php echo $job->company;?></p>

        </div>
        <div class="col-sl-2"><br><br>
        <p><img src="ui\icons\1.png" style="border: 1px solid #ddd;
        border-radius: 4px;padding: 5px;width: 20px;"><b><?php echo $job->location;?></b></p>
        </div>
      </div>
      <?php endforeach; ?>
       <div>
      </div>

      
<?php include 'inc/footer.php'; ?>
