<?php
class TemperaturaModelo {

    public function celsiusAFahrenheit($celsius) {
        $fahrenheit = ($celsius * 9/5) + 32;
        return round($fahrenheit, 2);
    }
}
?>