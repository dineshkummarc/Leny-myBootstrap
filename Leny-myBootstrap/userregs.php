<?php include('includes/connection.php'); ?>   

                <?php

                        $first = $_POST['fname'];
                        $last = $_POST['lname'];
                        $user = $_POST['userr'];
                        $pass = $_POST['passs'];

                    switch($_GET['action']){
                        case 'add':         
                                $query = "INSERT INTO user
                                (id, firstname, lastname, username, password)
                                VALUES (Null,'".$first."','".$last."','".$user."',MD5('".$pass."'))";
                                mysqli_query($db,$query)or die (mysqli_error($db));
                        break;          
                        }
                        ?>
        <script type="text/javascript">
            alert("Successfully added.");
            window.location = "userlogin.php";
        </script>
  ?>
  