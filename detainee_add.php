<?php 
       include('includes/connection.php');
       include('includes/header.php');
?> 
                <!-- /.row -->

             <div class="container" style="background-color: blue; width: 500px;">
             <div class="card card-register mx-auto mt-5">
             <div class="card-header">Add new Detainee</div>
             <div class="card-body" style="background-color: blue;">
                        <form role="form" method="post" action="detainee_transac.php?action=add">   
                            <div class="form-group">
                            <input class="form-control" placeholder="DETAINEE_ID" name="detaineeid">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="FIRST_NAME" name="firstname">
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="LAST_NAME" name="lastname">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="AGE" name="age">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="GENDER" name="gender">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="STATUS" name="status">
                            </div> 
                            <div class="form-group">
                            <input class="form-control" type="date" placeholder="BIRTH_DATE" name="birthdate">
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

