<?php include('includes/connection.php'); ?>

<?php
			$zz = $_POST['detainee_id'];
			$fname = $_POST['firstname'];
		    $lname = $_POST['lastname'];
			$age= $_POST['age'];
			$gender = $_POST['gender'];
			$status = $_POST['status'];
	    	$bdate = $_POST['birthdate'];
			$lid = $_POST['locationid'];
			$cid = $_POST['crimeid'];
			$cellid = $_POST['cellid'];
		
	 			$query = 'UPDATE detainee set first_name ="'.$fname.'",
					last_name ="'.$lname.'", age="'.$age.'",
					gender="'.$gender.'",status="'.$status.'", 
					birth_date="'.$bdate.'",location_id="'.$lid.'", 
					crime_id="'.$cid.'",cell_id="'.$cellid.'" WHERE
					detainee_id ='.$zz.'';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "detainee_list.php";
		</script>
