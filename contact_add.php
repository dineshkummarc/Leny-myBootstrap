<?php    
       include('includes/connection.php');
       include('includes/header.php');

//$query = "SELECT concat(detainee_id,'-',fname,\" \",lname) FROM detainee_list";

//$result = mysqli_query($db,$query);
?> 
       
                <!-- /.row -->
      
                      
          <h3>Sign Up</h3>
          <form role="form" method="post" action="contact_transac.php?action=add">
            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="name">Name</label>
                <input type="text" id="name" class="form-control" placeholder="Your fullname">
              </div>  
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="email">Email</label>
                <input type="text" id="email" class="form-control" placeholder="Your email address">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="sr-only" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary">
            </div>

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

