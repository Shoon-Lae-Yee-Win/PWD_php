<?php

// $name = "Alice";

// function user() {
//     global $name;
//     echo "hello $name";
// }

// user();

// function add(int $a , int $b) : int {
//     return $a + $b;
// }

namespace Foo;

include("math.php");
include("lib.php");

Fiz\add(1,2);

\Boo\Baz\add([1,3,4]);
