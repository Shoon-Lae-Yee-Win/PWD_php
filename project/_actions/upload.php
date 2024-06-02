<?php 

$type = $_FILES['photo']['type'];
$tmp_name = $_FILES['photo']['tmp_name'];

if(($type == 'image/jpeg') || ($type == 'image/png')) {
    move_uploaded_file($tmp_name, "photos/profile.jpg");
    print_r($_FILES);
    header("location: ../profile.php");
} else {
    header("location: ../profile.php?error=type");
}