<?php include('includes/connection.php'); ?>

<?php
			$zz = $_POST['detainee_id'];
			$ccsr = $_POST['crime_charged'];
		    $dlh = $_POST['date'];
			$pen = $_POST['penalty'];
	        $rem = $_POST['remarks'];
		
	 			$query = 'UPDATE detainee_history set crime_charged_section_ra ="'.$ccsr.'",
					date_last_hearing ="'.$dlh.'", penalty ="'.$pen.'", remarks ="'.$rem.'" WHERE
					detainee_id ='.$zz.'';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "dhistory.php";
		</script>
 