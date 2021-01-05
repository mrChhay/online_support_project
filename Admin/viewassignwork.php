<?php
session_start();
define('TITLE','Work Order');
define('PAGE' , 'workoder.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}
?>

<div class="col-sm-6 mt-5 mx-3">
    <h3 class="text-center"> Assign Work details</h3>
    <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM assignwork_tb WHERE request_id = 
            {$_REQUEST['id']}";
             $result = $conn->query($sql);
             $row = $result->fetch_assoc(); ?>

    <table class="table table-bordered">
          <tbody>
    
            <tr>
                <td>Request ID</td>
                <td> <?php if(isset($row['request_id'])){ echo $row['request_id'];} ?></td>
            </tr>
            
            <tr>
                <td>Request Info</td>
                <td> <?php if(isset($row['request_info'])){ echo $row['request_info'];} ?></td>
            </tr>
            <tr>
                <td>Request Description</td>
                <td> <?php if(isset($row['request_desc'])){ echo $row['request_desc'];} ?></td>
            </tr>
            <tr>
                <td>Request Name</td>
                <td> <?php if(isset($row['request_name'])){ echo $row['request_name'];} ?></td>
            </tr>
            <tr>
                <td>Request Address line 1</td>
                <td> <?php if(isset($row['request_add1'])){ echo $row['request_add1'];} ?></td>
            </tr>
            <tr>
                <td>Request Address 2</td>
                <td> <?php if(isset($row['request_add2'])){ echo $row['request_add2'];} ?></td>
            </tr>
            <tr>
                <td>Request City</td>
                <td> <?php if(isset($row['request_city'])){ echo $row['request_city'];} ?></td>
            </tr>
            <tr>
                <td>Request State</td>
                <td> <?php if(isset($row['request_state'])){ echo $row['request_state'];} ?></td>
            </tr>
            <tr>
                <td>Request Zip</td>
                <td> <?php if(isset($row['request_zip'])){ echo $row['request_zip'];} ?></td>
            </tr>
            <tr>
                <td>Request Email</td>
                <td> <?php if(isset($row['request_email'])){ echo $row['request_email'];} ?></td>
            </tr>
            <tr>
                <td>Request Mobile</td>
                <td> <?php if(isset($row['request_mobile'])){ echo $row['request_mobile'];} ?></td>
            </tr>
            <tr>
                <td>Assign Date</td>
                <td> <?php if(isset($row['assign_date'])){ echo $row['assign_date'];} ?></td>
            </tr>
            <tr>
                <td>Technicain Name</td>
                <td> <?php if(isset($row['assign_tech'])){ echo $row['assign_tech'];} ?></td>
            </tr>
            <tr>
                <td> Customer Sign</td>
                <td></td>
            </tr>
            <tr>
                <td> Technicain Sign</td>
                <td></td>
            </tr>
          </tbody>
        </table>
            
        <div class="text-center">
            <form action="" class="mb-3 d-print-none d-inline">
                <input class="btn btn-danger" type="submit" value="Print" onclick="window.print()">
            </form>
            <form action="workoder.php" class="mb-3 d-print-none d-inline">
                <input class="btn btn-secondary" type="submit" value="Close">
            </form>
        </div>

    <?php }?>
    
    <!-- ?> -->
</div>
<?php
    include('include/footer.php');
?>