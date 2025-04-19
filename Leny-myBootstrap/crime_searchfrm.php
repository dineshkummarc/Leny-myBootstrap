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
$query = 'SELECT * FROM crime
              WHERE
              crime_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['CRIME_ID'];
                $i= $row['OFFENSE_CHARGED'];
                $a=$row['DATE_commission_of_the_crime'];
              }
              
              $id = $_GET['id'];
         
?>

                    <div class="col-lg-15">
                      <div class="col-lg-15">
                        <form role="form" method="post" action="index.php">   
                            <div class="form-group">
                            <input class="form-control" placeholder="CRIME_ID" name="crime_id" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="OFFENSE_CHARGED" name="offense" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="DATE_commission_of_the_crime" name="date" value="<?php echo $a; ?>">
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
