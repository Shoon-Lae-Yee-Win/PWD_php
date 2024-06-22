<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role List</title>
</head>
<body>
    <h1>Role List</h1>
    <?php
        $sql = "SELECT * FROM roles";
        $db = new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
        $result = $db->query($sql);
        $rows = $result->fetchAll();
    ?>
    <ul>
        <?php foreach($rows as $row): ?>
        <li>
            <a href="del.php?id=<?= $row['Id'] ?>">Delete</a>
            <a href="edit.php?id=<?= $row['Id'] ?>">Edit</a>
            <?= $row['name'] ?>
            (<?= $row['value'] ?>)
        </li>
        <?php endforeach ?>
    </ul>
    <a href="new.php">New Role</a>
</body>
</html>