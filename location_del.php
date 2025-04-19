<?php include('includes/connection.php'); ?>  

<?php

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
			switch ($_GET['type']) {
				case 'location':
					$query = 'DELETE FROM location
							WHERE
							location_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));		
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "location.php";
			</script>				
				<?php  
		
			//break;
				}
			}
?>