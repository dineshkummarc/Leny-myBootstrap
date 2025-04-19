<?php
    include('includes/connection.php');
    include('includes/header.php');
    include('includes/navbar.php'); 
?>

     
     <div id="wrapper">

      <!-- Sidebar -->
<?php include('includes/sidebar.php'); ?>

      <div id="content-wrapper">
      <div class="container-fluid">
          <!-- Breadcrumbs-->
          <!-- DataTables Example -->
          <div> 
              <i class="fas fa-table"></i>
              LIST OF CELL 
              <a href="cell_add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>CELL ID</th>
                      <th>CELL NO</th>
                      <th>CELL TYPE</th>
                      <th>CAPACITY</th>
                      <th>OPTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php                  
                $query = 'SELECT * FROM cell';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['CELL_ID'].'</td>';
                            echo '<td>'. $row['CELL_NO'].'</td>';
                            echo '<td>'. $row['CELL_TYPE'].'</td>';
                            echo '<td>'. $row['CAPACITY'].'</td>';
                            echo '<td>';
                           
                            echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-edit" href="cell_edit.php?action=edit&id='.$row['CELL_ID'] . '" ></a>
                            </td>';
                            echo '</tr> ';
                }
            ?> 

                  </tbody>
                </table>
              </div>
            </div>
            
          </div>

        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer" style="background-color: gray;">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
<?php include('logout.php'); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>
