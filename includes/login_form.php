<?php
    session_start();
    include('dbcon.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT username, `password` FROM `user` WHERE username = '$user'";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if ($row && password_verify($pass, $row['password'])) {
                // Passwords match, user is authenticated
                $_SESSION['login_user'] = $user;
                header("location: ../education.php");
            } else {
                echo "<script type='text/javascript'>alert('Incorrect username or password');</script>";
                header("location: login.php");
            }
        }
    }
?>