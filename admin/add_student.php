<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<?php include('head.php'); ?>
			<div class="span2">		
               <?php include('dashboard_sidebar.php'); ?>
			</div>	
			<div class="span12" style="border:1px solid red;max-width:948px	;margin-left: 50px;max-height: 100%">
			  				<div class="alert alert-info">Add Student</div>
			<p><a href="students.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="student_save.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Student No:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="student_no" placeholder="Student No" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" placeholder="Lastname" required>
			</div>
		</div>

	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Course:</label>
			<div class="controls">
			<select name="course" required class="span2">
			<option></option>
				<?php
				$query="select * from course";
				$adds = $conn ->query($query);
				while($row=mysqli_fetch_array($adds)){ ?>
				<option ><?php echo $row['course_code']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Year Level:</label>
			<div class="controls">
			<select name="year_level" required>
									<option></option>
									<option>First Year</option>
									<option>Second Year</option>
									
					</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Term:</label>
			<div class="controls">
					<select name="term" class="span2" required>
									<option></option>
									<option>1st</option>
									<option>2nd</option>
									<option>Summer</option>
					</select>
			</div>
		</div>
		
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
					<select name="status" class="span2" required>
									<option></option>
									<option>Regular</option>
									<option>Irregular</option>
					</select>
			</div>
		</div>
		
		
		

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>