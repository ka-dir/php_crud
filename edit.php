<?php
include ("dbconfig/db.php");
//get id
$get_id = $_GET['get_id'];

// query for specific id
$select_query = "SELECT * FROM users WHERE id='".$get_id."'";
// result
$result_select_query = mysqli_query($conn, $select_query);
//loop
while ($row = mysqli_fetch_assoc($result_select_query)){
    $id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $age = $row['age'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet" >
</head>
<body class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-title">
                    <h3 class="bg-success text-white text-center py-3">
                        Update Registration Form
                    </h3>
                </div>
                <div class="card-body">
                    <form action="update.php?update_id=<?php echo $id;?>" method="post">
                        <input type="text" name="txt_user_name" class="form-control mb-2" value="<?php echo $username;?>">
                        <input type="text" name="txt_email" class="form-control mb-2" value="<?php echo $email;?>">
                        <input type="text" name="txt_age" class="form-control mb-2" value="<?php echo $age; ?>">
                        <button type="submit" name="btn_update" class="btn btn-primary">Update</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
