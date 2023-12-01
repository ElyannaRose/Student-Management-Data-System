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
			  				<div style="border:1px solid black;">
			  					<div style="width: 250px;height: 140px;border: 1px solid green;margin-left:50px;background-color: skyblue;font-family: times new roman;font-size: 40px">
			  						<br><br><center><b>Student</b><br><br>100</center>
			  					</div>

			  					<div style="width: 250px;height: 140px;border: 1px solid orange;margin: -142px 10px 10px 352px;background-color: skyblue;font-family: times new roman;font-size: 40px">
			  						<br><br><center><b>Administrator</b><br><br>10</center>
			  					</div>

			  					<div style="width: 250px;height: 140px;border: 1px solid magenta;margin: -152px 10px 10px 652px;background-color: skyblue;font-family: times new roman;font-size: 40px">
			  						<br><br><center><b>Instructor</b><br><br>10</center>
			  					</div>
			  				</div>
			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>