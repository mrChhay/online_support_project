<?php
session_start();
define('TITLE','Update Requester');
define('PAGE' , 'requester.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Update Requester Details</h3>
    <?php
    if(isset($_REQUEST['edit'])){
        $sql = "SELECT * FROM requesterlogin_db WHERE r_login_id = 
        {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    if(isset($_REQUEST['requpdate'])){
        if(($_REQUEST['r_login_id'] == "") || ($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "")){
            $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
        }else{
            $rid = $_REQUEST['r_login_id'];
            $rname = $_REQUEST['r_name'];
            $remail = $_REQUEST['r_email'];
            $sql = "UPDATE requesterlogin_db SET r_login_id = '$rid', r_name = '$rname',
            r_email = '$remail'";
            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert-success col-sm-6 ml-5 mt-2">Update Successfully</div>';
            }else{
                $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2">Unable to Update</div>';
            }
        }
    }
    ?>

    <form action="" method="POST">
    <div class="form-group">
        <label for="r_login_id"> Request ID</label>
        <input type="text" class="form-control" id="r_login_id" name="r_login_id"
        value="<?php if(isset($row['r_login_id'])){echo $row['r_login_id'];} ?>" readonly>
    </div>
    <div class="form-group">
        <label for="r_name"> Name</label>
        <input type="text" class="form-control" id="r_name" name="r_name"
        value="<?php if(isset($row['r_name'])){echo $row['r_name'];} ?>">
    </div>
    <div class="form-group">
        <label for="r_email"> Email</label>
        <input type="text" class="form-control" id="r_email" name="r_email"
        value="<?php if(isset($row['r_email'])){echo $row['r_email'];} ?>">
    </div>
    <div class="text-center">
    <button class="btn btn-danger" id="requpdate" name="requpdate"> Update</button>
    <a href="requester.php" class="btn btn-secondary"> Close</a>
    </div>
    <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>