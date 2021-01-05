<?php
session_start();
define('TITLE','Update Product');
define('PAGE' , 'asset.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Update Product Details</h3>
    <?php
    if(isset($_REQUEST['edit'])){
        $sql = "SELECT * FROM asset_tb WHERE pid = 
        {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    if(isset($_REQUEST['pqupdate'])){
        if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['pava'] == "") || ($_REQUEST['ptotal'] == "")
        || ($_REQUEST['poriginalcost'] == "") || ($_REQUEST['psellingcost'] == "")){
            $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
        }else{
            $pid = $_REQUEST['pid'];
            $pname = $_REQUEST['pname'];
            $pdop = $_REQUEST['pdop'];
            $pava = $_REQUEST['pava'];
            $ptotal = $_REQUEST['ptotal'];
            $poriginalcost = $_REQUEST['poriginalcost'];
            $psellngcost = $_REQUEST['psellingcost'];

            $sql = "UPDATE asset_tb SET pid = '$pid', pname = '$pname',
            pava = '$pava' , ptotal = '$ptotal' , poriginalcost = '$poriginalcost' , psellingcost = '$psellngcost'";
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
        <label for="pid"> Emp ID</label>
        <input type="text" class="form-control" id="pid" name="pid"
        value="<?php if(isset($row['pid'])){echo $row['pid'];} ?>" readonly>
    </div>
    <div class="form-group">
        <label for="pname"> Name</label>
        <input type="text" class="form-control" id="pname" name="pname"
        value="<?php if(isset($row['pname'])){echo $row['pname'];} ?>">
    </div>
    <div class="form-group">
        <label for="pdop"> DOP</label>
        <input type="date" class="form-control" id="pdop" name="pdop"
        value="<?php if(isset($row['pdop'])){echo $row['pdop'];} ?>">
    </div>
    <div class="form-group">
        <label for="pava"> Avaliable</label>
        <input type="text" class="form-control" id="pava" name="pava"
        value="<?php if(isset($row['pava'])){echo $row['pava'];} ?>" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="ptotal"> Total</label>
        <input type="text" class="form-control" id="ptotal" name="ptotal"
        value="<?php if(isset($row['ptotal'])){echo $row['ptotal'];} ?>" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="poriginalcost"> Original Cost</label>
        <input type="text" class="form-control" id="poriginalcost" name="poriginalcost"
        value="<?php if(isset($row['poriginalcost'])){echo $row['poriginalcost'];} ?>" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="psellingcost"> Selling Cost</label>
        <input type="text" class="form-control" id="psellingcost" name="psellingcost"
        value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];} ?>" onkeypress="isInputNumber(event)">
    </div>
    <div class="text-center">
    <button class="btn btn-danger" id="pqupdate" name="pqupdate"> Update</button>
    <a href="asset.php" class="btn btn-secondary"> Close</a>
    </div>
    <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>