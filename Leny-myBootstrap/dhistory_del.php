<?php include('includes/connection.php'); ?>  

<?php

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'dhistory':
					$query = 'DELETE FROM detainee_history
							WHERE
							detainee_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "dhistory.php";
			</script>				
				<?php  
		
			//break;
				}
			}		
?>
