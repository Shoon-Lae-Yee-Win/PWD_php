<?php

// $login = true;
// if(!$login) {
//     header("location: index.php");
// }

// session_start();
// $login = isset($_SESSION['user']);
// if(!$login) {
//     header("location: index.php");
//     exit();
// }

include("vendor/autoload.php");

use Helpers\Auth;

Auth::check();
$user = $_SESSION['user'];

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

        <?php if($user->photo) :?>
            <img src="_actions/photos/<?= $user->photo ?>" class="img-thumbnail my-2" width="200">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-2">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>

        <ul class="list-group mb-2">
            <li class="list-group-item">Name: <?= $user->name ?></li>
            <li class="list-group-item">Email: <?= $user->email ?></li>
            <li class="list-group-item">Phone: <?= $user->phone ?></li>
            <li class="list-group-item">Address: <?= $user->address ?></li>
        </ul>
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>