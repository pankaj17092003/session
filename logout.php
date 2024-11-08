<?php
session_start();
session_destroy(); 
    echo "<script>alert('You Are Logout'); window.location.href='login.php'</script>";
?>
