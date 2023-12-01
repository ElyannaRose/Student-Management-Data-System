						<tr>
								   <td></td> 
								   <td class="numberu">Number of Units:</td> 
								   <td> 					
								   <?php
                            $result = "SELECT sum(unit) FROM grade  where student_id = '$session_id' and school_year like '%$school_year%' and semester like '%$semester%'";
                            $rees = $conn ->query($result);

                            while ($rows = mysqli_fetch_array($rees)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
							
									</td> 
								   <td></td> 
								   <td></td> 
								   <td></td> 
								</tr>