<?php

define("KELVIN_OFFSET", 273.15);

$celsius = 100;
$kelvin = $celsius + KELVIN_OFFSET;
$Fahrenheit = ($celsius * 9/5) + 32;

echo $celsius. "°C =" . $kelvin . "K\n";
echo $celsius. "°C =" . $Fahrenheit . "°F\n";
?>