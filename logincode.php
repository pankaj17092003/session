<?php
if (!empty($_REQUEST['email']) && !empty($_REQUEST['pass'])) {
    $conn = mysqli_connect("localhost", "root", "", "loginsystem");

    if ($conn) {
        $email =$_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0) {
            $user = mysqli_fetch_assoc($query);
            // Login success
            session_start();
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            echo "<script>alert('Login Successful');window.location.href='shopingweb/index.html';</script>";
        } else {
            echo "<script>alert('Invalid Email or Password');window.location.href='login.php';</script>";
        }
    } else {
        echo "Failed to connect to the database.";
    }
} else {
    // If form inputs are empty
    echo "<script>alert('Form fields cannot be empty');window.location.href='login.php';</script>";
}


?>
