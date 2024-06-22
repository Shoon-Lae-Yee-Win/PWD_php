<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Role</title>
</head>
<body>
    <h1>Edit Role</h1>
    <?php
        $id = $_GET['id'];
        // echo $id;
        $db = new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
        $result = $db->query("SELECT * FROM roles WHERE id=$id");
        $row = $result->fetch();
    ?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['Id'] ?>">
        <input type="text" name="name" placeholder="Name" value="<?= $row['name'] ?>"><br>
        <input type="text" name="value" placeholder="Value"  value="<?= $row['value'] ?>"><br><br>
        <button>Edit Role</button>
    </form>
</body>
</html>