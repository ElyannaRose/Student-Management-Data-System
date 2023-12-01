Program<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<?php include('head.php'); ?>
			<div class="span2">		
               <?php include('dashboard_sidebar.php'); ?>
			</div>	
			<div class="span12" style="max-width:948px	;margin-left: 50px;max-height: 100%">
			  			<ul class="nav nav-tabs nav-stacked">
                                            <li style="width: 130px">
                                            <a href="#add_course" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add Program</strong></a>
                                            </li>
                                        </ul>

                                        <?php include('modal_add_course.php'); ?>
                                        
            
           
            
            
                    
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Program Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Program Code</th>
                                        <th>Program Description</th>                                                                  
                                        <th>Date Created</th>                                               
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php $course_query="select * from course";
                                  $course = $conn ->query($course_query);

                                    while($row=mysqli_fetch_array($course)){
                                    $id=$row['course_id']; ?>
                                     <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['course_code']; ?></td> 
                                    <td><?php echo $row['course_description']; ?></td>  
                                    <td><?php echo $row['course_date_created']; ?></td>  
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_course<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_course_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        <?php include('modal_edit_course.php'); ?>
                                    </td>
                                    <?php include('toolttip_edit_delete.php'); ?>
                                         <!-- Modal edit user -->
                                
                                    </tr>
                                    <?php } ?>
                           
                                </tbody>
                            </table>			

			</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>