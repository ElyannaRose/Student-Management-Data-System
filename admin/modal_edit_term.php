	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Term</strong></div>
	<form class="form-horizontal" method="post">
		
		<div class="control-group">
				<label class="control-label" for="inputEmail">Term Code</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="term_code" placeholder="Term Code"  value="<?php echo $row['term_code']?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Term Description</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="term_description" placeholder="Term Description"  value="<?php echo $row['term_description']?>" required>
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
	
	$term_id=$row['term_id'];
	$term_code=$_POST['term_code'];
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
				$updaate = "update term set term_code='$term_code', term_description='$term_description' , term_date_created = '$date_created' where term_id='$term_id'"; 
				$meu = $conn ->query($updaate);	
				?>
				<script type="text/javascript">
				window.alert(" Term is Successfully Updated!");
				</script>
				<?php
				}
	
	
	?>
	<script>
	window.location="term.php";
	</script>
	<?php
	}
	?>