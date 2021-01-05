<?php
session_start();
define('TITLE','Add New Product');
define('PAGE' , 'asset.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>

    <?php
 
    if(isset($_REQUEST['psubmit'])){
        if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['pava'] == "") || ($_REQUEST['ptotal'] == "")
        || ($_REQUEST['poriginalcost'] == "") || ($_REQUEST['psellingcost'] == "")){
            $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
        }else{
            
            $pname = $_REQUEST['pname'];
            $pdop = $_REQUEST['pdop'];
            $pava = $_REQUEST['pava'];
            $ptotal = $_REQUEST['ptotal'];
            $poriginalcost = $_REQUEST['poriginalcost'];
            $psellngcost = $_REQUEST['psellingcost'];
            
            $sql = "INSERT INTO asset_tb (	pname , pdop , pava , ptotal , poriginalcost , psellingcost) VALUES ('$pname','$pdop', '$pava','$ptotal' , '$poriginalcost', '$psellngcost')";
            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert-success col-sm-6 ml-5 mt-2">Add Successfully</div>';
            }else{
                $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2">Unable to Add</div>';
            }
        }
    }
    ?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Add New Product</h3>
    <form action="" method="POST">
    <div class="form-group">
        <label for="pname"> Name</label>
        <input type="text" class="form-control" id="pname" name="pname">
    </div>
    <div class="form-group">
        <label for="pdop"> DOP</label>
        <input type="date" class="form-control" id="pdop" name="pdop">
    </div>
    <div class="form-group">
        <label for="pava"> Avaliable</label>
        <input type="text" class="form-control" id="pava" name="pava" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="ptotal"> Total</label>
        <input type="text" class="form-control" id="ptotal" name="ptotal" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="poriginalcost"> Original Cost</label>
        <input type="text" class="form-control" id="poriginalcost" name="poriginalcost" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="psellingcost"> Selling Cost</label>
        <input type="text" class="form-control" id="psellingcost" name="psellingcost" onkeypress="isInputNumber(event)">
    </div>

    <div class="text-center">
    <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">Submit </button>
    <a href="asset.php" class="btn btn-secondary"> Close</a>
    </div>
    <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>
