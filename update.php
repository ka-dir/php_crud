<?php
session_start();
include ("dbconfig/db.php");
if(isset($_POST['btn_update'])){
    //get specific id
    $update_get_id = $_GET['update_id'];
    // variable declaration with post input
    $username = $_POST['txt_user_name'];
    $email = $_POST['txt_email'];
    $age = $_POST['txt_age'];

    //query
    $update_query = "UPDATE users SET username='".$username."', email='".$email."', age='".$age."' WHERE id='".$update_get_id."'";
    //result
    $update_query_Result = mysqli_query($conn, $update_query);
    //output
    if($update_query_Result){
        $_SESSION['message'] = "Success Record Saved";
        $_SESSION['msg_type'] = "info";
        header("location: index.php");
    }
    else{
        echo "300";
    }
}

