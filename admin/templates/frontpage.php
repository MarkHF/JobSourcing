<?php include 'inc/header.php'; ?>  
<div class="jumbotron">
       <form method="GET" action ="index.php">
            <br>
                <input type="submit" class="btn btn-lg btn-success" value="Filter">
            <div class="col-md-8">
            <select name="department" class="form-control">
                    <option value="0">Course</option>
                    <?php foreach($department as $course): ?>
                        <option value="<?php echo $course->id; ?>"><?php echo $course->course; ?></option>
                    <?php endforeach; ?>
            </select>
            </div>  
      </div>                
    <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $job->jobTitle; ?></h4>
          <p><?php echo $job->time;?></p>
          <p><?php echo $job->company;?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-default" href="job.php?id=<?php echo $job->id; ?>"><?php echo $job->location;?></a>
        </div>
      </div>
      <?php endforeach; ?>
      
      
<?php include 'inc/footer.php'; ?>