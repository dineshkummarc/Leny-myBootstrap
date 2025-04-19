
<?php include('includes/connection.php');?>  

<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>
           
                <!-- Page Heading -->
                
                <!-- /.row -->
                <?php     
                 $id = $_GET['id'];                               
                $query = 'SELECT dt.DETAINEE_ID,concat(d.FIRST_NAME,"  ",d.LAST_NAME)as "name",dt.DATE_DETENTION_other_law_enforcement_agency,dt.DATE_DETENTION_commitment_to_BJMP FROM detention dt,detainee d where dt.DETAINEE_ID=d.DETAINEE_ID and d.DETAINEE_ID="'.$id .'"';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $zz= $row['DETAINEE_ID'];
                $ii= $row['name'];
                $i= $row['DATE_DETENTION_other_law_enforcement_agency'];
                $a=$row['DATE_DETENTION_commitment_to_BJMP'];
      
             
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
              <td align="center" width="20%"><b style="font-size: 30px">Date Detention(other law enforcement agency): </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $i; ?></a>
              </td>
            </tr>
        <br>
        <br>
         <tr>
              <td align="center" width="20%"><b style="font-size: 30px">Date Detention(commitment to BJMP): </b></td>
              <td align="center" width="20%">
                <a style="font-size: 24px"><?php echo $a; ?></a>
              </td>
            </tr>
        <br>
        <br>
         
              

                         
                    </div>
                </div>
                </div>
        
       






