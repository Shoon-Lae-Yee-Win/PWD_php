<?php

// function add($a, $b) {
//     echo $a + $b;
// }

$name = "Alice";
echo "Hello $name";
echo "<br>";
echo 'Hello $name';  // single quote so variable name co ma ti bu doesn't work
echo "<br>";

// let arr = ['abc', 123, true, [1,2]]
$arr = ['abc', 123, true, [1,2]];
print_r($arr);
echo "<br>";

// let user = {name : 'Alice', age: 22}
$user = ['name' => 'Alice', 'age' => 22];
print_r($user);

//?name=Tom&age=123
print_r($_GET);