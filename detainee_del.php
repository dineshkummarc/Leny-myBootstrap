<?php include('includes/connection.php'); ?>  

<?php

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'detainee':
					$query = 'DELETE FROM detainee
							WHERE
							detainee_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "detainee_list.php";
			</script>				
				<?php  
		
			//break;
				}
			}
		
?>