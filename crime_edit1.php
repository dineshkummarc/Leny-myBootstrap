<?php include('includes/connection.php'); ?>

<?php
			$zz = $_POST['crime_id'];
			$offchar = $_POST['offense'];
		    $date = $_POST['date'];
	   
	 			$query = 'UPDATE crime set OFFENSE_CHARGED ="'.$offchar.'",
					DATE_commission_of_the_crime ="'.$date.'" WHERE
					CRIME_ID ='.$zz.'';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));				
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "crime.php";
		</script>
