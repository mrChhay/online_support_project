
<?php
if(session_id() == ''){
    session_start();
}
if($_SESSION['is_adminlogin']){
    $aEmail=$_SESSION['aEmail'];
}else{
    echo "<script> location.href='login.php'</script>";
}

// views btn
if(isset($_REQUEST['views'])){
    $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

// close btn
if(isset($_REQUEST['close'])){
    $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        echo 'meta http-equiv="refresh" content= "0;URL=?closed" />';
    }else{
        echo "Unable to Delect";
    }
}

// assign button
if(isset($_REQUEST['assign'])){
    if(($_REQUEST['request_id']) == "" || ($_REQUEST['request_info'] == "") || ($_REQUEST['request_desc'] == "")
    || ($_REQUEST['request_name'] == "") || ($_REQUEST['request_add1'] == "") || ($_REQUEST['request_add2'] == "")
    || ($_REQUEST['request_city'] == "") || ($_REQUEST['request_state'] == "") || ($_REQUEST['request_zip'] == "")
    || ($_REQUEST['request_email'] == "") || ($_REQUEST['request_mobile'] == "")
    || ($_REQUEST['assigntech'] == "") || ($_REQUEST['inputdate'] == "")){
        $smg = '<div class="alert-warning col-sm-6 ml-5 mt-2"> All Field Requst!</div>';
    }

    else{
        $rid = $_REQUEST['request_id'];
        $rinfo = $_REQUEST['request_info'];
        $rdesc = $_REQUEST['request_desc'];
        $rname = $_REQUEST['request_name'];
        $radd1 = $_REQUEST['request_add1'];
        $radd2 = $_REQUEST['request_add2'];
        $rcity = $_REQUEST['request_city'];
        $state = $_REQUEST['request_state'];
        $rzip = $_REQUEST['request_zip'];
        $remail = $_REQUEST['request_email'];
        $rmobile = $_REQUEST['request_mobile'];
        $rassigntech = $_REQUEST['assigntech'];
        $rdate = $_REQUEST['inputdate'];

        // insert data 
        $sql = "INSERT INTO assignwork_tb (	request_id , request_info , request_desc
        , request_name , request_add1 , request_add2 , request_city , request_state 
        , request_zip , request_email , request_mobile , assign_tech , assign_date)
        VALUES ('$rid' , '$rinfo' , '$rdesc' , '$rname' , '$radd1' , '$radd2' , '$rcity' ,
        '$state' , '$rzip' , '$remail' , '$rmobile' , '$rassigntech' , '$rdate' )";
        if($conn->query($sql) == TRUE){
            $smg = '<div class="alert-success col-sm-6 ml-5 mt-2"> Work Assigned Success</div>';
        }else{
            $smg = '<div class="alert-danger col-sm-6 ml-5 mt-2"> Unable to Assign Work</div>';
        }
    }
}
?>

<div class="col-sm-5 mt-5 jumbotron">
        <form action="" method="POST">
            <h5 class="text-center"> Assign Work Order Request</h5>
            <div class="form-gruop">
                <label for="request_id"> Request ID </label>
                <input type="text" class="form-control" id="request_id" name="request_id"
                value="<?php if(isset($row['request_id'])) echo $row['request_id'];  ?> " readonly>
            </div>
            <div class="form-gruop">
                <label for="request_id"> Request Info </label>
                <input type="text" class="form-control" id="request_info" name="request_info"
                value="<?php if(isset($row['request_info'])) echo $row['request_info'];  ?> ">
            </div>
            <div class="form-gruop">
                <label for="request_desc"> Request Desc </label>
                <input type="text" class="form-control" id="request_desc" name="request_desc"
                value="<?php if(isset($row['request_desc'])) echo $row['request_desc'];  ?> ">
            </div>
            <div class="form-gruop">
                <label for="request_name"> Request Name </label>
                <input type="text" class="form-control" id="request_name" name="request_name"
                value="<?php if(isset($row['request_name'])) echo $row['request_name'];  ?> ">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="add1"> Address Line 1</label>
                    <input type="text" class="form-control" id="add1" name="request_add1"
                    value="<?php if(isset($row['request_add1'])) echo $row['request_add1'];  ?> ">
                </div>
                <div class="form-group col-md-6">
                    <label for="add2"> Address Line 2</label>
                    <input type="text" class="form-control" id="add2" name="request_add2"
                    value="<?php if(isset($row['request_add2'])) echo $row['request_add2'];  ?> ">
                </div>
                
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="city"> City</label>
                    <input type="text" class="form-control" id="city" name="request_city"
                    value="<?php if(isset($row['request_city'])) echo $row['request_city'];  ?> ">
                </div>
                <div class="form-group col-md-4">
                    <label for="state"> State</label>
                    <input type="text" class="form-control" id="state" name="request_state"
                    value="<?php if(isset($row['request_state'])) echo $row['request_state'];  ?> ">
                </div>
                <div class="form-group col-md-4">
                    <label for="zip"> Zip</label>
                    <input type="text" class="form-control" id="zip" name="request_zip"
                    onkeypress="isInputNumber(event)"
                     value="<?php if(isset($row['request_zip'])) echo $row['request_zip']; ?> ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="reemail">Email</label>
                    <input type="email" class="form-control" id="reemail" name="request_email"
                    value="<?php if(isset($row['request_email'])) echo $row['request_email']; ?> ">
                </div>
                <div class="form-group col-md-4">
                    <label for="remobile">Mobile</label>
                    <input type="text" class="form-control" id="remobile" name="request_mobile"
                    value="<?php if(isset($row['request_mobile'])) echo $row['request_mobile']; ?> "
                    onkeypress="isInputNumber(event)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-gruop col-md-6">
                    <label for="assigntech"> Assign To Technician</label>
                    <input type="text" class="form-control" id="assigntech" name="assigntech">
                </div>
                <div class="form-gruop col-md-6">
                    <label for="inputdate"> Date</label>
                    <input type="date" class="form-control" id="inputdate" name="inputdate">
                </div>
            </div>
            <div class="float-right mt-3">
                <button type="submit" class="btn btn-success mr-3" name="assign"> Assign</button>
                <button type="reset" class="btn btn-secondary" name="reset"> Reset</button>
            </div>
        </form>
        <?php if(isset($smg)){echo $smg;} ?>
    </div>
    <?php
    include('include/footer.php');
  ?>