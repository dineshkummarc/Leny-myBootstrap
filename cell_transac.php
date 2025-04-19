<?php include('includes/connection.php'); ?>   


                <?php

						$zz = $_POST['cell_id'];
                        $cno = $_POST['cell_no'];
                        $ctype = $_POST['cell_type'];
                        $cap = $_POST['capacity'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO cell
								(cell_id, cell_no, cell_type, capacity)
								VALUES ('$zz','".$cno."','".$ctype."','".$cap."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "cell.php";
		</script>
                    </div>
                </div>            
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
