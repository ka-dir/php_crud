<?php
session_start();
include ("dbconfig/db.php");
//if delete is clicked
if(isset($_GET['del_id'])){
    $delete_id = $_GET['del_id'];
//query
    $delete_query = "DELETE  FROM users WHERE id='".$delete_id."'";
    //result
    $result_delete_query = mysqli_query($conn, $delete_query);
    //output

    if($result_delete_query){
        $_SESSION['message'] = "Success Record Saved";
        $_SESSION['msg_type'] = "danger";
        header("location: index.php");
    }
    else{
        echo "300";
    }


}


