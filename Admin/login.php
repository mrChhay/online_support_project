<?php
include('../dbConnection.php');

session_start();
if(!isset($_SESSION['is_adminlogin'])){
if(isset($_REQUEST['aEmail'])){
    $aEmail = mysqli_real_escape_string($conn, trim($_REQUEST['aEmail']));
    $aPassword = mysqli_real_escape_string($conn, trim($_REQUEST['aPassword']));
    $sql = "SELECT a_email, a_password FROM adminlogin_tb WHERE a_email = '".$aEmail. "'AND a_password ='".$aPassword."' limit 1 ";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        // echo "Login Success";
        $_SESSION['is_adminlogin'] = true;
        $_SESSION['aEmail'] = $aEmail;
        echo "<script> location.href='dashboard.php'</script>";
        exit;
    }
    else{
        $smg = '<div class="alert-warning mt-2"> Enter valid Email and Password</div>';
    }
}
}else{
    echo "<script> location.href='dashboard.php'</script>";
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
    <link rel="preconnect" href="../https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/custom.css">

    <title>Log in</title>
</head>

<body>

    <div class="mt-5 mt-5 text-center" style="font-size: 30px">
        <i class="fas fa-stethoscope"></i>
        <span> Online Service Management Systems</span>
    </div>
    <p class="text-center" style="font-size: 20px;">
        <i class="fas fa-user-secret text-danger"></i>
        Admin Area
    </p>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-6 col-md-4 ">
                <form action="" method="POST" class="shadow pt-3 pb-3 pl-2 pr-2">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label for="email" class="font-weght-bold pl-2">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="aEmail">
                        <small class="form-text">
                            We'll nerver share your email with anyone.
                        </small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="rPassword" class="font-weght-bold pl-2">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="aPassword">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block mt-5 shadow-sm">
                        Login
                    </button>
                    <?php
                        if(isset($smg)){echo $smg;}
                    ?>
                </form>
                <div class="text-center">
                    <a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- script -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>