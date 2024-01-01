<?php
session_start();
require('dbcon.php');

if (isset($_REQUEST['username'])) {
    // Sanitize and escape user input
    $Fname = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
    $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $password = $_REQUEST['password'];
    $confirmpass = $_REQUEST['conpassword'];

    if (isset($_FILES['ufile'])) {
        $uploaddir = 'D:/xampp/htdocs/herb-reco/img/user/';
        $uploadfile = $uploaddir . basename($_FILES['ufile']['name']);

        if (move_uploaded_file($_FILES['ufile']['tmp_name'], $uploadfile)) {
            echo '<script>alert("Upload Successfully")</script>';
     
            $imagePath = 'img/user/' . basename($_FILES['ufile']['name']); 

      
            if ($password === $confirmpass) {
             
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT into user (`name`, `age`, `username`, `password`, `img_path`)
                VALUES ('$Fname', '$age', '$username', '$hashedPassword', '$imagePath')";

                $result = mysqli_query($conn, $query);
        

                if ($result) {
                    $_SESSION['name'] = $Fname;
                  
                    echo "Session variable 'name' set: " . $_SESSION['name']; 
                    header("location: ../login.php");
                    // You can redirect here if you want
                } else {
                    echo '<script>alert("An error occurred while registering. Please try again later.")</script>';
                }
            } else {
                echo '<script>alert("Passwords do not match")</script>';
            }
        } else {
            echo '<script>alert("Error in uploading the image")</script>';
        }
    } else {
        echo '<script>alert("No image was uploaded.")</script>';
    }
} else {
    // Handle the case where the form is not submitted
    echo '<script>alert("Please submit the registration form.")</script>';
}

// You can redirect here if you want
?>
