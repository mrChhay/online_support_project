<?php
session_start();
define('TITLE','Dashboard');
define('PAGE' , 'dashboard.php');
include('../dbConnection.php');
include('include/header.php');


if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}

// for dynamic dashboard
$sql = "SELECT max(request_id) FROM submitrequest_tb";
$result = $conn->query($sql);
// $row = mysqli_fetch_row($result);
$row = $result->fetch_row();
$submitrequest = $row[0];

$sql = "SELECT max(rno) FROM assignwork_tb";
$result = $conn->query($sql);
// $row = mysqli_fetch_row($result);
$row = $result->fetch_row();
$assignwork = $row[0];

$sql = "SELECT * FROM technician_tb";
$result = $conn->query($sql);
// $row = mysqli_fetch_row($result);
$totalteh = $result->num_rows;

?>
<div class="col-sm-9 col-md-10">
    <div class="row text-center mx-5">
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                <div class="card-header"> Requests Received</div>
                <div class="card-body">
                    <h4 class="card-title"> <?php echo $submitrequest; ?> </h4>
                    <a href="request.php" class="btn text-white"> View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                <div class="card-header"> Assign Work</div>
                <div class="card-body">
                    <h4 class="card-title"> <?php echo $assignwork; ?> </h4>
                    <a href="workoder.php" class="btn text-white"> View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-primary mb-3" style="max-width:18rem;">
                <div class="card-header"> No of Technicals</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $totalteh; ?></h4>
                    <a href="technicain.php" class="btn text-white"> View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5 mt-5 text-center">
        <p class="bg-dark text-white"> List Of Requesters</p>
        <?php 
            $sql = "SELECT * FROM requesterlogin_db";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo '
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Requester ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>';
                    while($row = $result->fetch_assoc()){
                       echo '<tr>';
                           echo '<td>'.$row["r_login_id"].'</td>';
                           echo '<td>'.$row["r_name"].'</td>';
                           echo '<td>'.$row["r_email"].'</td>';
                        echo '</tr>';
                    }
                   echo '</tbody>';
               echo '</table>';
            }else{
                echo '0 Result';
            }
        ?>
    </div>
</div>


<?php
    include('include/footer.php');
  ?>