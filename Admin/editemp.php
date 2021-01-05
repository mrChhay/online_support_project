<?php
session_start();
define('TITLE','Update Technicain');
define('PAGE' , 'technicain.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Update Technicain Details</h3>
    <?php
    if(isset($_REQUEST['edit'])){
        $sql = "SELECT * FROM technician_tb WHERE emp_id = 
        {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    if(isset($_REQUEST['empqupdate'])){
        if(($_REQUEST['emp_id']=="") || ($_REQUEST['emp_name'] == "") || ($_REQUEST['emp_city'] == "") || ($_REQUEST['emp_mobile'] == "") || ($_REQUEST['emp_email'] == "")){
            $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
        }else{
            $eid = $_REQUEST['emp_id'];
            $ename = $_REQUEST['emp_name'];
            $ecity = $_REQUEST['emp_city'];
            $emobile = $_REQUEST['emp_mobile'];
            $eemail = $_REQUEST['emp_email'];

            $sql = "UPDATE technician_tb SET emp_id = '$eid', emp_name = '$ename',
            emp_city = '$ecity' , emp_mobile = '$emobile' , emp_email = '$eemail'";
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
        <label for="emp_id"> Emp ID</label>
        <input type="text" class="form-control" id="emp_id" name="emp_id"
        value="<?php if(isset($row['emp_id'])){echo $row['emp_id'];} ?>" readonly>
    </div>
    <div class="form-group">
        <label for="emp_name"> Name</label>
        <input type="text" class="form-control" id="emp_name" name="emp_name"
        value="<?php if(isset($row['emp_name'])){echo $row['emp_name'];} ?>">
    </div>
    <div class="form-group">
        <label for="emp_city"> City</label>
        <input type="text" class="form-control" id="emp_city" name="emp_city"
        value="<?php if(isset($row['emp_city'])){echo $row['emp_city'];} ?>">
    </div>
    <div class="form-group">
        <label for="emp_mobile"> Mobile</label>
        <input type="text" class="form-control" id="emp_mobile" name="emp_mobile"
        value="<?php if(isset($row['emp_mobile'])){echo $row['emp_mobile'];} ?>">
    </div>
    <div class="form-group">
        <label for="emp_email"> Email</label>
        <input type="text" class="form-control" id="emp_email" name="emp_email"
        value="<?php if(isset($row['emp_email'])){echo $row['emp_email'];} ?>">
    </div>
    <div class="text-center">
    <button class="btn btn-danger" id="empqupdate" name="empqupdate"> Update</button>
    <a href="technicain.php" class="btn btn-secondary"> Close</a>
    </div>
    <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>