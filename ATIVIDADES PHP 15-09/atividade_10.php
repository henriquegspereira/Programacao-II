<?php

class ConversorTemperatura
{
    public static function celsiusParaFahrenheit(float $celsius): float
    {
        return ($celsius * 1.8) + 32;
    }

    public static function fahrenheitParaCelsius(float $fahrenheit): float
    {
        return ($fahrenheit - 32) / 1.8;
    }
}


$temperaturasCelsius = [0, 25, 37.5, 100];
$temperaturasFahrenheit = [32, 77, 99.5, 212];

echo "--- CELSIUS PARA FAHRENHEIT ---" . PHP_EOL;
foreach ($temperaturasCelsius as $c) {
    $f = ConversorTemperatura::celsiusParaFahrenheit($c);
    echo "{$c}°C equivale a " . number_format($f, 1, ',', '.') . "°F" . PHP_EOL;
}

echo PHP_EOL . "--- FAHRENHEIT PARA CELSIUS ---" . PHP_EOL;
foreach ($temperaturasFahrenheit as $f) {
    $c = ConversorTemperatura::fahrenheitParaCelsius($f);
    echo "{$f}°F equivale a " . number_format($c, 1, ',', '.') . "°C" . PHP_EOL;
}