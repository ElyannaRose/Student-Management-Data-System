	<div id="add_course" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Program</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Program Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="course_code" placeholder="Course Code" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Program Description</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="course_description" placeholder="Course Description" required>
				</div>
			</div>
			
					
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$course_code=$_POST['course_code'];
	$course_description=$_POST['course_description'];
	
	$date_created=date("m/d/Y");
	$sql = "SELECT * FROM course where course_code='$course_code'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		?>
		<script type="text/javascript">
			window.alert("Program Year already exist!! ");
		</script>
		<?php
	}
			else
			{
				
				$inserrt = "insert into course (course_code,course_description,course_date_created)values('$course_code','$course_description','$date_created')";
				$mao = $conn ->query($inserrt);
				?>
				<script type="text/javascript">
				window.alert(" Program is Successfully Added!");
				</script>
				<?php
			}
	
	
	}
	
	?>