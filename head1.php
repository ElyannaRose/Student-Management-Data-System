		<div class="span12">
				<div class="header">
					<div class="pull-left" style="background-color: #025eb1;height:188px">
					
					</div>

					<style>
						.home-div{border:3px solid #000559; background-color: #000559; margin-top: -30px; height: 180px }
						.home{position:absolute;background-color: #025eb1;width:100px;height:30px;padding-top:4px ;text-align: center;margin: 150px 0px 0px 200px;border-right: 5px double white;border-left:5px double white }
						.home:hover{background-color: blue;}

						.log-div{border:3px solid #000559; background-color: #000559; height: 0px }
						.log{position:absolute;background-color: #025eb1;width:100px;height:30px;padding-top:4px ;text-align: center;margin: -36px 0px 0px 400px;border-right: 5px double white;border-left:5px double white }
						.log:hover{background-color: blue;}

						.about-div{border:3px solid #000559; background-color: #000559; height: 0px }
						.about{position:absolute;background-color: #025eb1;width:100px;height:30px;padding-top:4px ;text-align: center;margin: -42px 0px 0px 600px;border-right: 5px double white;border-left:5px double white }
						.about:hover{background-color: blue;}

						.dev-div{border:3px solid #000559; background-color: #000559; height: 0px }
						.dev{position:absolute;background-color: #025eb1;width:150px;height:30px;padding-top:4px ;text-align: center;margin: -48px 0px 0px 800px;border-right: 5px double white;border-left:5px double white }
						.dev:hover{background-color: blue;}

						
						

					</style>
				<div class="home-div">
								<div class="home">	
								<a  rel="tooltip"  data-placement="center" title="Home" id="home"   href="index.php"><span  style="color:white;font-size: 20px"><i class="icon-home icon-large"></i>&nbsp;Home</span></a>
								</div>
				</div>
				
				<div class="log-div">
								<div class="log">	
								<a rel="tooltip"  data-placement="bottom" title="Click Here to Login" id="login" href="#student"  data-toggle="modal"><span  style="color:white;font-size: 20px"><i class="icon-signin icon-large"></i>&nbsp;Login</span></a> 
								</div>
				</div>
				
				
					<div class="about-div">
								<div class="about">	
								<a rel="tooltip"  data-placement="bottom" title="About Information" id="signup" href="about.php"><span  style="color:white;font-size: 20px"><i class="icon-home icon-large"></i>&nbsp;About</strong></span></a> 
								</div>
				</div>

				<div class="dev-div">
								<div class="dev">	
								<a rel="tooltip"  data-placement="bottom" title="Developers Information" id="signup" href="developers.php"><span  style="color:white;font-size: 20px"><i class="icon-home icon-large"></i>&nbsp;Developers</strong></span></a> 
								</div>
				</div>

				
				
				</div>
					<div class="alert alert-success"><Strong>What's Up!</strong>&nbsp;Welcome to STUDENT MANAGEMENT DATA SYSTEM
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
				</div>
				<div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header"><div class="alert alert-info">SIGN IN</div></div>
				<div class="modal-body">
			<form class="form-horizontal" method="post" action="login.php">

				<div class="control-group">
				<label class="control-label" for="inputEmail">User-type </label>
				<div class="controls">
				<select name="user_type" required>
				<option>Student</option>
                <option>Administrator</option>
                 
              </select>
          </div>
      </div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Username</label>
					<div class="controls">
					<input type="text" id="inputEmail" name="username" placeholder="username" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="Password">
				</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<button type="submit" name="login" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
				</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>