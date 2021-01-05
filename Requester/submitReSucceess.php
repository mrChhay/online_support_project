<?php
// define('TITLE','Sucess');
// define('PAGE', 'requesterChhangpass.php');
// include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
}else{
    echo "<script> location.href='Requesterlogin.php.php'</script>";
}

$sql = "SELECT * FROM submitrequest_tb WHERE request_id = 
{$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    echo "
    <div class='ml-5 mt-5'>
        <table class='table'>
            <tbody>
                <tr>
                    <th> Request ID</th>
                    <td>" .$row['request_id']."</td>
                </tr>
                <tr>
                    <th> Name</th>
                    <td>".$row['request_name']."</td>
                </tr>
                <tr>
                    <th> Email ID</th>
                    <td>".$row['request_email']."</td>
                </tr>
                <tr>
                    <th> Requester info</th>
                    <td>".$row['request_info']."</td>
                </tr>
                <tr>
                    <th> Requester Description</th>
                    <td>".$row['request_desc']."</td>
                </tr>
                <tr>
                    <td> 
                        <form class='d-print-none'>
                        <input class='btn btn-danger' type='submit' value='print' 
                        onclick='window.print()'>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    ";
}else{
    echo "Fiall!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- fontawsome css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/custom.css">
    <title>
     testing
    </title>
</head>
<body>
     <!-- Top Navbar -->
     <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
        <a href="Requesprofile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OSMS</a>
    </nav>

   
            <!-- Start Profile Area -->
           
            
            <!-- End Profile Are -->
    
<?php
include('includes/footer.php');
?>