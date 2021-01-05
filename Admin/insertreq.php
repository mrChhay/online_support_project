<?php
session_start();
define('TITLE','Insert Requester');
define('PAGE' , 'requester.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>


    <?php
 
    if(isset($_REQUEST['reqsubmit'])){
        if(($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "") || ($_REQUEST['r_password'] == "")){
            $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
        }else{
            
            $rname = $_REQUEST['r_name'];
            $remail = $_REQUEST['r_email'];
            $rpassword = $_REQUEST['r_password'];
            $sql = "INSERT INTO requesterlogin_db (r_name , r_email , r_password) VALUES ('$rname','$remail','$rpassword')";
            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert-success col-sm-6 ml-5 mt-2">Add Successfully</div>';
            }else{
                $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2">Unable to Add</div>';
            }
        }
    }
    ?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Add New Requester</h3>
    <form action="" method="POST">
    <div class="form-group">
        <label for="r_name"> Name</label>
        <input type="text" class="form-control" id="r_name" name="r_name">
    </div>
    <div class="form-group">
        <label for="r_email"> Email</label>
        <input type="text" class="form-control" id="r_email" name="r_email">
    </div>
    <div class="form-group">
        <label for="r_password"> Password</label>
        <input type="text" class="form-control" id="r_password" name="r_password">
    </div>
    <div class="text-center">
    <button class="btn btn-danger" id="reqsubmit" name="reqsubmit">Submit </button>
    <a href="requester.php" class="btn btn-secondary"> Close</a>
    </div>
    <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>
