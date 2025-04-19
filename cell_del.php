<?php include('includes/connection.php');?>  

<?php

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'cell':
					$query = 'DELETE FROM cell
							WHERE
							cell_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "cell.php";
			</script>				
				<?php  
		
			//break;
				}
			}
		
?>