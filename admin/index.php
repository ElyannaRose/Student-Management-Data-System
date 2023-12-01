<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12"><br>
					<div class="sti">
						<img src="../image/Heads.jpg" class="img-rounded" width="1170" height="216">
					</div>
				<div class="login">
				<div class="log_txt">
				<p><strong>Please Enter Your Details Only..</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Username</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Password</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" >
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
								</div>
								</div>
								
								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
								$index = $conn ->query($query);
								$num_row = mysqli_num_rows($index);
									$row=mysqli_fetch_array($index);
									if( $num_row > 0 ) {
										if($row['user_type']=='Administrator')
										{
										header('location:dasboard.php');
										
								$_SESSION['id']=$row['user_id'];
									}
									else{ ?>
								<div class="alert alert-danger">Access Denied</div>		
								<?php
								}}
								?>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>