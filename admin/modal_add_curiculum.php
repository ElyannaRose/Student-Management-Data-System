	<div id="add_curiculum" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Curiculum</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Curiculum Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="curiculum_code" placeholder="Curiculum Code" required>
				</div>
			</div>

			
			

			<div class="control-group">
				<label class="control-label" for="inputEmail">Curiculum Course</label>
				<div class="controls">
				<select name="curiculum_course" required>
				 <?php $course_query="select course_code from course";
                 $course = $conn ->query($course_query);
				 while($row=mysqli_fetch_array($course)){
                 $id=$row['course_id']; 
                 ?>
                 <option>  <tr><?php echo $row['course_code']; ?></tr> </option>
                 <?php
             	 }
                 ?>
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
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$curiculum_code=$_POST['curiculum_code'];
	$curiculum_course=$_POST['curiculum_course'];
	
	$date_created=date("m/d/Y");
	$sql = "SELECT * FROM curiculum where curiculum_code='$curiculum_code'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		?>
		<script type="text/javascript">
			window.alert("Curiculum Year already exist!! ");
		</script>
		<?php
	}
			else
			{
				
				$inserrt = "insert into curiculum (curiculum_code,curiculum_course,curiculum_date_created)values('$curiculum_code','$curiculum_course','$date_created')";
				$mao = $conn ->query($inserrt);
				?>
				<script type="text/javascript">
				window.alert(" Curiculum is Successfully Added!");
				</script>
				<?php
			}
	
	
	}
	
	?>