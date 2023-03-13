<?php
session_start();
include("dbconfig/db.php");
// query
$select_query = "SELECT * FROM users";
// result
$result_select_query = mysqli_query($conn, $select_query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
<div class="container">

    <div class="row">
        <a href="new_add.php" class="primary">ADD</a>
        <div class="col  m-auto">
            <div class="card mt-5">
                <?php
                if (isset($_SESSION['message'])):
                    ?>
                    <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                    </div>
                <?php
                endif;
                ?>
                <table class="table table-striped table-striped-columns table-hover">

                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result_select_query)){
                            $id = $row['id'];
                            $Username = $row['username'];
                            $email = $row['email'];
                            $age = $row['age'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo $id; ?></th>
                        <td><?php echo $Username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><a href="edit.php?get_id=<?php echo $id;?>">Edit</a> </td>
                        <td><a href="delete.php?del_id=<?php echo $id;?>">Delete</a> </td>

                    </tr>
                    <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>


</body>
</html>
