
<?php include('includes/connection.php');?>  

<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>


           
                <!-- Page Heading -->
              
                <!-- /.row -->
                <?php     
                 $id = $_GET['id'];             
                 $query = 'SELECT dh.DETAINEE_ID,concat(d.FIRST_NAME,"  ",d.LAST_NAME)as "name",dh.CRIME_CHARGED_section_RA,dh.DATE_last_hearing,dh.PENALTY,dh.REMARKS FROM detainee_history dh,detainee d where dh.DETAINEE_ID=d.DETAINEE_ID and d.DETAINEE_ID="'.$id .'"';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
              $zz= $row['DETAINEE_ID'];
                $ii=$row['name'];
                $i= $row['CRIME_CHARGED_section_RA'];
                $a=$row['DATE_last_hearing'];
                $b=$row['PENALTY'];
                $c=$row['REMARKS'];
      
             
              }
              
             
         
?>

               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"> Details </div>
        <div class="card-body">

            <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Detainee Name: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $ii; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">CRIME: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $i; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">DATE LAST HEARING: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $a; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">PENALTY: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $b; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">STATUS: </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $c; ?></a>
              </td>
            </tr>
        <br>
        <br>
              

                         
                    </div>
                </div>
                </div>
        
       






