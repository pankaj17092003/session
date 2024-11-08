<?php

if ($_POST["name"]!=="" and $_POST["email"]!=="" and $_POST["pass"]!=="") {
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
// $hashpass =password_hash($pass , null);

// including database 
$conn =mysqli_connect("localhost","root","","loginsystem");
$sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";

    if (mysqli_query($conn , $sql)) {
        echo "<script>alert('New User Inserted ');window.location.href='registration.php'</script>";
    }
    else{
        echo "<script>alert('Something went wrong ');window.location.href='registration.php'</script>";
    }

}
else{
    echo "<script>alert('Ohh! input field are empty please fill the username password and email  ');window.location.href='registration.php'</script>";
}



?>