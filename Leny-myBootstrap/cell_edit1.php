<?php include('includes/connection.php'); ?>

<?php
			$zz = $_POST['cell_id'];
			$cno = $_POST['cell_no'];
		    $ctype = $_POST['cell_type'];
			$cap= $_POST['capacity'];
	   
		
	 			$query = 'UPDATE cell set cell_no ="'.$cno.'",
					cell_type ="'.$ctype.'", capacity="'.$cap.'" WHERE
					cell_id ='.$zz.'';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "cell.php";
		</script>
