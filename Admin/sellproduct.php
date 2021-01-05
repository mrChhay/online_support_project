<?php
session_start();
define('TITLE','Sell Product');
define('PAGE' , 'asset.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}

if(isset($_REQUEST['psubmit'])){
    if(($_REQUEST['cname'] == "") || ($_REQUEST['cadd'] == "") || ($_REQUEST['pname'] == "") || ($_REQUEST['pqty'] == "")
    || ($_REQUEST['psellingcost'] == "") || ($_REQUEST['totalcost'] == "") || ($_REQUEST['selldate'] == "")){
        $msg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
    }else{
        $pid = $_REQUEST['pid'];
        $pava = $_REQUEST['pava'] - $_REQUEST['pqty'];

        $cusname = $_REQUEST['cname'];
        $cusadd = $_REQUEST['cadd'];
        $cpname = $_REQUEST['pname'];
        $cpqty = $_REQUEST['pqty'];
        $cpeach = $_REQUEST['psellingcost'];
        $cptotal = $_REQUEST['totalcost'];
        $cpdate = $_REQUEST['selldate'];

        $sql = "INSERT INTO customer_tb (cusname , cusadd , cpname , cpqty , cpeach , cptotal , cpdate)
         VALUES ('$cusname','$cusadd', '$cpname','$cpqty' , '$cpeach', '$cptotal' , '$cpdate')";

        if($conn->query($sql) == TRUE){
            $genid = mysqli_insert_id($conn);
            session_start();
            $_SESSION['myid'] = $genid;
            echo "<script> location.href='productsellsuccess.php'</script>";
        }

        $sqlup = "UPDATE asset_tb SET pava = '$pava WHERE pid = '$pid'";
        $conn->query($sqlup);
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Customer Bill</h3>
    <?php

if(isset($_REQUEST['issue'])){
    $sql = "SELECT * FROM asset_tb WHERE pid = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
   
    ?>

    <form action="" method="POST">
    <div class="form-group">
        <label for="pid"> Product ID</label>
        <input type="text" class="form-control" id="pid" name="pid"
        value="<?php if(isset($row['pid'])){echo $row['pid'];} ?>" readonly>
    </div>
    <div class="form-group">
        <label for="cname"> Customer Name</label>
        <input type="text" class="form-control" id="cname" name="cname">
    </div>
    <div class="form-group">
        <label for="cadd"> Customer Address</label>
        <input type="text" class="form-control" id="cadd" name="cadd">
    </div>
    <div class="form-group">
        <label for="pname">Product Name</label>
        <input type="text" class="form-control" id="pname" name="pname"
        value="<?php if(isset($row['pname'])){echo $row['pname'];} ?>">
    </div>
    <div class="form-group">
        <label for="pdop"> Date Of Purchess</label>
        <input type="date" class="form-control" id="pdop" name="pdop"
        value="<?php if(isset($row['pdop'])){echo $row['pdop'];} ?>">
    </div>
    <div class="form-group">
        <label for="pava"> Avaliable</label>
        <input type="text" class="form-control" id="pava" name="pava"
        value="<?php if(isset($row['pava'])){echo $row['pava'];} ?>" onkeypress="isInputNumber(event)" readonly>
    </div>
    <div class="form-group">
        <label for="pqty"> Quantity</label>
        <input type="text" class="form-control" id="pqty" name="pqty"
         onkeypress="isInputNumber(event)">
    </div>
   
    <div class="form-group">
        <label for="psellingcost"> Price</label>
        <input type="text" class="form-control" id="psellingcost" name="psellingcost"
        value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];} ?>" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="totalcost"> Total Price</label>
        <input type="text" class="form-control" id="totalcost" name="totalcost"
         onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
        <label for="inputdate"> Date</label>
        <input type="date" class="form-control" id="inputdate" name="selldate"
         onkeypress="isInputNumber(event)">
    </div>
    <div class="text-center">
    <button class="btn btn-danger" id="psubmit" name="psubmit"> Submit</button>
    <a href="asset.php" class="btn btn-secondary"> Close</a>
    </div>
    <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<?php
    include('include/footer.php');
?>