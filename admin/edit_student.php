<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<?php include('head.php'); ?>
			<div class="span2">		
               <?php include('dashboard_sidebar.php'); ?>
			</div>	
			<div class="span12" style="border:1px solid red;max-width:948px	;margin-left: 50px;max-height: 100%">
			  				<?php 
		$query="select * from students where student_id='$get_id'";
		$es = $conn ->query($query);

		$row=mysqli_fetch_array($es);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Student</div>
			<p><a class="btn btn-info" href="students.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_students.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Student No:</label>
			<div class="controls">
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['student_id']; ?>" placeholder="Student No" required>
			<input type="text" id="inputEmail" name="student_no" value="<?php echo $row['student_no']; ?>" placeholder="Student No" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password:</label>
			<div class="controls">
			<input type="password" id="inputPassword" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Course:</label>
			<div class="controls">
			<select name="course" required class="span2">
			<option><?php echo $row['course']; ?></option>
				<?php
				$query="select * from course";
				$es1 = $conn ->query($query);

				while($row=mysqli_fetch_array($es1)){ ?>
				<option><?php echo $row['code']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Year Level:</label>
			<div class="controls">
				<select name="year_level" required>
					
	<?php 
		$query="select * from students where student_id='$get_id'";
		$es2 = $conn ->query($query);

		$row1=mysqli_fetch_array($es2);
		
		?>					
									<option><?php echo $row1['year_level']; ?></option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Fourth Year</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Term:</label>
			<div class="controls">
					<select name="term" class="span2" required>
									<option><?php  echo $row1['term']; ?></option>
									<option>1st</option>
									<option>2nd</option>
					</select>
			</div>
		</div>
		
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
					<select name="status" class="span2" required>
									<option><?php echo $row1['student_status']; ?></option>
									<option>Regular</option>
									<option>Irregular</option>
					</select>
			</div>
		</div>
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>