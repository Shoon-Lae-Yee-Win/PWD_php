<?php

$name = $_POST['name'];
$value = $_POST['value'];

// $sql = "INSERT INTO roles (name,value) VALUES (?, ?)";
$sql = "INSERT INTO roles (name,value) VALUES (:name, :value)";
echo $sql;

// mysqli_connect(); not use

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
// $db->query($sql);
$statement = $db->prepare($sql);
// $statement->execute($name, $value);
$statement->execute(['name' => $name, 'value' => $value]);

header("location: index.php");