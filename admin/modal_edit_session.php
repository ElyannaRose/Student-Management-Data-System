	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Session Year</strong></div>
	<form class="form-horizontal" method="post">
		<div class="control-group">
				<label class="control-label" for="inputEmail">Session Start</label>
				<div class="controls">
				<input type="number" id="inputEmail" name="session_id" placeholder="Session Start" readonly value="<?php echo $row['session_id']?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Session Start</label>
				<div class="controls">
				<input type="number" id="inputEmail" name="session_start" placeholder="Session Start" required value="<?php echo $row['session_start']?>">
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit']))
	{
	
	$session_id=$_POST['session_id'];
	$session_start=$_POST['session_start'];
	$session_end =$session_start +1;
	$date_created=date("m/d/Y");

	$sql = "SELECT * FROM session where session_start='$session_start'";
	$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				?>
				<script type="text/javascript">
				window.alert("Session Year already exist!! ");
				</script>
				<?php
			}
			else
				{
				$updaate = "update session set session_start='$session_start', session_end='$session_end' , session_date_created = '$date_created' where session_id='$session_id'"; 
				$meu = $conn ->query($updaate);	
				?>
				<script type="text/javascript">
				window.alert(" Session Year is Successfully Updated!");
				</script>
				<?php
				}
	
	
	?>
	<script>
	window.location="session_year.php";
	</script>
	<?php
	}
	?>