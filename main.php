<?php

include "Time.php";
include "HrTime.php";

$nTime = new Time();

echo $nTime->show() . "\n";

$nHr = new HrTime();

echo $nHr->show() . "\n";
echo $nHr->split() . "\n";



?>