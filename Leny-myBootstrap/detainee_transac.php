<?php include('includes/connection.php'); ?>   


                <?php

						$zz = $_POST['detaineeid'];
                        $fname = $_POST['firstname'];
                        $lname = $_POST['lastname'];
                        $age = $_POST['age'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
                        $bdate = $_POST['birthdate'];
                        $lid = $_POST['locationid'];
                        $cid = $_POST['crimeid'];
                        $cellid = $_POST['cellid'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO detainee
								(detainee_id,first_name, last_name, age, gender, status, birth_date, location_id, crime_id, cell_id)
								VALUES ('$zz','".$fname."','".$lname."','".$age."','".$gender."','".$status."','".$bdate."','.$lid.',
                                '.$cid.','.$cellid.')";
								mysqli_query($db,$query)or die (mysqli_error($db));
						break;				
						}
				        ?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "detainee_list.php";
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
