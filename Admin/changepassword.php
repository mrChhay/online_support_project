<?php
session_start();
define('TITLE','change Password');
define('PAGE' , 'changepassword.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>
<?php
$aEmail = $_SESSION['aEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['a_password']==""){
        $passsmg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> Fill All Field!</div>';
    }else{
        $aPass = $_REQUEST['a_password'];
        $sql = "UPDATE adminlogin_tb SET a_password = '$aPass' WHERE a_email = '$aEmail'";
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
            <input type="email" class="form-control" id="inputEmail" value="<?php echo $aEmail; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputPass">New Password</label>
            <input type="password" class="form-control" id="inputPass" placeholder="New Password" name="a_password">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate"> Update</button>
        <button type="reset" class="btn btn-secondary mr-4 mt-4" name="reset"> Reset</button>
        <?php if(isset($passsmg)){ echo $passsmg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>
