<?php include('includes/connection.php'); ?>   

                <?php

						$zz = $_POST['id'];
                        $sadd = $_POST['saddress'];
                        $badd = $_POST['baddress'];
                        $cj = $_POST['cjail'];
				        $cb = $_POST['cbranch'];
                        $zc = $_POST['zcode'];

					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO location
								(location_id, street_address, barangay_address, city_jail, court_branch, zip_code)
								VALUES ('$zz','".$sadd."','".$badd."','".$cj."','".$cb."','".$zc."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
						break;		
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "location.php";
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

