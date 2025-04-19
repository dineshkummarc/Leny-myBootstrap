<?php 
       include('includes/connection.php');
       include('includes/header.php');
?>

               <!-- /.row -->
             <<div class="container" style="background-color: blue; width: 500px;">
             <div class="card card-register mx-auto mt-5">
              <div class="card-header">Detailed Records:</div>
             <div class="card-body" style="background-color: blue;">
             
<?php 
$query = 'SELECT * FROM cell
              WHERE
              cell_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['CELL_ID'];
                $i= $row['CELL_NO'];
                $a=$row['CELL_TYPE'];
                $b=$row['CAPACITY'];
             
              }
              
              $id = $_GET['id'];
         
?>

                    <div class="col-lg-15">
                      <div class="col-lg-15">
                       <form role="form" method="post" action="index.php">                            
                            <div class="form-group">
                            <input class="form-control" placeholder="CELL_ID" name="cell_id" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="CELL_NO" name="cell_no" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="CELL_TYPE" name="cell_type" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="CAPACITY" name="capacity" value="<?php echo $b; ?>">
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

