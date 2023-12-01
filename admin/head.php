		<div class="span12">
				<div class="header11">
				<div class="pull-left" style="height:140px">
					
				</div>
				</div>
					<div class="alert alert-success"> 
						<strong>What's Up!</strong>&nbsp;Welcome to STUDENT MANAGEMENT DATA SYSTEM
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