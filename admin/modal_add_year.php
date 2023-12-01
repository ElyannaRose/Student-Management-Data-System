	<div id="add_year" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add year</strong></div>
	<form class="form-horizontal" method="post">

			

			<div class="control-group">
				<label class="control-label" for="inputEmail">Year Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="year_code" placeholder="Year Code" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Year Description</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="year_description" placeholder="Year Description" required>
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
		
	$year_code=$_POST['year_code'];
	$year_description=$_POST['year_description'];
	
	$date_created=date("m/d/Y");
	$sql = "SELECT * FROM year where year_code='$year_code' and year_description='$year_description' ";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		?>
		<script type="text/javascript">
			window.alert(" Year already exist!! ");
		</script>
		<?php
	}
			else
			{
				
				$inserrt = "insert into year (year_code,year_description,year_date_created)values('$year_code','$year_description','$date_created')";
				$mao = $conn ->query($inserrt);
				?>
				<script type="text/javascript">
				window.alert(" Year is Successfully Added!");
				</script>
				<?php
			}
	
	
	}
	
	?>