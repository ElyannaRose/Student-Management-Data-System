	<div id="add_session" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Session Year</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Session Start</label>
				<div class="controls">
				<input type="number" id="inputEmail" name="session_start" placeholder="Session Start" required>
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
	$session_start=$_POST['session_start'];

	$session_end =$session_start +1;
	$date_created=date("m/d/Y");
	$yearvalid =date("Y");
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
				if($session_start < $yearvalid)
				{
					?>
					<script type="text/javascript">
					window.alert("Session Year is out of range!! ");
					</script>
					<?php
				}
				else
				{
				$inserrt = "insert into session (session_start,session_end,session_date_created)values('$session_start','$session_end','$date_created')";
				$mao = $conn ->query($inserrt);
				?>
				<script type="text/javascript">
				window.alert(" Session Year is Successfully Added!");
				</script>
				<?php
				}
			}
	
	
	}
	
	?>