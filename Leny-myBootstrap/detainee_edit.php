<?php
       include('includes/connection.php');
       include('includes/header.php');
?> 

                <!-- /.row -->
             <div class="container" style="background-color: blue; width: 500px;">
             <div class="card card-register mx-auto mt-5">
             <div class="card-header">Edit Records:</div>
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
                        <form role="form" method="post" action="detainee_edit1.php"> 
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
                            <?php
                           $query = "SELECT concat(LOCATION_ID, \"-\" ,STREET_ADDRESS) FROM location";
                           $result = mysqli_query($db,$query);
                           ?>
                           <div class="form-group">
                           <p>Staff:</p>
                           <select class="form-control" name="locationid">
                           <?php while($row = mysqli_fetch_array($result)):; ?>
                           <option><?php echo $row[0]; ?></option>
                           <?php endwhile; ?>
                           </select>
                           </div>

                            <?php
                           $query = "SELECT concat(CRIME_ID, \"-\" ,OFFENSE_CHARGED) FROM crime";
                           $result = mysqli_query($db,$query);
                           ?>
                           <div class="form-group">
                           <p>Staff:</p>
                           <select class="form-control" name="crimeid">
                           <?php while($row = mysqli_fetch_array($result)):; ?>
                           <option><?php echo $row[0]; ?></option>
                           <?php endwhile; ?>
                           </select>
                           </div>

                            <?php
                           $query = "SELECT concat(CELL_ID, \"-\" ,CELL_NO) FROM cell";
                           $result = mysqli_query($db,$query);
                           ?>
                           <div class="form-group">
                           <p>Staff:</p>
                           <select class="form-control" name="cellid">
                           <?php while($row = mysqli_fetch_array($result)):; ?>
                           <option><?php echo $row[0]; ?></option>
                           <?php endwhile; ?>
                           </select>
                           </div>
                            <button type="submit" class="btn btn-default">Update Record</button>
                        </form>  
                      </div>
                    </div>   
            </div>
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
