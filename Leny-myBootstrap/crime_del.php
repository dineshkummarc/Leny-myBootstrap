<?php include('includes/connection.php'); ?>  

<?php

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'crime':
					$query = 'DELETE FROM crime
							WHERE
							crime_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "crime.php";
			</script>				
				<?php  
		
			//break;
				}
			}
		
?>