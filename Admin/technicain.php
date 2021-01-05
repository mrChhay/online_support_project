<?php
session_start();
define('TITLE','Technicain');
define('PAGE' , 'technicain.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white p-2"> List Of Technicain</p>

    <?php 
    $sql = "SELECT * FROM technician_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
       echo '<table class="table">';
           echo '<thead>';
               echo '<tr>';
                   echo '<th scope="col"> Emp ID</th>';
                   echo '<th scope="col"> Name</th>';
                   echo '<th scope="col"> City</th>';
                   echo '<th scope="col"> Mobile</th>';
                   echo '<th scope="col"> Email</th>';
                   echo '<th scope="col"> Action</th>';
               echo '</tr>';
           echo '</thead>';
           echo '<tbody>';
           while($row = $result->fetch_assoc()){
            echo '<tr>';
                echo '<td>'.$row["emp_id"].'</td>';
                echo '<td>'.$row["emp_name"].'</td>';
                echo '<td>'.$row["emp_city"].'</td>';
                echo '<td>'.$row["emp_mobile"].'</td>';
                echo '<td>'.$row["emp_email"].'</td>';

               echo '<td>';
                   echo '<form action="editemp.php" method="POST" class="d-inline">';
                       echo '<input type="hidden" name="id" value=' .$row["emp_id"].'> <button class="btn btn-info mr-3" name="edit" value="Edit">
                       <i class="fas fa-pen"></i>
                       </button>';
                   echo '</form>';
                   echo '<form action="" method="POST" class="d-inline">';
                   echo '<input type="hidden" name="id" value=' .$row["emp_id"].'> <button class="btn btn-secondary mr-3" name="delete" value="Delete">
                   <i class="fas fa-trash-alt"></i>
                   </button>';
               echo '</form>';
               echo '</td>';
            echo '</tr>';
           }
             
           echo '</tbody>';
       echo '</table>';
    }else{
        echo '0 Result';
    }
    ?>
<?php 
if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM technician_tb WHERE emp_id =
    {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        echo '<meta http-equive="refresh" content= "0;URL=?deleted">';
    }else{
        echo "Unable to Delete Data!";
    }
}
?>
        <div class="float-right" style="float: right;">
            <a href="insertemp.php" class="btn btn-danger"> <i class="fas fa-plus fa-2x"></i></a>
        </div>
</div>


    </div>
</div>
    <!-- End Side bar -->

 <!-- script -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>