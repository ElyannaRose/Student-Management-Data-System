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
			<div class="span12" style="max-width:948px	;margin-left: 50px;max-height: 100%">
			  			<ul class="nav nav-tabs nav-stacked">
                                            <li style="width: 130px">
                                            <a href="#add_year" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add Year</strong></a>
                                            </li>
                                        </ul>

                                        <?php include('modal_add_year.php'); ?>
                                        
            
           
            
            
                    
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Year Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Year Code</th>
                                        <th>Year Description</th>
                                        <th>Date Created</th>                                               
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php $year_query="select * from year";
                                  $year = $conn ->query($year_query);

                                    while($row=mysqli_fetch_array($year)){
                                    $id=$row['year_id']; ?>
                                     <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['year_code']; ?></td> 
                                    <td><?php echo $row['year_description']; ?></td> 
                                    <td><?php echo $row['year_date_created']; ?></td>  
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_year<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_year_modal.php'); ?>
                                        
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