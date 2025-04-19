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
$query = 'SELECT * FROM location
              WHERE
              location_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['LOCATION_ID'];
                $i= $row['STREET_ADDRESS'];
                $a=$row['BARANGAY_ADDRESS'];
                $b=$row['CITY_JAIL'];
                $c=$row['COURT_BRANCH'];
                $d=$row['ZIP_CODE'];
             
              }
              
              $id = $_GET['id'];   
?>
                   <div class="col-lg-15">
                      <div class="col-lg-15">
                        <form role="form" method="post" action="index.php">
                            <div class="form-group">
                              <input class="form-control" placeholder="LOCATION_ID" name="id" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="STREET_ADDRESS" name="saddress" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="BARANGAY_ADDRESS" name="baddress" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="CITY_JAIL" name="cjail" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="COURT_BRANCH" name="cbranch" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="ZIP_CODE" name="zcode" value="<?php echo $d; ?>">
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
