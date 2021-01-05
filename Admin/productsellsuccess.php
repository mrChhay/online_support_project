<?php
session_start();
define('TITLE','Success');
define('PAGE' , 'asset.php');
include('../dbConnection.php');
include('include/header.php');

if($_SESSION['is_adminlogin']){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}


$sql = "SELECT * FROM customer_tb WHERE cusid = 
{$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();

   echo "<div class='ml-5 mt-5 content conten-justify-center'>
        <h3 class='text-center'> Customer Bill</h3>
        <table class='table'>
            <tbody>
                <tr>
                    <th> Customer ID</th>
                    <td>" .$row['cusid'] ."</td>
                </tr>
                <tr>
                    <th> Customer Name</th>
                    <td>" .$row['cusname'] ."</td>
                </tr>
                <tr>
                    <th> Address</th>
                    <td>" .$row['cusadd'] ."</td>
                </tr>
                <tr>
                    <th> Product</th>
                    <td>" .$row['cpname'] ."</td>
                </tr>
                <tr>
                    <th> Quantity</th>
                    <td>" .$row['cpqty'] ."</td>
                </tr>
                <tr>
                    <th> Price</th>
                    <td>" .$row['cpeach'] ."</td>
                </tr>
                <tr>
                    <th> Total Cost</th>
                    <td>" .$row['cptotal'] ."</td>
                </tr>
                <tr>
                    <th> Date</th>
                    <td>" .$row['cpdate'] ."</td>
                </tr>
                <tr>
                    <td>
                    <form class='d-print-none'>
                    <input class='btn btn-danger' type='submit' value='print' 
                    onclick='window.print()'>
                    </form>
                    </td>
                    <td>
                    <a href='asset.php' class='btn btn-secondary d-print-none'> Close</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    ";
}else{
    echo "Failed";
}
?>

<?php
    include('include/footer.php');
?>