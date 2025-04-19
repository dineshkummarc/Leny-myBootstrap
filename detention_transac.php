<?php include('includes/connection.php'); ?>   

                <?php

						$zz = $_POST['detainee_id'];
                        $ddo = $_POST['date_detention_other'];
                        $dc = $_POST['date_commitment'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO detention
								(detainee_id, date_detention_other_law_enforcement_agency, date_detention_commitment_to_bjmp)
								VALUES ('$zz','".$ddo."','".$dc."' )";
								mysqli_query($db,$query)or die (mysqli_error($db));
						break;				
						}
				        ?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "detention.php";
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
