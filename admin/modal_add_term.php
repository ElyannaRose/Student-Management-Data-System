	<div id="add_term" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Term</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Term Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="term_code" placeholder="Term Code" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Term Description</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="term_description" placeholder="Term Description" required>
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
	$term_code=$_POST['term_code'];
	$term_description=$_POST['term_description'];
	
	$date_created=date("m/d/Y");
	$sql = "SELECT * FROM term where term_code='$term_code'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		?>
		<script type="text/javascript">
			window.alert("Term Year already exist!! ");
		</script>
		<?php
	}
			else
			{
				
				$inserrt = "insert into term (term_code,term_description,term_date_created)values('$term_code','$term_description','$date_created')";
				$mao = $conn ->query($inserrt);
				?>
				<script type="text/javascript">
				window.alert(" Session Year is Successfully Added!");
				</script>
				<?php
			}
	
	
	}
	
	?>