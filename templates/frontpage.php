<?php include 'inc/header.php'; ?> 

<div class="jumbotron">
       <form method="GET" action ="index.php">
            <br>
                <input type="submit"  name="submitQuery" class="btn btn-lg btn-success" value="Search">
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
      <div class="row marketing" style="border: 3px solid #ddd;">
        <div class="col-md-10">
          <a href="job.php?id=<?php echo $job->id; ?>"><h4 ><?php echo $job->jobTitle; ?></h4></a>
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
