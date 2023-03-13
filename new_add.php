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
                        Registration Form
                    </h3>
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post">
                        <input type="text" name="txt_user_name" class="form-control mb-2" placeholder="Username">
                        <input type="text" name="txt_email" class="form-control mb-2" placeholder="Email">
                        <input type="text" name="txt_age" class="form-control mb-2" placeholder="Age">
                        <button type="submit" name="btn_save" class="btn btn-primary">Save</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
