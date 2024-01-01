<?php
session_start();
include('dbcon.php');
$id = $_SESSION['login_user'];

$sql_session = "SELECT * FROM `user` WHERE username = '$id'";
$result_session = $conn -> query($sql_session);
if ($result_session && $result_session->num_rows > 0) {
    $row_session = $result_session->fetch_assoc();
    $img = $row_session['img_path'];

} else {
    // Handle case when no data is found
    echo "No data found or empty result set.";
}

?>
