<?php       
       include('includes/connection.php');
       include('includes/header.php');
?>
                <!-- /.row -->
             <div class="container" style="background-color: blue; width: 500px;">
             <div class="card card-register mx-auto mt-5">
             <div class="card-header">Detailed Records:</div>
             <div class="card-body" style="background-color: blue;">

<?php 
$query = 'SELECT * FROM detainee
              WHERE
              detainee_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['DETAINEE_ID'];
                $i= $row['FIRST_NAME'];
                $a=$row['LAST_NAME'];
                $b=$row['AGE'];
                $c=$row['GENDER'];
                $d=$row['STATUS'];
                $e=$row['BIRTH_DATE'];
                $f=$row['LOCATION_ID'];
                $g=$row['CRIME_ID'];
                $h=$row['CELL_ID'];
             
              }
              
              $id = $_GET['id']; 
?>
                    <div class="col-lg-15">
                      <div class="col-lg-15">
                        <form role="form" method="post" action="index.php">                           
                            <div class="form-group">
                            <input class="form-control" placeholder="DETAINEE_ID" name="detainee_id" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="FIRST_NAME" name="firstname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="LAST_NAME" name="lastname" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="AGE" name="age" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="GENDER" name="gender" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="STATUS" name="status" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="BIRTH_DATE" name="birthdate" value="<?php echo $e; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="LOCATION_ID" name="locationid" value="<?php echo $f; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="CRIME_ID" name="crimeid" value="<?php echo $g; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="CELL_ID" name="cellid" value="<?php echo $h; ?>">
                            </div>
                          <button type="submit" class="btn btn-default">Return to main menu</button>   
                        </form>  
                      </div>
                    </div>         
            </div>
          <!-- Sticky Footer -->
         <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
