<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="" style="background:rgb(193, 234, 233);">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 "></div>
            <div class="col-sm-4 bg-warning p-5 mt-5 rounded-4">
                <h3 class='text-center'> Loging Page</h3>
                <form action="logincode.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter the Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" name="pass" class="form-control" placeholder="Enter the Password"><br>
                        <span><a href="registration.php" class="text-success text-decoration-none"><b>New Registration</b></a></span>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span><a href="admin_pannel/login.php" class="text-success text-decoration-none"><b>Admin Login</b></a></span>
                    </div>
                    <button type="subamit" class="btn btn-primary form-control">Submit</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>