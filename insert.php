<?php
session_start();
include ("dbconfig/db.php");
if(isset($_POST['btn_save'])){
    // variable declaration with post input
    $username = $_POST['txt_user_name'];
    $email = $_POST['txt_email'];
    $age = $_POST['txt_age'];

    //query
    $insert_query = "INSERT INTO users (username, email, age) VALUES ('$username', '$email', '$age')";
    //query result
    $result_insert_query = mysqli_query($conn,$insert_query);
    // check output

    if($result_insert_query){
       // echo "200";
        $_SESSION['message'] = "Success Record Saved";
        $_SESSION['msg_type'] = "primary";

        header("location: index.php");
    }
    else{
        echo "Oops, Error Occurred, Try Again";
    }




}