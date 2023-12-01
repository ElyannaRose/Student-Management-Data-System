		<tr>
								   <td></td> 
								   <td class="numberu">Number of Units:</td> 
								   <td> 					
								   <?php
                            $result = "SELECT sum(unit) FROM grade  where student_id = '$get_id' and school_year = '$school_year' and semester = '$term'";
                            $ut = $conn ->query($result);

                            while ($rows = mysqli_fetch_array($ut)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
							
									</td> 
								   <td></td> 
								   <td></td> 
								   <td></td> 
								</tr>