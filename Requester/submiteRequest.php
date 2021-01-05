<?php
define('TITLE','Submit Request');
define('PAGE' , 'submiteRequest.php');
include('includes/header.php');

include('../dbConnection.php');

session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
}else{
    // echo "<script> location.href='Requesterlogin.php'</script>";
}

if(isset($_REQUEST['submitrequest'])){
    // checking for empty field
    if(($_REQUEST['requestinfo']) == "" || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestname'] == "")
    || ($_REQUEST['requestadd1'] == "") || ($_REQUEST['requestadd2'] == "") || ($_REQUEST['requestcity'] == "")
    || ($_REQUEST['requeststate'] == "") || ($_REQUEST['requestzip'] == "") || ($_REQUEST['requestemail'] == "")
    || ($_REQUEST['requestmobile'] == "") || ($_REQUEST['requestdate'] == "")){

        $smg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> Fill All Field!</div>';
    }else{
        $rinfo = $_REQUEST['requestinfo'];
        $rdesc = $_REQUEST['requestdesc'];
        $rname = $_REQUEST['requestname'];
        $radd1 = $_REQUEST['requestadd1'];
        $radd2 = $_REQUEST['requestadd2'];
        $rcity = $_REQUEST['requestcity'];
        $state = $_REQUEST['requeststate'];
        $rzip = $_REQUEST['requestzip'];
        $remail = $_REQUEST['requestemail'];
        $rmobile = $_REQUEST['requestmobile'];
        $rdate = $_REQUEST['requestdate'];

        $sql = "INSERT INTO submitrequest_tb( request_info,request_desc, 
        request_name,request_add1,request_add2,request_city, 
        request_state,request_zip,request_email,request_mobile,request_date)
         VALUES('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$state',
         '$rzip','$remail','$rmobile','$rdate')";

         if($conn->query($sql) == true){
             $genid = mysqli_insert_id($conn);
             $smg = '<div class="alert-success col-sm-6 ml-5 mt-2"> Request Submited Sucessfully. </div>';
             $_SESSION['myid'] = $genid;
             
             echo "<script> location.href='submitReSucceess.php ?>'</script>";
         }else{
             $smg = '<div class="alert-danger col-sm-6 ml-5 mt-2"> Unable to submit Request</div>'. error_reporting($sql);
         }
    }
}
?>

<!--  -->
<div class="col-sm-9 col-md-10 mt-5">
    <form action="" method="POST" class="mx-5">
        <div class="form-group">
            <label for="inputRequestInfo"> Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" name="requestinfo" placeholder="request Info">
        </div>
        <div class="form-group">
            <label for="inputRequestdesciption"> Description</label>
            <input type="text" class="form-control" id="inputRequestdesciption" name="requestdesc" placeholder="Write Description">
        </div>
        <div class="form-group">
            <label for="inputname"> Name</label>
            <input type="text" class="form-control" id="inputname" name="requestname" placeholder="Name">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address Line 1</label>
                <input type="text" class="form-control" id="inputAddress" name="requestadd1" placeholder="House no. 123">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Address Line 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="requestadd2" placeholder="Phnom Penh">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputcity">City</label>
                <input type="text" class="form-control" id="inputcity" name="requestcity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputstate">State</label>
                <input type="text" class="form-control" id="inputstate" name="requeststate">
            </div>
            <div class="form-group col-md-2">
                <label for="inputzip">Zip</label>
                <input type="text" class="form-control" id="inputzip" name="requestzip" onkeypress="isInputNumber(event)">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="requestemail">
            </div>
            <div class="form-group col-md-2">
                <label for="inputMobile">Mobile</label>
                <input type="text" class="form-control" id="inputMobile" name="requestmobile" onkeypress="InputNumber(event)">
            </div>
            <div class="form-group col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" id="inputDate" name="requestdate">
            </div>
        </div>
    <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
    <button type="reset" class="btn btn-secondary" name="requestreset">Reset</button>
    </form>
    <?php if(isset($smg)){echo $smg;}?>
    </div>

<?php
include('includes/footer.php');
?>