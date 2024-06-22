<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <div class="container text-center" style="max-width:600px;">
        <h1 class="h3 mb-3 mt-4 text-center">Register</h1>
        <form action="_actions/create.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name ..." class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="text" name="phone" placeholder="Phone" class="form-control mb-2" required>
            <input type="text" name="address" placeholder="Address" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
            <button class="btn btn-primary w-100 mb-3">Register</button>
            <a href="index.php">Login</a>
        </form>
    </div>
</body>
</html>