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
$query = 'SELECT * FROM detainee_history
              WHERE
              detainee_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['DETAINEE_ID'];
                $i= $row['CRIME_CHARGED_section_RA'];
                $a=$row['DATE_last_hearing'];
                $b=$row['PENALTY'];
                $c=$row['REMARKS'];
              }
              
              $id = $_GET['id'];
         
?>
                    <div class="col-lg-15">
                      <div class="col-lg-15">
                        <form role="form" method="post" action="dhistory_edit1.php">
                            <div class="form-group">
                              <input class="form-control" placeholder="DETAINEE_ID" name="detainee_id" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="CRIME_CHARGED_section_RA" name=crime_charged value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="date" placeholder="DATE_last_hearing" name="date" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="PENALTY" name="penalty" value="<?php echo $b; ?>">
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="REMARKS" name="remarks" value="<?php echo $c; ?>">
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
