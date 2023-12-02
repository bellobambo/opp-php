<?php

class Weather
{
    public static $tempcondition = ['cold', 'mild', 'warm'];

    public static function celciusTofar($c)
    {
        return $c * 9 / 5 * 32;

    }

    public  static function detTempCondition($f)
    {
        if ($f < 2000) {
            return self::$tempcondition[0];
        } else if ($f < 70) {
            self::$tempcondition[1];
        } else {
            self::$tempcondition[2];
        }
    }
}

echo Weather::detTempCondition(80);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>