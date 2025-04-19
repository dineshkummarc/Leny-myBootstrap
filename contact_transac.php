<?php include('includes/connection.php'); 

                        $id = $_POST['name'];
                        $dname = $_POST['dname'];
                        $message = $_POST['message'];











				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO contact
								(id,N_DETAINEE, messege)
								VALUES ({$id},'{$dname}','{$message}')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully Sent Message.");
			window.location = "contact.php";
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

