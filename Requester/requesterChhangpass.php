<?php
define('TITLE','Change Password');
define('PAGE', 'requesterChhangpass.php');
include('includes/header.php');
include('../dbConnection.php');

session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
}else{
    echo "<script> location.href='Requesterlogin.php'</script>";
}
$rEmail = $_SESSION['rEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['rPassword'] == ""){
        $passsmg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> Fill All Field!</div>';
    }else{
        $rPass = $_REQUEST['rPassword'];
        $sql = "UPDATE requesterlogin_db SET r_password = '$rPass' WHERE r_email = '$rEmail'";
        if($conn->query($sql) == TRUE){
            $passsmg = '<div class="alert-success col-sm-6 ml-5 mt-2"> Updeted Sucessfully </div>';
        }else{
            $passsmg = '<div class="alert-danger col-sm-6 ml-5 mt-2"> Unable to Update</div>';
        }
    }
}

?>
<div class="col-sm-9 col-md-10">
    <form action="" method="POST" class="py-4 mx-4">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputPass">New Password</label>
            <input type="password" class="form-control" id="inputPass" placeholder="New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate"> Update</button>
        <button type="reset" class="btn btn-secondary mr-4 mt-4" name="reset"> Reset</button>
        <?php if(isset($passsmg)){ echo $passsmg;} ?>
    </form>
</div>

<?php
include('includes/footer.php');
?>