<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <div class="container text-center" style="max-width:600px;">
        <h1 class="h3 mb-3 mt-4 text-center">Login</h1>
        <?php if(isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">
                Incorrect Email Or Password!
            </div> 
        <?php endif ?>
        <?php if(isset($_GET['register'])) : ?>
            <div class="alert alert-info">
                Account Create!
            </div> 
        <?php endif ?>
        <?php if(isset($_GET['suspended'])) : ?>
            <div class="alert alert-danger">
                Suspended Account!
            </div> 
        <?php endif ?>
        <form action="_actions/login.php" method="post">
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
            <button class="btn btn-primary w-100 mb-3">Login</button>
            <a href="register.php">Register</a>
        </form>
    </div>
</body>
</html>