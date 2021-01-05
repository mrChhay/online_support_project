<?php
define('TITLE','Request Profile');
define('PAGE' , 'Requesprofile.php');
include('../dbConnection.php');
include('includes/header.php');
session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
    // $rName = $_SESSION['rName'];
}else{
    echo "<script> location.href='Requesterlogin.php.php'</script>";
}

$sql = "SELECT r_name,r_email FROM requesterlogin_db WHERE r_email = '$rEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
   $row = $result->fetch_assoc();
   $rName = $row['r_name'];
   $rEmail = $row['r_email'];
}

if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName'] == ""){
        $passmsg =  '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill all Fild</div>';
    }else{
        $rName = $_REQUEST['rName'];
        $sql = "UPDATE requesterlogin_db SET r_name = '$rName' WHERE r_email = '$rEmail'";
        if($conn->query($sql) == TRUE){
            $passmsg =  '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Update Successfully </div>';

        }else{
            $passmsg =  '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to update</div>';

        }
    }
}
?>


            <!-- Start Profile Area -->
            <div class="col-sm-6 mt-5">
                <form action="" method="POST" class="mx-5">
                    <div class="form-group">
                        <label for="rEmail">Email</label>
                        <input class="form-control" type="email" name="rEmail" id="rEmail"
                            value="<?php echo $rEmail; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="rName">Name</label>
                        <input class="form-control" type="text" name="rName" id="rName"
                        value="<?php echo $rName;?>" >
                    </div>
                    <button type="submit" class="btn btn-danger" name="nameupdate">
                        Update
                    </button>
                    <?php
                    if(isset($passmsg)){ echo $passmsg;}
                    ?>
                </form>
            </div>
            <!-- End Profile Are -->
  <?php
    include('includes/footer.php');
  ?>