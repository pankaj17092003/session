
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 "></div>
            <div class="col-sm-4 p-5 mt-5 rounded-4" style="background: rgb(240, 240, 240);">
                <h3 class='text-center'>REGISTRATION</h3>
            <form action="registcode.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="Enter the Name" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User Email</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Enter the Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text"  id="password" name="pass" class="form-control" placeholder="Enter the Password">

    <a href="login.php">login</a>
  </div>
  <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
</form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>