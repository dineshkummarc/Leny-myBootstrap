<?php       
       include('includes/connection.php');
       include('includes/header.php');
?> 
                       <!-- /.row -->
              <div class="container" style="background-color: blue; width: 500px;">
             <div class="card card-register mx-auto mt-5">
             <div class="card-header">Add new Location</div>
             <div class="card-body" style="background-color: blue;">
                        <form role="form" method="post" action="location_transac.php?action=add">
                            <div class="form-group">
                              <input class="form-control" placeholder="LOCATION_ID" name="id">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="STREET_ADDRESS" name="saddress">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="BARANGAY_ADDRESS" name="baddress">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="CITY_JAIL" name="cjail">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="COURT_BRANCH" name="cbranch">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="ZIP_CODE" name="zcode">
                            </div>
                            <button type="submit" class="btn btn-default">Save </button>
                            <button type="reset" class="btn btn-default">RESET</button>
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
