<?php

namespace App_import;

// include("autoload.php");

// use Helpers\Math;
// use Support\Libs\Area;

// $math = new Math;
// $area = new Area;

// $math->add(2,5);
// $area->circle(2);

include("vendor/autoload.php");

use Carbon\Carbon;
use Helpers\Math;
use Support\Libs\Area;

$math = new Math;
$math->add(4,5);

$area = new Area;
$area->circle(2);

echo Carbon::now()->addDay(5);