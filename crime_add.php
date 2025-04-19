<?php    
       include('includes/connection.php');
       include('includes/header.php');
?> 

                <!-- /.row -->
             <div class="container" style="background-color: blue; width: 500px;">
             <div class="card card-register mx-auto mt-5">
             <div class="card-header">Add new Crime</div>
             <div class="card-body" style="background-color: blue;">
                        <form role="form" method="post" action="crime_transac.php?action=add"> 
                            <div class="form-group">
                            <input class="form-control" type="number" placeholder="CRIME_ID" name="crime_id">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="OFFENSE_CHARGED" name="offense">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="date" placeholder="DATE(commission of the crime)" name="date">
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
