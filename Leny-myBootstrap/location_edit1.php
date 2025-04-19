<?php include('includes/connection.php'); ?>

<?php
			$zz = $_POST['id'];
			$sadd = $_POST['saddress'];
		    $badd = $_POST['baddress'];
			$cj = $_POST['cjail'];
	        $cb = $_POST['cbranch'];
	        $zc= $_POST['zcode'];
		
	 			$query = 'UPDATE location set street_address ="'.$sadd.'",
					barangay_address ="'.$badd.'", city_jail ="'.$cj.'", court_branch ="'.$cb.'", zip_code ="'.$zc.'" WHERE
					location_id ='.$zz.'';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "location.php";
		</script>
 