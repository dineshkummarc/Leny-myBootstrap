<?php include('includes/connection.php'); ?>   


<?php

						$zz = $_POST['crime_id'];
                        $offcha = $_POST['offense'];
                        $dcotc = $_POST['date'];
				
					switch($_GET['action']){
				 		case 'add':			
								$query = "INSERT INTO crime
								(crime_id, offense_charged, date_commission_of_the_crime)
								VALUES ('$zz','".$offcha."','".$dcotc."')";
								mysqli_query($db,$query)or die (mysqli_error($db));			
						break;					
						}
				        ?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "crime.php";
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

