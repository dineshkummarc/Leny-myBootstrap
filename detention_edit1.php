<?php include('includes/connection.php'); ?>

<?php
			$zz = $_POST['detainee_id'];
			$ddo = $_POST['date_detention_other'];
		    $dc = $_POST['date_commitment'];
	   
		
	 			$query = 'UPDATE detention set DATE_DETENTION_other_law_enforcement_agency ="'.$ddo.'",
					DATE_DETENTION_commitment_to_BJMP ="'.$dc.'" WHERE
					DETAINEE_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));					
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "detention.php";
		</script>
