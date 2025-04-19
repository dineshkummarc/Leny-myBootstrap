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
$query = 'SELECT * FROM detention
              WHERE
              detainee_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['DETAINEE_ID'];
                $i= $row['DATE_DETENTION_other_law_enforcement_agency'];
                $a=$row['DATE_DETENTION_commitment_to_BJMP'];
              }
              
              $id = $_GET['id']; 
?>
                    <div class="col-lg-15">
                      <div class="col-lg-15">
                        <form role="form" method="post" action="detention_edit1.php">
                          <div class="form-group">
                          <input class="form-control" placeholder="DETAINEE_ID" name="detainee_id" value="<?php echo $zz; ?>">
                          </div>
                          <div class="form-group">
                          <input class="form-control" placeholder="DATE_DETENTION_other_law_enforcement_agency" name="date_detention_other" value="<?php echo $i; ?>">
                          </div>
                          <div class="form-group">
                          <input class="form-control" placeholder="DATE_DETENTION_commitment_to_BJMP" name="date_commitment" value="<?php echo $a; ?>">
                          </div> 
                          <button type="submit" class="btn btn-default">Update Record</button>
                        </form>  
                      <dv>
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
