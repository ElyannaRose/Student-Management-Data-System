<?php include('header.php'); ?>
<?php include('session.php'); ?>

<?php include('dbcon.php'); ?>
<?php
$query="select * from students where student_id='$session_id'";
$dash = $conn ->query($query);
$row=mysqli_fetch_array($dash);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['student_status'];
$school_year = $row['year_level'];
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
			<div class="span12" style="border:1px solid red;max-width:948px	;margin-left: 50px;max-height: 100%">
			
				         
			</div>
		</div>
    </div>
</div>
<?php include('footer.php') ?>