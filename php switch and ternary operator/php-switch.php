<?php

$days = "sunday";


switch ($days) {
    case "saturday":
        echo "today is work day";
        break;

    case "sunday":
        echo "today is holy-day";
        break;

    case "monday":
        echo "to day is work week first day";
        break;

    default:
        echo "no a valid day of the week";
}

?>