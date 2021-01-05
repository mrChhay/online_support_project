<?php
session_start();
define('TITLE','Insert Emp');
define('PAGE' , 'technicain.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>

    <?php
 
    if(isset($_REQUEST['empsubmit'])){
        if(($_REQUEST['emp_name'] == "") || ($_REQUEST['emp_city'] == "") || ($_REQUEST['emp_mobile'] == "") || ($_REQUEST['emp_email'] == "")){
            $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
        }else{
            
            $ename = $_REQUEST['emp_name'];
            $ecity = $_REQUEST['emp_city'];
            $emobile = $_REQUEST['emp_mobile'];
            $eemail = $_REQUEST['emp_email'];
            
            $sql = "INSERT INTO technician_tb (	emp_name , emp_city , emp_mobile , emp_email) VALUES ('$ename','$ecity', '$emobile','$eemail')";
            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert-success col-sm-6 ml-5 mt-2">Add Successfully</div>';
            }else{
                $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2">Unable to Add</div>';
            }
        }
    }
    ?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Add New Technicain</h3>
    <form action="" method="POST">
    <div class="form-group">
        <label for="emp_name"> Name</label>
        <input type="text" class="form-control" id="emp_name" name="emp_name">
    </div>
    <div class="form-group">
        <label for="emp_city"> City</label>
        <input type="text" class="form-control" id="emp_city" name="emp_city">
    </div>
    <div class="form-group">
        <label for="emp_mobile"> mobile</label>
        <input type="text" class="form-control" id="emp_mobile" name="emp_mobile" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="emp_email"> Email</label>
        <input type="text" class="form-control" id="emp_email" name="emp_email">
    </div>

    <div class="text-center">
    <button type="submit" class="btn btn-danger" id="empsubmit" name="empsubmit">Submit </button>
    <a href="technicain.php" class="btn btn-secondary"> Close</a>
    </div>
    <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>
