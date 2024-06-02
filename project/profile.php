<?php

// $login = true;
// if(!$login) {
//     header("location: index.php");
// }

session_start();
$login = isset($_SESSION['user']);
if(!$login) {
    header("location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="max-width: 800px;">
        <h1 class="h3 mt-4 mb-3">Profile</h1>

        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Unable to Upload Image!<i class="fa-solid fa-circle-exclamation ms-2"></i>
            </div>
        <?php endif ?>

        <?php if(file_exists("_actions/photos/profile.jpg")) :?>
            <img src="_actions/photos/profile.jpg" class="img-thumbnail my-2" width="200">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-2">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>

        <ul class="list-group mb-2">
            <li class="list-group-item">Name: Alice</li>
            <li class="list-group-item">Email: alice@gmail.com</li>
            <li class="list-group-item">Phone: 01-456823</li>
            <li class="list-group-item">Address: Some address</li>
        </ul>
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>