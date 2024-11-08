<?php

session_start();

if (isset($_SESSION['email'])) {
$user =  $_SESSION['email'];
$pass = $_SESSION['password'];
}
else{
    echo "<script>alert('please login');window.location.href='login.php'</script>";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>LoginSystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="cintainer">
    <div class="row">
        <div class="co-sm-12">
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand bg-danger p-2 text-white rounded-3" href="#">LoginSystem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="">Admin LogIn</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
    </div>
    <div class="row mt-5 ">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <h1 id="heading" class="text-center mb-2">Profile</h1>
    <table class="table border">
  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">User Email </th>
      <th scope="col">User Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $user ;?></td>
      <td><?php echo $pass ;?></td>
    </tr>
    
   
  </tbody>
</table>
    </div>
    <div class="col-sm-4"></div>
    </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="script.js"></script>
  </body>
</html>
