<?php include('includes/connection.php'); ?>   

                <?php

						$zz = $_POST['detainee_id'];
                        $ccsr = $_POST['crime_charged'];
                        $dlh = $_POST['date'];
                        $pen = $_POST['penalty'];
				        $rem = $_POST['remarks'];
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO detainee_history
								(detainee_id, crime_charged_section_ra, date_last_hearing, penalty, remarks)
								VALUES ('$zz','".$ccsr."','".$dlh."','".$pen."','".$rem."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
						break;			
						}
				        ?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "dhistory.php";
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
